<?php

namespace App\Http\Controllers;


use App\Models\Route;
use App\Models\User;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function display_add_form(User $user)
    {
        $cars = $user->vehicles()->get();

        return view('Driver.add-route', compact('cars'));
    }

    function insertRoute(User $user, Request $request)
    {

        $routeData = $request->validate([
            "source" => ['required', 'max:255'],
            "destination" => ['required', 'max:255'],
            "date" => ['required', 'date', 'after:yesterday'],
            "duration" => ['required'],
            "vehicle" => ['required', 'numeric'],
            "time" => ['required', 'date_format:H:i']
        ]);

        $route = Route::create([
            'source' => $request['source'],
            'destination' => $request['destination'],
            'date' => $request['date'],
            'time' => $request['time'],
            'duration' => $request['duration'],

        ]);
        $route = $route->vehicle_r()->attach($request['vehicle']);
        return redirect(route('book-history', $user));
    }
}
