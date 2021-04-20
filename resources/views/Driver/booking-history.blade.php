@extends('layouts.app')
@section('content')
    <div class="content">
        @forelse($routes_objs as $routes)  {{--Array of obj--}}
        @forelse($routes as $route) {{--itereating through each route--}}
        <div class="driver-booking">
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Journey Details</h1>
                <div class="driver-booking__journey-details">
                    <div class="driver-booking__location">
                        <p><b>From</b></p>
                        <p>{{$route->source}}</p>
                        <p>{{$route->date}}</p>
                    </div>
                    <div class="driver-booking__location">
                        <p><b>To</b></p>
                        <p>{{$route->destination}}</p>
                        <p>{{$route->duration}}</p>
                    </div>
                </div>
                <div class="driver-booking__journey-details">
                    <div class="driver-booking__location">
                        <p><b>Dept. Time</b></p>
                        <p>{{$route->time}}</p>
                    </div>

                </div>
            </div>
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Passenger Details</h1>
                <ul class="passenger-details">
                    @foreach($route->vehicle_r()->get() as $pass_root)

                        @forelse($pass_root->ride_req_v as $pass)
                            @if($pass->req_status == 1)
                            <li class="passenger-details__detail">
                                <div>
                                    <p>Name: {{\App\Models\User::find($pass->passenger_id)->name}}</p>
                                    <p>Contact: {{\App\Models\User::find($pass->passenger_id)->contact}}</p>
                                    <p>Pickup: {{$pass->car_vehicle->car_route[0]->source}}</p>
                                    <p>Drop:{{$pass->car_vehicle->car_route[0]->destination}}</p>
                                    <p>Seats:{{$pass->seats}}</p>
                                    <p>Kms: 266</p>
                                    <p>Amount Payable: {{number_format((200*10)/$pass_root->ride_req_v->where('req_status','=',1)->count())}}/-</p>
                                </div>
                            </li>
                            @endif
                        @empty
                            <li class="passenger-details__detail">
                                <div>
                                    <p>No Passenger.</p><br><br><br><br><br><br>
                                </div>
                            </li>
                        @endforelse
                    @endforeach
                </ul>
            </div>
            <div class="driver-booking__detail">
                <h1 class="driver-booking__title">Vehicle Details</h1>
                <div class="vehicle-details" style="color:black;">

                    <p>{{ $route->vehicle_r()->get()[0]->model_name }}</p>
                    <p>Rate: {{ $route->vehicle_r()->get()[0]->rate_per_km }} / KM</p>
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
