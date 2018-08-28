<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ChangePasswordAlert;
use GMaps;
use App\User;
use App\Package;
use App\Rider_requested_trip;
use App\Booked_package_trip;
use App\Booked_manual_trip;

class RiderController extends Controller
{
    public function dashboard(Request $request)
    {
    	return view('rider.dashboard');
    }
    public function packages(Request $request)
    {
        $packages=DB::table('users')
                ->join('packages', 'packages.driver_id', '=', 'users.id')
                ->select('users.name as driverName', 'users.*','packages.name as packageName','packages.*')
                ->get();

    	return view('rider.packages')
                ->with('packages',$packages);
    }
    public static function getdistance($lat1,$lon1,$lat2,$lon2)
    {
        // $theta = $lon1 - $lon2;
        // $miles = (sin(deg2rad($lat1)) * sin(deg2rad($lat2))) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
        // $miles = acos($miles);
        // $miles = rad2deg($miles);
        // $miles = $miles * 60 * 1.1515;
        // $kilometers = $miles * 1.609344;
        // return $kilometers; 

        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$lat1.",".$lon1."&destinations=".$lat2.",".$lon2."&mode=driving&language=pl-PL";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $response = curl_exec($ch);
        curl_close($ch);
        $response_a = json_decode($response, true);
        $dist = $response_a['rows'][0]['elements'][0]['distance']['value'];
        $time = $response_a['rows'][0]['elements'][0]['duration']['text'];

        return array('distance' => $dist, 'time' => $time);
    }

