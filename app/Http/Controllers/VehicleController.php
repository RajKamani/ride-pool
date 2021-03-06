<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function display_add_form()
    {
        return view('Driver.add-vehicle');
    }

    public function add_vehicle(User $user, Request $request)
    {
        $data = $request->validate([

            'model' => ['required', 'max:255'],
            'catagory' => ['required'],
            'purchase_date' => ['required', 'date'],
            'kms_used' => ['required', 'numeric'],
            'seats' => ['required', 'numeric', 'max:10', 'min:2'],
            'rate' => ['required', 'numeric', 'max:10', 'min:6'],

        ]);
        if ($user->is_driver()) {

            $user->vehicles()->create([
                'model_name' => $data['model'],
                'category' => $data['catagory'],
                'purchase_date' => $data['purchase_date'],
                'km_used' => $data['kms_used'],
                'no_of_seats' => $data['seats'],
                'rate_per_km' => $data['rate'],
            ]);
        }
        $vehicles = $user->vehicles()->get();

        return redirect(route('manage-vehicle',auth()->user(),compact('vehicles')));
        ##return redirect(view('Driver.manage-vehicle', compact('vehicles')));

    }

    function display_vehicle_list(User $user)
    {
        $vehicles = $user->vehicles()->get();

        return view('Driver.manage-vehicle', compact('vehicles'));
    }

    function delete_vehicle(Vehicle $vehicle)
    {
        $vehicle->delete();
        return back();
    }

    function update_vehicle_form(Vehicle $vehicle)
    {
        return view('Driver.update-vehicle', compact('vehicle'));
    }

    function update_vehicle(Vehicle $vehicle, Request $request)
    {
        //some validation
        $data = $request->validate([

            'model' => ['required', 'max:255'],
            'catagory' => ['required'],
            'purchase_date' => ['required', 'date'],
            'kms_used' => ['required', 'numeric'],
            'seats' => ['required', 'numeric', 'max:10', 'min:2'],
            'rate' => ['required', 'numeric', 'max:10', 'min:6'],

        ]);

        $vehicle->model_name = $data['model'];
        $vehicle->category = $data['catagory'];
        $vehicle->purchase_date = $data['purchase_date'];
        $vehicle->km_used = $data['kms_used'];
        $vehicle->no_of_seats = $data['seats'];
        $vehicle->rate_per_km = $data['rate'];
        $vehicle->save();

        $vehicles = auth()->user()->vehicles()->get();

        return view('Driver.manage-vehicle', compact('vehicles'));
    }
}
