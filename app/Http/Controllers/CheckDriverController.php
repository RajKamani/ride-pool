<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
       $validator = Validator::make($request->all(),[
            'licence' => ['required','digits:15'],
            'agree' => ['required']
        ]);
        if($validator->fails())
        {
            return redirect(route("redirect_Agreement",$user))->withErrors($validator);
        }

        $updated=$user->is_driver = 1;
        $updated = $user->licence = $request->licence;
        $user->save();
        if($updated)
        {
            return view('driver.driver_dashboard',compact('user'));;
        }
        else{
            return 'Failed To update user as Driver.';
        }
    }
    public function display_agreement(User $user)  // For Support POST Method In Redirection after Validation fails.
    {
        return view('demo_change_isDriver');
    }
}