    public function packagedetail($id,Request $request)
    {
        $rider=User::Find(session('user')->id);
        $package=DB::table('users')
                ->join('packages', 'packages.driver_id', '=', 'users.id')
                ->select('users.name as driverName', 'users.*','packages.name as packageName','packages.*')
                ->where('packages.id',$id)
                ->first();

       // dd($package);


        

        $config['zoom']='auto';
        $config['map_height']='500px';
        $config['scrollwheel']=true;

        // $request->session()->put('start_lat',$package->start_latitude);
        // $request->session()->put('start_lan',$package->start_longitude);
        // $request->session()->put('end_lat',$package->end_latitude);
        // $request->session()->put('end_lan',$package->end_longitude);

        $start_pos=$package->start_latitude.','.$package->start_longitude;
        $end_pos=$package->end_latitude.','.$package->end_longitude;



        $marker_start['animation']= 'DROP';
        $marker_start['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=S|9999FF|000000';
        $marker_start['position'] = $start_pos;
        // $marker_start['draggable'] = true;
        // $marker_start['ondragend'] = 'set_start(event.latLng.lat(), event.latLng.lng());';
        $marker_start['infowindow_content'] = 'Start Address: '.$package->from;
        // $marker_start['onclick'] = 'alert(\'Start Address: \' +  document.getElementById(\'startaddress\').value);';
        GMaps::add_marker($marker_start);


        $marker_end = array();

        $marker_end['animation']= 'DROP';
        $marker_end['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=E|9999FF|000000';
        $marker_end['position'] = $end_pos;
        // $marker_end['draggable'] = true;
        // $marker_end['ondragend'] = 'set_end(event.latLng.lat(), event.latLng.lng());';
        $marker_end['infowindow_content'] = 'End Address: '.$package->to;
        // $marker_end['onclick'] = 'alert(\'End Address: \' +  document.getElementById(\'endaddress\').value);';
        GMaps::add_marker($marker_end);


        // $config['directions'] = TRUE;
        // $config['directionsStart'] = $start_pos;
        // $config['directionsEnd'] = $end_pos;
        // $config['directionsDivID'] = 'directionsDiv';
        // $config['trafficOverlay'] = TRUE;

        GMaps:: initialize($config);

        $map=GMaps::create_map();

        $distance=RiderController::getdistance($package->start_latitude,$package->start_longitude,$package->end_latitude,$package->end_longitude);

        return view('rider.packagedetail')
                ->with('rider',$rider)
                ->with('package',$package)
                ->with('map',$map)
                ->with('distance',$distance);
    }
    public function mytrips(Request $request)
    {
        return view('rider.mytrips');
    }
    public function start(Request $request)
    {
        $request->session()->put('start_lat',$request->input('start_lat'));
        $request->session()->put('start_lan',$request->input('start_lan'));
        
        return (session('start_lan'));
    }
    public function end(Request $request)
    {
        $request->session()->put('end_lat',$request->input('end_lat'));
        $request->session()->put('end_lan',$request->input('end_lan'));
        
        return (session('end_lan'));
    }
    public static function calculatecost()
    {
        // $theta = $lon1 - $lon2;
        // $miles = (sin(deg2rad($lat1)) * sin(deg2rad($lat2))) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
        // $miles = acos($miles);
        // $miles = rad2deg($miles);
        // $miles = $miles * 60 * 1.1515;
        // $kilometers = $miles * 1.609344;
        // return $kilometers; 

        if(session('start_lat')==null && session('start_lan')==null && session('end_lat')==null && session('end_lan')==null)
        {
            return 0;
        }

        $lat1=session('start_lat');
        $lon1=session('start_lan');
        $lat2=session('end_lat');
        $lon2=session('end_lan');

        $dist=RiderController::getdistance($lat1,$lon1,$lat2,$lon2);

        $distance=$dist['distance']/1000;
        
        $dist['cost']=intval(($distance*20)+40);    

        return $dist;
    }
    public function manualtrip(Request $request)
    {
        $config['zoom']='auto';
        $config['map_height']='600px';
        $config['scrollwheel']=true;
        $config['trafficOverlay'] = TRUE;

        $marker_start = array();
        if(!session('start_lan'))
        {
            $request->session()->put('start_lat',23.6066873);
            $request->session()->put('start_lan',90.5024867);

        }
        $start_pos=session('start_lat').','.session('start_lan');

        $marker_start['animation']= 'DROP';
        $marker_start['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=S|9999FF|000000';
        $marker_start['position'] = $start_pos;
        $marker_start['draggable'] = true;
        $marker_start['ondragend'] = 'set_start(event.latLng.lat(), event.latLng.lng());';
        $marker_start['infowindow_content'] = 'Start Address';
        $marker_start['onclick'] = 'alert(\'Start Address: \' +  document.getElementById(\'startaddress\').value);';
        GMaps::add_marker($marker_start);


        $marker_end = array();

        if(!session('end_lat'))
        {
            $request->session()->put('end_lat',23.821988);
            $request->session()->put('end_lan',90.426378);

        }
        $end_pos=session('end_lat').','.session('end_lan');

        $marker_end['animation']= 'DROP';
        $marker_end['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=E|9999FF|000000';
        $marker_end['position'] = $end_pos;
        $marker_end['draggable'] = true;
        $marker_end['ondragend'] = 'set_end(event.latLng.lat(), event.latLng.lng());';
        $marker_end['infowindow_content'] = 'End Address';
        $marker_end['onclick'] = 'alert(\'End Address: \' +  document.getElementById(\'endaddress\').value);';
        GMaps::add_marker($marker_end);


        GMaps:: initialize($config);

        $map=GMaps::create_map();

    	return view('rider.manualtrip')
                 ->with('map',$map);
    }
    public function savemanualtrip(Request $request)
    {
        //dd($request);

        $trip=new Rider_requested_trip();
        $trip->rider_id=session('user')->id;
        $trip->from=$request->startaddress;
        $trip->to=$request->endaddress;
        $trip->car_type=$request->Car_type;
        $trip->trip_type=$request->Trip_Type;
        $trip->total_cost=$request->totalcost;
        $trip->start_latitude=session('start_lat');
        $trip->start_longitude=session('start_lan');
        $trip->end_latitude=session('end_lat');
        $trip->end_longitude=session('end_lan');

        $trip->save();

        $book=new Booked_manual_trip();
        $book->rider_id=session('user')->id;
        $book->rider_requested_trip_id=$trip->id;
        $book->start_date=$request->dDate;
        $book->end_date=$request->rDate;
        $book->status="Pending";
        $book->save();

        $request->session()->forget('start_lat');
        $request->session()->forget('start_lan');
        $request->session()->forget('end_lat');
        $request->session()->forget('end_lan');


        $request->session()->flash('message', 'Your Trip Request Successfully Booked.Please Wait for the Driver.');
        return view('rider.dashboard');
    }
    public function viewprofile($id,Request $request)
    {
        $rider = User::find($id);
    	return view('rider.viewprofile')->with('rider',$rider);
    }
    public function editprofile($id,Request $request)
    {
        $rider = User::find($id);

    	return view('rider.editprofile')->with('rider',$rider);
    }
    public function saveeditprofile($id,Request $request)
    {
        $rider = User::find($id);

        $rider->name=$request->Name;
        $rider->phonenumber=$request->PhoneNumber;

        $rider->save();

        $request->session()->flash('message', 'Profile Updated.');
        return  redirect()->route('rider.viewprofile',$id);
    }
    public function changepassword(Request $request)
    {

    	return view('rider.changepassword');
    }
    public function savechangepassword(Request $request)
    {

        if($request->oldpass!=User::Find(session('user')->id)->password)
        {
            $request->session()->flash('errmessage', 'Old Password do not match!!!');
            return  redirect()->route('rider.changepassword');
        }
        else if($request->newpass!=$request->repass)
        {
            $request->session()->flash('errmessage', 'New Password and Retype password must be same');
            return  redirect()->route('rider.changepassword');
        }
        $rider = User::find(session('user')->id);

        $rider->password=$request->repass;

        $rider->save();

        Mail::to($rider->email)->send(new ChangePasswordAlert($rider));

        $request->session()->flash('message', 'Password Successfully Changed.');
        return  redirect()->route('rider.changepassword');
        
    }
}
