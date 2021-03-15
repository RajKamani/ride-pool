<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->

    <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/forms.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>MyPool</title>
</head>
<body>

        <header class="main-header">
            <a href="/" class="logo-link">
                <img src="./assets/images/logo.png"/>
                <div class="logo-link__title"><span>MyPool</span></div>
            </a>
            <nav class="main-header__navigation">
                <ul class="main-header__navigation-items">
                    <li class="main-header__navigation-item"><a href="{{--{{route('book_ride')}}--}}"><span>Book Ride</span></a></li>
                    <li class="main-header__navigation-item"><a href="./offer-ride.html"><span>Offer Ride</span></a></li>
                    @guest
                    <li class="main-header__navigation-item"><a href="{{route('register')}}"><span>Sign Up</span></a></li>
                    <li class="main-header__navigation-item"><a href="{{route('login')}}"><span>Login</span></a></li>
                    @else
                        <form method="POST" action="{{route('logout')}}">
                           @csrf
                            <li class="main-header__navigation-item" ><button style="border: none;background-color: black"><a href="{{route('logout')}}"><span>Logout</span></a></button></li>
                        </form>
                    @endguest;
                </ul>
            </nav>
            <div class="main-header__drawer-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="main-header__sidedrawer">
                <nav class="main-header__mobile-navigation">
                    <ul class="main-header__mobile-navigation-items">
                        <li class="main-header__mobile-navigation-item"><a href="./book-ride.html">Book Ride</a></li>
                        <li class="main-header__mobile-navigation-item"><a href="./offer-ride.html">Offer Ride</a></li>
                        @guest
                        <li class="main-header__mobile-navigation-item"><a href="{{route('register')}}">Sign Up</a></li>
                        <li class="main-header__mobile-navigation-item"><a href="{{route('login')}}">Login</a></li>
                        @else
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <li class="main-header__mobile-navigation-item" ><button style="border: none;background-color: inherit"><a href="{{route('logout')}}"><span>Logout</span></a></button></li>
                            </form>
                        @endguest
                    </ul>
                </nav>
            </div>
        </header>

        <main>
            @yield('content')
        </main>

</body>
<script src="./js//navigation.js"></script>
</html>
