<?php

namespace App\Http\Controllers;


use App\Models\Ride_req;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;


class RideReqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function send_Req(User  $user, Vehicle $vehicle ,Request  $request)
    {

        try {
            $req = Ride_req::create([
                'user_id' => $user->id,
                'passenger_id' => $request['authuser'],
                'vehicle_id' => $vehicle->id,
                'req_status' => 0,
                'seats' => $request['seats'],
            ]);
        } catch (\Exception $e) {
            $data = 'Request Already Sent.';
           return response()->view('409', compact('data'),409);
        }

        return view('Req_status',compact('user'));
    }
}
