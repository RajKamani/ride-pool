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
       return view('Driver.request-ride');
    }
    function book_history(User $user)
    {
        if(!$user->is_driver())
        {
            return back();
        }
       return view('Driver.booking-history');
    }
}
