<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class SearchRideController extends Controller
{
    function display(Request $request)
    {
        $search = $request->validate([
            "source" => ['required', 'max:255'],
            "destination" => ['required', 'max:255'],
            "date" => ['required', 'date', 'after:yesterday'],
            "seats" => ['required', 'min:1'],
        ]);
        $routes = Route::where('source', '=', $search['source'])
            ->where('destination', '=', $search['destination'])
            ->where('date', '=', $search['date'])->get();  // getting all routes.
        //-------------------------------------------------------------------------------------------//
        $cars_of_Routes = [];

        foreach ($routes as $route) {
            array_push($cars_of_Routes, $route->vehicle_r()->get());


        }

        $availableCar_seats = array();
        foreach ($cars_of_Routes as $car) {
            foreach ($car as $c) {
                if ($c->no_of_seats >= $request['seats']) {

                    array_push($availableCar_seats, $c);
                }
            }
        }


        $Uid = array();
        foreach ($availableCar_seats as $onecar) {
            array_push($Uid, $onecar['user_id']);
        }

        $allDrivers = User::whereIn('id',$Uid)->get();

        return view('available-rides', [
            'routes' => $routes->take(1),
            'cars' =>$availableCar_seats,
            'notAvailable' => $search

        ]);
    }
}
