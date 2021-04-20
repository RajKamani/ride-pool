@extends('layouts.app')
@section('content')
    <div class="content">
    @forelse($ride_req as $routes)  {{--Array of obj--}}
        @forelse($routes->car_vehicle()->get() as $route) {{--itereating through each route--}}
        <div class="driver-booking">
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Journey Details</h1>
                <div class="driver-booking__journey-details">
                    <div class="driver-booking__location">
                        <p><b>From</b></p>
                        <p>{{$route->car_route[0]->source}}</p>
                        <p>{{$route->car_route[0]->date}}</p>
                    </div>
                    <div class="driver-booking__location">
                        <p><b>To</b></p>
                        <p>{{$route->car_route[0]->destination}}</p>
                        <p>{{$route->car_route[0]->duration}}</p>
                    </div>
                </div>
                <div class="driver-booking__journey-details">
                    <div class="driver-booking__location">
                        <p><b>Dept. Time</b></p>
                        <p>{{$route->car_route[0]->time}}</p>
                    </div>
                </div>
            </div>
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Passenger Details</h1>
                <ul class="passenger-details">

                    @foreach($route->ride_req_v as $pass_root)
                        @if($pass_root->req_status == 1)
                        <li class="passenger-details__detail">
                            <div>
                                <p>Name: {{\App\Models\User::find($pass_root->passenger_id)->name}}</p>
                                <p>Contact: {{\App\Models\User::find($pass_root->passenger_id)->contact}}</p>
                                <p>Pickup: {{$pass_root->car_vehicle->car_route[0]->source}}</p>
                                <p>Drop:{{$pass_root->car_vehicle->car_route[0]->destination}}</p>
                                <p>Seats:{{$pass_root->seats}}</p>
                                <p>Kms: 266</p>
                                <p>Amount Payable: {{number_format((200*10)/$route->ride_req_v->where('req_status','=',1)->count())}}/-</p>
                            </div>
                        </li>
                        @endif

                    @endforeach
                </ul>
            </div>
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Vehicle Details</h1>
                <div class="vehicle-details" style="color:black;">
                    <p>{{ $route->model_name }}</p>
                    <p>Rate: {{ $route->rate_per_km }} / KM</p>
                </div>
            </div>
        </div>

        @empty

        @endforelse
        @empty
            <h3>No history yet. <br> Create it first !</h3>
        @endforelse

    </div>
@endsection
