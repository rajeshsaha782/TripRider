<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Package;

use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    //
     public function dashboard(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);

        $TotalAdmin= count(DB::table('users')->where('type','=','Admin') ->get());
        $TotalDriver= count(DB::table('users')->where('type','=','Driver') ->get());
        $TotalRider= count(DB::table('users')->where('type','=','Rider') ->get());
        
        $result = DB::table('booked_package_trips')
         ->join('packages', 'booked_package_trips.package_id', '=', 'packages.id')
         ->join('users', 'booked_package_trips.rider_id', '=', 'users.id')
         ->get()->toArray();
        //dd($TotalAdmin,$TotalDriver,$TotalRider,$result);
         //->select('users.*', 'contacts.phone', 'orders.price')
          //dd($result);

        return view('admin.dashboard')
            ->with('admin',$admin)
            ->with('result',$result)
            ->with('TotalAdmin',$TotalAdmin)
            ->with('TotalDriver',$TotalDriver)
            ->with('TotalRider',$TotalRider);
    }

     public function packages(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        $packages=DB::table('packages')->get()->toArray();
      //dd($packages);
        return view('admin.packages')
            ->with('admin',$admin)
            ->with('packages',$packages);
    }

    public function packagedetails($id,Request $request)
    {
      //dd($id);

        $admin=User::Find(session('user')->id);
        $package=Package::Find($id);

        //dd($package);
        $driver=User::Find($package->driver_id);
        //dd($driver);


        return view('admin.packagedetails') 
        ->with('admin',$admin)
        ->with('driver',$driver)

        ->with('package',$package);

    }


     public function adminview(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        //dd($admin);
        $totaladmin= DB::table('users')->where('type','=','Admin') ->get()->toArray();

        //dd($adminview);
        return view('admin.adminview')
            ->with('admin',$admin)
            ->with('totaladmin',$totaladmin);
    }

     public function driverview(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        $totaldriver= DB::table('users')->where('type','=','Driver') ->get()->toArray();

        return view('admin.driverview')
            ->with('admin',$admin)
            ->with('totaldriver',$totaldriver);

    }

     public function riderview(Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);

        $totalrider= DB::table('users')->where('type','=','rider') ->get()->toArray();

        return view('admin.riderview')
            ->with('admin',$admin)
            ->with('totalrider',$totalrider);

    }

    public function adminviewprofile($id,Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        $adminview=User::Find($id);

         

        return view('admin.adminviewprofile') 
        ->with('admin',$admin)
        ->with('adminview',$adminview);

    }

    public function riderviewprofile($id,Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        $rider=User::Find($id);


        $result = DB::table('booked_package_trips')
         ->join('packages', 'booked_package_trips.package_id', '=', 'packages.id')
         ->join('users', 'booked_package_trips.driver_id', '=', 'users.id')
         ->get()->toArray();

        return view('admin.riderviewprofile')
            ->with('admin',$admin)
            ->with('result',$result)

            ->with('rider',$rider);

    }

    public function driverviewprofile($id,Request $request)
    {
      ///dd(session('user'));

        $admin=User::Find(session('user')->id);
        $driver=User::Find($id);

     $result = DB::table('booked_package_trips')
         ->join('packages', 'booked_package_trips.package_id', '=', 'packages.id')
         ->join('users', 'booked_package_trips.rider_id', '=', 'users.id')
         //->where('driver_id',$driver->id)

         ->get()->toArray();
       //dd($result);
        return view('admin.driverviewprofile')
            ->with('admin',$admin)
            ->with('result',$result)

            ->with('driver',$driver);

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
