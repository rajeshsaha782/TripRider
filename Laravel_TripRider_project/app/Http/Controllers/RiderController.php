<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function viewprofile(Request $request)
    {
    	return view('rider.viewprofile');
    }
    public function editprofile(Request $request)
    {
    	return view('rider.editprofile');
    }
    public function changepassword(Request $request)
    {
    	return view('rider.changepassword');
    }
   
}
