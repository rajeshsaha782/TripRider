<?php

namespace App\Http\Controllers;

use illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\SignupRiderRequest;
use App\Http\Requests\SignupDriverRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;
use App\User;

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
    public function verify(LoginRequest $request)
    {
        $user = User::where('email', $request->Email)
            ->where('password', $request->Password)
            ->first();
       
        if(!$user)
        {
            
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login');
        }
        else
        {
            $request->session()->put('user', $user);

            if($user->type=="Rider")
            {
                return redirect()->route('rider.dashboard');
            }
            else if($user->type=="Driver")
            {
                return redirect()->route('driver.dashboard');
            } 
            else if($user->type=="Admin")
            {
                return redirect()->route('admin.dashboard');
            }
        
            
            
        }

    	return view('home.login');
    } 

    public function signupRider(Request $request)
    {
        return view('home.signupRider');
    }
    public function createRider(SignupRiderRequest $request)
    {
        $user=new User();
        $user->name=$request->Name;
        $user->email=$request->Email;
        $user->phonenumber=$request->PhoneNumber;
        $user->password=$request->Password;
        $user->type="Rider";
        $user->status="emailNotActivate";
        $user->email_token=Str::random(30);
        $user->save();

    	return redirect()->route('login');
    }

    public function signupDriver(Request $request)
    {
    	return view('home.signupDriver');
    }
    public function createDriver(SignupDriverRequest $request)
    {
        $user=new User();
        $user->name=$request->Name;
        $user->email=$request->Email;
        $user->phonenumber=$request->PhoneNumber;
        $user->carnumber=$request->CarNumber;
        $user->password=$request->Password;
        $user->type="Driver";
        $user->status="emailNotActivate";
        $user->email_token=Str::random(30);
        $user->save();

        return redirect()->route('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('home');
    }
}
