@extends('layouts.app')

@section('content')
    <div class="content">
        @foreach($reqS as $req)

            <div class="ride-request">
                <h1 class="ride-request__title">Reuqested Journey</h1>
                <div class="ride-request__detail">
                    <div class="ride-request__sub-detail">
                        <div>
                            <p><b>From</b></p>
                            <p>{{$req->car_vehicle->car_route[0]->source}}</p>
                        </div>
                        <div>
                            <p><b>To</b></p>
                            <p>{{$req->car_vehicle->car_route[0]->destination}}</p>
                        </div>
                    </div>
                    <div class="ride-request__sub-detail">
                        <div>
                            <p><b>On</b></p>
                            <p>{{$req->car_vehicle->car_route[0]->date}}</p>
                        </div>
                        <div>
                            <p><b>Seats</b></p>
                            <p>{{$req->seats}}</p>
                        </div>
                    </div>
                </div>
                <h1 class="ride-request__title">Client Information</h1>
                <div class="ride-request__detail">
                    <div class="ride-request__sub-detail">
                        <div>
                            <p><b>Name</b></p>
                            <p>{{\App\Models\User::find($req->passenger_id)->name}}</p>
                        </div>
                        <div>
                            <p><b>Contact</b></p>
                            <p>{{\App\Models\User::find($req->passenger_id)->contact}}</p>
                        </div>
                    </div>
                </div>
                <div class="ride-request__actions align-center">
                    <button class="flat-button">Decline</button>
                    <button class="flat-button">Accept</button>
                </div>
            </div>

        @endforeach
    </div>
@endsection
