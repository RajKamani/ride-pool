@extends('layouts.app')

@section('content')
    <div class="driver-dashboard">
        <a class="driver-activity" href="add-journey.html">
            <img src="../assets/images/journey.png" alt="Journey"/>
            <h2>Add Journey</h2>
        </a>
        <a class="driver-activity" href="bookings.html">
            <img src="../assets/images/driver-bookings.png" alt="Bookings"/>
            <h2>Booking History</h2>
        </a>
        <a class="driver-activity" href="ride-requests.html">
            <img src="../assets/images/ride-requests.png" alt="Ride Requests"/>
            <h2>View Ride Requests</h2>
        </a>
        <a class="driver-activity" href="./edit-vehicle.html">
            <img src="../assets/images/add-vehicle.png" alt="Add Vehicles"/>
            <h2>Add Vehicle</h2>
        </a>
        <a class="driver-activity" href="./manage-vehicles.html">
            <img src="../assets/images/manage-vehicles.png" alt="Manage Vehicles"/>
            <h2>Manage Vehicles</h2>
        </a>
        <a class="driver-activity" href="payments.html">
            <img src="../assets/images/driver-payments.png" alt="Payments"/>
            <h2>Payments</h2>
        </a>
    </div>
@endsection
