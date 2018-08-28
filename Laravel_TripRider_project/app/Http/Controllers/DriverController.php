<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddPackageRequest;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ChangePasswordAlert;
use GMaps;
use App\User;
use App\Package;

class DriverController extends Controller
{
    public function dashboard(Request $request)
    {
        $driver=User::Find(session('user')->id);
        $totalPackages= Package::where('driver_id',session('user')->id)->count();

    	return view('driver.dashboard')
            ->with('driver',$driver)
            ->with('totalPackages',$totalPackages);
    }

    public function addpackage(Request $request)
    {
        $driver=User::Find(session('user')->id);


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
            $request->session()->put('end_lat',23.6149501);
            $request->session()->put('end_lan',90.4982625);

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



        return view('driver.addpackage')
                ->with('driver',$driver)
                ->with('map',$map);
    }
    public function start(Request $request)
    {
        $request->session()->put('start_lat',$request->input('start_lat'));
        $request->session()->put('start_lan',$request->input('start_lan'));
        $request->session()->put('startaddress',$request->input('startaddress'));
        
        return (session('start_lan'));
    }
    public function end(Request $request)
    {
        $request->session()->put('end_lat',$request->input('end_lat'));
        $request->session()->put('end_lan',$request->input('end_lan'));
        
        return (session('end_lan'));
    }

    public function saveaddpackage(AddPackageRequest $request)
    {
        $file = $request->file('image');
        $file->move('uploads',$file->getClientOriginalName());
        //dd($file);
        // $extention=$file->getClientOriginalExtension();
        
        // if($extention!="jpg" || $extention!="png" || $extention!="jpeg")
        // {
        //     $request->session()->flash('message', 'Profile Updated.');
        //     return  redirect()->route('driver.viewprofile',$id);
        // }
       
        

        $Package=new Package();
        $Package->name=$request->Name;
        $Package->from=$request->from;
        $Package->to=$request->to;
        $Package->trip_length=$request->Triplength;
        $Package->description=$request->Description;
        $Package->car_type=$request->Car_type;
        $Package->trip_type=$request->Trip_Type;
        $Package->driver_id=session('user')->id;
        $Package->total_sits=$request->TotalSits;
        $Package->total_cost=$request->TotalCost;
        $Package->start_latitude=session('start_lat');
        $Package->start_longitude=session('start_lan');
        $Package->end_latitude=session('end_lat');
        $Package->end_longitude=session('end_lan');
        $Package->image="abc";
        $Package->save();

        $request->session()->forget('start_lat');
        $request->session()->forget('start_lan');
        $request->session()->forget('end_lat');
        $request->session()->forget('end_lan');


    	return redirect()->route('driver.dashboard');
    }
     

    public function packages(Request $request)
    {
        $driver=User::Find(session('user')->id);
        $packages=DB::table('users')
                ->join('packages', 'packages.driver_id', '=', 'users.id')
                ->where('driver_id',session('user')->id)
                ->select('users.name as driverName', 'users.*','packages.name as packageName','packages.*')
                ->get();
        //dd($packages);

    	return view('driver.packages')
                ->with('driver',$driver)
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
        $dist = $response_a['rows'][0]['elements'][0]['distance']['text'];
        $time = $response_a['rows'][0]['elements'][0]['duration']['text'];

        return array('distance' => $dist, 'time' => $time);
    }

    public function packagedetail($id,Request $request)
    {
        $driver=User::Find(session('user')->id);
        $package=DB::table('users')
                ->join('packages', 'packages.driver_id', '=', 'users.id')
                ->where('driver_id',session('user')->id)
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

        $distance=DriverController::getdistance($package->start_latitude,$package->start_longitude,$package->end_latitude,$package->end_longitude);

        return view('driver.packagedetail')
                ->with('driver',$driver)
                ->with('package',$package)
                ->with('map',$map)
                ->with('distance',$distance);
    }

    public function packageedit($id,Request $request)
    {
        $driver=User::Find(session('user')->id);
        $package=Package::Find($id);

        $config['zoom']='auto';
        $config['map_height']='600px';
        $config['scrollwheel']=true;
        $config['trafficOverlay'] = TRUE;

        $marker_start = array();
        if(!session('start_lan'))
        {
            $request->session()->put('start_lat',$package->start_latitude);
            $request->session()->put('start_lan',$package->start_longitude);

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
            $request->session()->put('end_lat',$package->end_latitude);
            $request->session()->put('end_lan',$package->end_longitude);

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

    	return view('driver.packageedit')
                ->with('driver',$driver)
                ->with('package',$package)
                ->with('map',$map);
    }
    public function savepackageedit($id,Request $request)
    {
        

        $Package=Package::Find($id);

        $Package->name=$request->Name;
        $Package->from=$request->from;
        $Package->to=$request->to;
        $Package->trip_length=$request->Triplength;
        $Package->description=$request->Description;
        $Package->car_type=$request->Car_type;
        $Package->trip_type=$request->Trip_Type;
        $Package->driver_id=session('user')->id;
        $Package->total_sits=$request->TotalSits;
        $Package->total_cost=$request->TotalCost;
        $Package->start_latitude=session('start_lat');
        $Package->start_longitude=session('start_lan');
        $Package->end_latitude=session('end_lat');
        $Package->end_longitude=session('end_lan');
        $Package->image="abc";
        $Package->save();

        $request->session()->forget('start_lat');
        $request->session()->forget('start_lan');
        $request->session()->forget('end_lat');
        $request->session()->forget('end_lan');


        return redirect()->route('driver.packageedit',$id);
    }
    public function packagedelete($id,Request $request)
    {
        $package=Package::Find($id);
        $package->delete();

        return redirect()->route('driver.packages');

    }

    public function viewprofile($id,Request $request)
    {
        $driver = User::find($id);
        
    	return view('driver.viewprofile')->with('driver',$driver);
    }
    public function editprofile($id,Request $request)
    {
        $driver = User::find($id);
        return view('driver.editprofile')->with('driver',$driver);
    }
    public function saveeditprofile($id,Request $request)
    {
        $driver = User::find($id);

        $driver->name=$request->Name;
        $driver->phonenumber=$request->PhoneNumber;

        $driver->save();

        $request->session()->flash('message', 'Profile Updated.');
    	return  redirect()->route('driver.viewprofile',$id);
    }

    public function changepassword(Request $request)
    {
        $driver=User::Find(session('user')->id);

        return view('driver.changepassword')->with('driver',$driver);
    }
    public function savechangepassword(Request $request)
    {

        if($request->oldpass!=User::Find(session('user')->id)->password)
        {
            $request->session()->flash('errmessage', 'Old Password do not match!!!');
            return  redirect()->route('driver.changepassword');
        }
        else if($request->newpass!=$request->repass)
        {
            $request->session()->flash('errmessage', 'New Password and Retype password must be same');
            return  redirect()->route('driver.changepassword');
        }
        $driver = User::find(session('user')->id);

        $driver->password=$request->repass;

        $driver->save();

        Mail::to($driver->email)->send(new ChangePasswordAlert($driver));

        $request->session()->flash('message', 'Password Successfully Changed.');
        return  redirect()->route('driver.changepassword');
    	
    }
}
