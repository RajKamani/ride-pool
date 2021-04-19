<?php

namespace App\Http\Controllers;


use App\Models\Ride_req;
use App\Models\Route;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookHistoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    function book_history(User $user)
    {
        if (!$user->is_driver()) {
            return back();
        }
        $cars_route = $user->vehicles()->get();//getting all Cars User have.
        $routes_objs = [];
        foreach ($cars_route as $vehicle) {
            array_push($routes_objs, $vehicle->car_route()->get()); # pushing each route obj. of particular Veh. into array
        }
        $veh = Vehicle::where('user_id', '=', $user->id)->get();


        return view('Driver.booking-history', [
            'routes_objs' => $routes_objs,

        ]);
    }


    function pass_book_history(User $user)
    {
        $history = Ride_req::where('passenger_id', '=', $user->id)->get();

        return view('book-history', [
            'ride_req' => $history,

        ]);
    }
}
