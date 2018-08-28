<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mail;
use App\Mail\ChangePasswordAlert;
use GMaps;
use App\User;
use App\Package;

class RiderController extends Controller
{
    public function dashboard(Request $request)
    {
    	return view('rider.dashboard');
    }
    public function packages(Request $request)
    {
    	return view('rider.packages');
    }
    public function mytrips(Request $request)
    {
    	return view('rider.mytrips');
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
