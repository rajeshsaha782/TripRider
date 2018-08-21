<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function viewprofile(Request $request)
    {
    	return view('driver.viewprofile');
    }
    public function editprofile(Request $request)
    {
    	return view('driver.editprofile');
    }
    public function changepassword(Request $request)
    {
    	return view('driver.changepassword');
    }
}
