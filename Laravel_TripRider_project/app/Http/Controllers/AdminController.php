<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AdminController extends Controller
{
    //
     public function dashboard(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.dashboard')
            ->with('admin',$admin);
    }

     public function packages(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.packages')
            ->with('admin',$admin);
    }
     public function adminview(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.adminview')
            ->with('admin',$admin);
    }

     public function driverview(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.driverview')
            ->with('admin',$admin);
    }

     public function riderview(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.riderview')
            ->with('admin',$admin);
    }

    public function adminviewprofile($id,Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.adminviewprofile') ->with('admin',$admin);
    }

    public function riderviewprofile($id,Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.riderviewprofile')
            ->with('admin',$admin);
    }

    public function driverviewprofile($id,Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        return view('admin.driverviewprofile')
            ->with('admin',$admin);
    }

    public function viewprofile($id,Request $request)
    {
        $admin = User::find($id);
        
        return view('admin.viewprofile')->with('admin',$admin);
    }
    public function editprofile($id,Request $request)
    {
        $admin = User::find($id);
        return view('admin.editprofile')->with('admin',$admin);
    }
    public function saveeditprofile($id,Request $request)
    {
        $admin = User::find($id);

        $admin->name=$request->Name;
        $admin->phonenumber=$request->PhoneNumber;

        $admin->save();

        $request->session()->flash('message', 'Profile Updated.');
        return  redirect()->route('admin.viewprofile',$id);
    }

    public function changepassword(Request $request)
    {
        $admin=User::Find(session('user')->id);

        return view('admin.changepassword')->with('admin',$admin);
    }
    public function savechangepassword(Request $request)
    {

        if($request->oldpass!=User::Find(session('user')->id)->password)
        {
            $request->session()->flash('errmessage', 'Old Password do not match!!!');
            return  redirect()->route('admin.changepassword');
        }
        else if($request->newpass!=$request->repass)
        {
            $request->session()->flash('errmessage', 'New Password and Retype password must be same');
            return  redirect()->route('admin.changepassword');
        }
        $admin = User::find(session('user')->id);

        $admin->password=$request->repass;

        $admin->save();

        Mail::to($driver->email)->send(new ChangePasswordAlert($admin));

        $request->session()->flash('message', 'Password Successfully Changed.');
        return  redirect()->route('admin.changepassword');
        
    }
}
