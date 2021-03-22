<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckDriverController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function CheckIfDriver(User $user) //Checking if Current user is Driver Or not
    {
        if ($user->is_driver())  // is_driver() is Written in User Model.
        {
            return view('driver_dashboard',compact('user'));

        } else {
            return view('demo_change_isDriver');
        }
    }

    public function UpdateAsDriver(User $user,Request $request)
    {
        // validate Some Request (TASK : Remaining)
        dd($request);

        $updated=$user->is_driver = 1;
        $user->save();
        if($updated)
        {
            return view('driver_dashboard',compact('user'));;
        }
        else{
            return 'Failed To update user as Driver.';
        }
    }
}
