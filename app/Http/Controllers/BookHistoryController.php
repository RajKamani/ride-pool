<?php

namespace App\Http\Controllers;


use App\Models\Route;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookHistoryController extends Controller
{
    function book_history(User $user)
    {
        if(!$user->is_driver())
        {
            return back();
        }
        $cars_route= $user->vehicles()->get();//getting all Cars User have.
        $routes_objs = [];
        foreach ($cars_route as $vehicle){
           array_push($routes_objs,$vehicle->car_route()->get()); # pushing each route obj. of particular Veh. into array
        }
        /* foreach ($routes_objs as $routes){
             foreach ($routes as $route)
                 return  $route->vehicle_r()->get()[0]->model_name;
         }*/


        return view('Driver.booking-history',[
            'routes_objs' => $routes_objs
        ]);
    }
}
