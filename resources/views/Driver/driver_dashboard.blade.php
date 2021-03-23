@extends('layouts.app')

@section('content')
    <div class="driver-dashboard">
        <a class="driver-activity" href="{{route('add-route-form',auth()->user())}}">
            <img src="/assets/images/journey.png" alt="Journey"/>

            <h2>Add Journey</h2>
        </a>
        <a class="driver-activity" href="{{route('book-history',auth()->user())}}">
            <img src="/assets/images/driver-bookings.png" alt="Bookings"/>
            <h2>Booking History</h2>
        </a>
        <a class="driver-activity" href="{{route('ride-request',auth()->user())}}">
            <img src="/assets/images/ride-requests.png" alt="Ride Requests"/>
            <h2>View Ride Requests</h2>
        </a>
        <a class="driver-activity" href="{{route('add-vehicle-form')}}">
            <img src="/assets/images/add-vehicle.png" alt="Add Vehicles"/>
            <h2>Add Vehicle</h2>
        </a>
        <a class="driver-activity" href="{{route('manage-vehicle',auth()->user())}}">
            <img src="/assets/images/manage-vehicles.png" alt="Manage Vehicles"/>
            <h2>Manage Vehicles</h2>
        </a>
        <a class="driver-activity" href="payments.html">
            <img src="/assets/images/driver-payments.png" alt="Payments"/>
            <h2>Payments</h2>
        </a>
    </div>
@endsection
