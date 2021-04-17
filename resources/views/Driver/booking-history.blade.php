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
                    </div>
                    <div class="driver-booking__detail">
                        <h1 class="driver-booking__title">Passenger Details</h1>
                        <ul class="passenger-details">
                            <li class="passenger-details__detail">
                                <div>
                                    <p>Name: Manish</p>
                                    <p>Pickup: Gandhidham</p>
                                    <p>Drop: Sanand</p>
                                    <p>Kms: 266</p>
                                    <p>Amount Payable: ₹2660/-</p>
                                </div>
                            </li>
                            <li class="passenger-details__detail">
                                <div>
                                    <p>Name: Manish</p>
                                    <p>Pickup: Gandhidham</p>
                                    <p>Drop: Sanand</p>
                                    <p>Kms: 266</p>
                                    <p>Amount Payable: ₹2660/-</p>
                                </div>
                            </li>
                            <li class="passenger-details__detail">
                                <div>
                                    <p>Name: Manish</p>
                                    <p>Pickup: Gandhidham</p>
                                    <p>Drop: Sanand</p>
                                    <p>Kms: 266</p>
                                    <p>Amount Payable: ₹2660/-</p>
                                </div>
                            </li>
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
                <h3>No history yet. <br> Create it first !</h3>
            @endforelse
		@empty
		<h3>No history yet. <br> Create it first !</h3>
        @endforelse

    </div>
@endsection
