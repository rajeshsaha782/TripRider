<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
    	return view('home.index');
    } 
    public function login(Request $request)
    {
    	return view('home.login');
    } 
    public function signupRider(Request $request)
    {
    	return view('home.signupRider');
    }
    public function signupDriver(Request $request)
    {
    	return view('home.signupDriver');
    }
}
