<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Ride_req;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    function sendmail(User $user, Request $request)
    {
        $data = Ride_req::where(['passenger_id' => $user->id, 'vehicle_id' => $request['vehicle']])->first();
        $ride_req = Ride_req::where(['passenger_id' => $user->id, 'vehicle_id' => $request['vehicle']])->update(['req_status' => 1]);
        $body = $ride_req ? "Your ride Request has been Confirmed for " . $data->car_vehicle->model_name . " Contact to driver : " . $data->carDriver->contact : "Your ride Request has been Rejected. ". $data->car_vehicle->model_name ;
        $details = [
            'title' => 'Hello '.$user->name,
            'body' => $body,
            'sign' => "Thank you, Ride-Pool."

        ];

        Mail::to($user->email)->send(new SendMail($details,false));

        return view('MailSend', compact(['user','rejectedREQ']));

    }
    function sendmailDecline(User $user, Request $request)
    {

        $data = Ride_req::where(['passenger_id' => $user->id, 'vehicle_id' => $request['vehicle']])->first();
        $deletedData = Ride_req::where(['passenger_id' => $user->id, 'vehicle_id' => $request['vehicle']])->delete();
        $body = "Your ride Request has been Rejected For car : ". $data->car_vehicle->model_name."." ;

        $details = [
            'title' => 'Hello '.$user->name,
            'body' => $body,
            'sign' => "Thank you, Ride-Pool."

        ];

        Mail::to($user->email)->send(new SendMail($details,true));
        return view('MailSend', compact(['user','rejectedREQ']));

    }
}
