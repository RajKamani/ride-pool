@extends('layouts.app')

@section('content')
    <main>
        <section class="sep-box">
            <div class="sep-box__left f-1-5">
                <img src="./assets//svgs//navigator.svg" alt="Navigator">
            </div>
            <div class="sep-box__right">
                <h1 class="sep-box__heading align-end">What is MyPool?</h1>
                <p class="sep-box__text">MyPool is an eco-smart option for handling all your travel needs by
                    connecting you with fellow professional riders. As our cities are growing, increased traffic adds to
                    the chaos and pollution. Hence, we have committed to providing a convenient, economical and
                    sustainable solution to this problem through carpooling.</p>
            </div>
        </section>
        <section class="sep-box">
            <div class="sep-box__left">
                <h1 class="sep-box__heading align-start">How MyPool Works?</h1>
                <div class="p-lr-16">
                    <h2 class="sep-box__heading-secondary align-start">1. Request</h2>
                    <p class="sep-box__text">Open the MyPool website and enter your details in the "Book Ride" page.
                        Tap
                        the MyPool ride option at the bottom of your screen. Then tap Confirm MyPool.</p>
                    <p> You’ll see the date and time until your driver arrives, as well as the estimated window of time
                        to arrive
                        at
                        your destination.</p>
                    <h2 class="sep-box__heading-secondary align-start">2. Ride</h2>
                    <p class="sep-box__text">Look at the map in the MyPool site as you walk to your pickup spot. Be at
                        the
                        curb
                        before your driver arrives to make sure no one in your car is kept waiting.</p>
                    <p>We’ll match your car with other riders heading your way. This is how we can offer you a low
                        price.</p>
                    <h2 class="sep-box__heading-secondary align-start">3. Hop Out</h2>
                    <p class="sep-box__text">Simply exit the car when you reach your destination. We’ll automatically
                        charge
                        the price to the payment method you have on file. If your trip was 5 stars, consider tipping
                        your
                        driver in the app after your trip.</p>
                </div>
            </div>
            <div class="sep-box__right f-1-5">
                <img src="./assets//svgs//offroad.svg" alt="Navigator">
            </div>
        </section>
        <a href="{{route('login')}}" class="flat-button">Get Started</a>
    </main>

@endsection
