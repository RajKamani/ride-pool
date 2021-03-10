<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function CheckIfDriver(User $user) //Checking if Current user is Driver Or not
    {
        if ($user->is_driver())  // is_driver() is Written in User Model.
        {
            return "Drivers Dashboard";
        } else {
            return view('demo_change_isDriver');
        }
    }

    public function UpdateAsDriver(User $user)
    {
        // validate Some Request (TASK : Remaining)

        $updated=$user->is_driver = 1;
        $user->save();
        if($updated)
        {
            return "Drivers Dashboard - because now you are driver. ";
        }
        else{
            return 'Failed To update user as Driver.';
        }
    }

}
