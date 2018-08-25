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

    	return view('driver.dashboard')
            ->with('driver',$driver);
    }

    public function addpackage(Request $request)
    {
        $driver=User::Find(session('user')->id);


        $config['zoom']='auto';
        $config['map_height']='500px';
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
       
        $Package=new Package();
        $Package->name=$request->Name;
        $Package->from=$request->From;
        $Package->to=$request->To;
        $Package->tripLength=$request->Triplength;
        $Package->description=$request->Description;
        $Package->car_type="abc";
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

    	return redirect()->route('driver.dashboard');
    }

    public function packages(Request $request)
    {
    	return view('driver.packages');
    }
    public function packageedit(Request $request)
    {
    	return view('driver.packageedit');
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
