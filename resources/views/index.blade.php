@extends('layouts.app')

@section('content')

        <section class="common-layout">
            <div class="common-layout__image-container">
                <img src="./assets/svgs/navigator.svg" alt="Navigator">
            </div>
            <div class="common-layout__content">
                <h1 class="content-heading align-end">What is MyPool?</h1>
                <p class="content-text">MyPool is an eco-smart option for handling all your travel needs by
                    connecting you with fellow professional riders. As our cities are growing, increased traffic adds to
                    the chaos and pollution. Hence, we have committed to providing a convenient, economical and
                    sustainable solution to this problem through carpooling.</p>
            </div>
        </section>
        <section class="common-layout">
            <div class="common-layout__content">
                <h1 class="content-heading align-start">How MyPool Works?</h1>
                <div>
                    <h2 class="secondary-heading align-start">1. Request</h2>
                    <p class="content-text">Open the MyPool website and enter your details in the "Book Ride" page.
                        Tap
                        the MyPool ride option at the bottom of your screen. Then tap Confirm MyPool.</p>
                    <p class="content-text"> You’ll see the date and time until your driver arrives, as well as the
                        estimated window of time
                        to arrive
                        at
                        your destination.</p>
                    <h2 class="secondary-heading align-start">2. Ride</h2>
                    <p class="content-text">Look at the map in the MyPool site as you walk to your pickup spot. Be at
                        the
                        curb
                        before your driver arrives to make sure no one in your car is kept waiting.</p>
                    <p class="content-text">We’ll match your car with other riders heading your way. This is how we can
                        offer you a low
                        price.</p>
                    <h2 class="secondary-heading align-start">3. Hop Out</h2>
                    <p class="content-text">Simply exit the car when you reach your destination. We’ll automatically
                        charge
                        the price to the payment method you have on file. If your trip was 5 stars, consider tipping
                        your
                        driver in the app after your trip.</p>
                </div>
            </div>
            <div class="common-layout__image-container">
                <img src="./assets/svgs/offroad.svg" alt="Offroad">
            </div>
        </section>
        <div class="align-center">
            <a href="{{route("login")}}" class="flat-button">Get Started</a>
        </div>


@endsection
