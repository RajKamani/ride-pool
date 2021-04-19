@extends('layouts.app')

@section('content')
    <div class="content">
        @forelse($reqS as $requ)

            <div class="ride-request">
                <h1 class="ride-request__title">Reuqested Journey</h1>
                <div class="ride-request__detail">
                    <div class="ride-request__sub-detail">
                        <div>
                            <p><b>From</b></p>
                            <p>{{$requ->car_vehicle->car_route[0]->source}}</p>
                        </div>
                        <div>
                            <p><b>To</b></p>
                            <p>{{$requ->car_vehicle->car_route[0]->destination}}</p>
                        </div>
                    </div>
                    <div class="ride-request__sub-detail">
                        <div>
                            <p><b>On</b></p>
                            <p>{{$requ->car_vehicle->car_route[0]->date}}</p>
                        </div>
                        <div>
                            <p><b>Seats</b></p>
                            <p>{{$requ->seats}}</p>
                        </div>
                    </div>
                </div>
                <h1 class="ride-request__title">Client Information</h1>
                <div class="ride-request__detail">
                    <div class="ride-request__sub-detail">
                        <div>
                            <p><b>Name</b></p>
                            <p>{{\App\Models\User::find($requ->passenger_id)->name}}</p>
                        </div>
                        <div>
                            <p><b>Contact</b></p>
                            <p>{{\App\Models\User::find($requ->passenger_id)->contact}}</p>
                        </div>
                    </div>
                </div>
                @if($requ->req_status == 0)
                <div class="ride-request__actions align-center" >
                    <form method="POST"
                          action="{{route('reject_mail',[$requ->passenger_id]) }}">
                        @csrf
                        <input type="hidden" value="{{$requ->vehicle_id}}" name="vehicle">
                    <button class="flat-button">Decline</button>
                    </form>
                    <form method="POST"
                          action="{{route('accept_mail',[$requ->passenger_id]) }}">
                        @csrf

                        <input type="hidden" value="{{$requ->vehicle_id}}" name="vehicle">

                        <button type="submit" id="Acceptbtn" class="flat-button">Accept</button>
                    </form>
                </div>
                @endif

            </div>
        @empty
            <h3>No Ride Request yet. <br> Wait for it!</h3>

        @endforelse

    </div>

@endsection
