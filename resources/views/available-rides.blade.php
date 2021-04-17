@extends('layouts.app')

@section('content')
    <div class="content">

        @forelse($routes as $route)
            @forelse($cars  as $car)

               <!--  <form action="#" method="post"> -->
                    <div class="ride"  >
                        <h1 class="ride__title">Available Journey</h1>
                        <div class="ride__detail">
                            <div class="ride__sub-detail">
                                <div>
                                    <p><b>From</b></p>
                                    <p>{{$route->source}}</p>
                                </div>
                                <div>
                                    <p><b>To</b></p>
                                    <p>{{$route->destination}}</p>
                                </div>
                            </div>
                            <div class="ride__sub-detail">
                                <div>
                                    <p><b>On</b></p>
                                    <p>{{$route->date}}</p>
                                </div>

                                <div>
                                    <p><b>Seats</b></p>
                                    <p>{{$car['model_name']}}</p>
                                </div>
                            </div>
                        </div>
                        <h1 class="ride__title">Driver Information</h1>
                        <div class="ride__detail">
                            <div class="ride__sub-detail">
                                <div>
                                    <p><b>Name</b></p>
                                    <p>{{$car->driver->name}}</p>
                                </div>
                                <div>
                                    <p><b>Contact</b></p>
                                    <p>{{$car->driver->contact}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="ride__actions align-center">
                            <button type="submit" class="flat-button">Request Booking</button>
                        </div>
                    </div>
               <!--  </form> -->
                @empty

                <h3 style="color:black;">No route Available!<br>

                    For <b style="color:red;">{{$notAvailable['source'] }}
                        to {{$notAvailable['destination'] }} on {{$notAvailable['date'] }}
                        for {{$notAvailable['seats']." Seats." }}</b>
                </h3>
            @endforelse

        @empty

            <h3 style="color:black;">No route Available! <br>

                For <b style="color:red;">{{$notAvailable['source'] }}
                    to {{$notAvailable['destination'] }} on {{$notAvailable['date'] }}
                    for {{$notAvailable['seats']." Seats." }}</b>
            </h3>


        @endforelse
    </div>
@endsection
