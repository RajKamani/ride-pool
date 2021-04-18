<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RideController extends Controller
{
    function display_req(User $user)
    {
        if(!$user->is_driver())
        {
            return back();
        }

        $reqS= $user->ride_req()->get();

       return view('Driver.request-ride',compact('reqS'));
    }

}
