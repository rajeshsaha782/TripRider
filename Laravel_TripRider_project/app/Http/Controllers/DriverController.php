<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DriverController extends Controller
{
    public function dashboard(Request $request)
    {
    	return view('driver.dashboard');
    }
    public function addpackage(Request $request)
    {
    	return view('driver.addpackage');
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
        return view('driver.changepassword');
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

        $request->session()->flash('message', 'Password Successfully Changed.');
        return  redirect()->route('driver.changepassword');
    	
    }
}
