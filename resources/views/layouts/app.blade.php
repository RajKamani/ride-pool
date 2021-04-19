<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/logo.ico') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/available-rides.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('css/bookings.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/driver-dashboard.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/manage-vehicles.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/ride-requests.css') }}">


    <title>MyPool</title>
</head>
<body>

<header class="main-header">
    <a href="/" class="logo">
        <img src="{{ URL::asset('assets/images/logo.ico') }}" alt="Logo"/>
        <div class="logo-text"><span>MyPool</span></div>
    </a>
    <nav class="main-header__navigation">
        <ul class="main-header__navigation-items">
            @auth
                <li class="main-header__navigation-item"><span
                        style="color: white;font-size: 1.2rem">Welcome, {{ucfirst(auth()->user()->name)}}</span></li>
            @endauth
            @auth

                <li class="main-header__navigation-item">
                    <a href="{{route('home')}}"><span>Book Ride</span></a>
                </li>
                <li class="main-header__navigation-item">
                    <a href="{{route('pass-book-history',auth()->user())}}"><span>My Bookings</span></a>
                </li>
                <form method="post" action="{{route('offer_ride',auth()->user())}}">
                    @csrf
                    <li class="main-header__navigation-item">
                        <button style="border: none;background-color: black"><a><span>Offer Ride</span></a></button>
                    </li>
                </form>
            @endauth

            @guest
                <li class="main-header__navigation-item"><a href="{{route('register')}}"><span>Sign Up</span></a>
                </li>
                <li class="main-header__navigation-item"><a href="{{route('login')}}"><span>Login</span></a></li>

            @else
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <li class="main-header__navigation-item">
                        <button style="border: none;background-color: black"><a
                                href="{{route('logout')}}"><span>Logout</span></a></button>
                    </li>
                </form>
            @endguest
        </ul>
    </nav>
    <div class="main-header__drawer-toggle">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <div class="backdrop"></div>
    <div class="main-header__sidedrawer">
        <nav class="main-header__mobile-navigation">
            <ul class="main-header__mobile-navigation-items">
                @auth
                    <li class="main-header__mobile-navigation-item">
                        <a href="{{route('home')}}"><span>Book Ride</span></a>
                    </li>
                    <li class="main-header__mobile-navigation-item"><a href="./user/bookings.html"><span>My
                                Bookings</span></a></li>
                    <form method="post" action="{{route('offer_ride',auth()->user())}}">
                        @csrf
                        <li class="main-header__mobile-navigation-item">
                            <button style="border: none;background-color: inherit"><a><span>Offer Ride</span></a>
                            </button>
                        </li>
                    </form>

                @endauth

                @guest
                    <li class="main-header__mobile-navigation-item"><a href="{{route('register')}}">Sign Up</a></li>
                    <li class="main-header__mobile-navigation-item"><a href="{{route('login')}}">Login</a></li>
                @else
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <li class="main-header__mobile-navigation-item">
                            <button style="border: none;background-color: inherit"><a href="{{route('logout')}}">
                                    <span>Logout</span></a>
                            </button>
                        </li>
                    </form>
                @endguest

            </ul>
        </nav>
    </div>
</header>

{{--<header class="main-header">
    <a href="/" class="logo-link">
        <img src="{{ URL::asset('assets/images/logo.ico') }}"/>
        <div class="logo-link__title"><span>MyPool</span></div>
    </a>
    <nav class="main-header__navigation">
        <ul class="main-header__navigation-items">
            @auth
                <li class="main-header__navigation-item"><span
                        style="color: white;font-size: 1.2rem">Welcome, {{ucfirst(auth()->user()->name)}}</span></li>
            @endauth
                @auth
                    <li class="main-header__navigation-item">
                        <a href="{{route('home')}}"><span>Book Ride</span></a>
                    </li>
                    <form method="post" action="{{route('offer_ride',auth()->user())}}">
                        @csrf
                        <li class="main-header__navigation-item">
                            <button style="border: none;background-color: black"><a><span>Offer Ride</span></a></button>
                        </li>
                    </form>
                @endauth

                @guest
                    <li class="main-header__navigation-item"><a href="{{route('register')}}"><span>Sign Up</span></a>
                    </li>
                    <li class="main-header__navigation-item"><a href="{{route('login')}}"><span>Login</span></a></li>

                @else
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <li class="main-header__navigation-item">
                            <button style="border: none;background-color: black"><a
                                    href="{{route('logout')}}"><span>Logout</span></a></button>
                        </li>
                    </form>
                @endguest
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
                @auth
                    <li class="main-header__mobile-navigation-item">
                        <a href="{{route('home')}}"><span>Book Ride</span></a>
                    </li>
                    <form method="post" action="{{route('offer_ride',auth()->user())}}">
                        @csrf
                        <li class="main-header__mobile-navigation-item">
                            <button style="border: none;background-color: inherit"><a><span>Offer Ride</span></a></button>
                        </li>
                    </form>

                @endauth

                @guest
                    <li class="main-header__mobile-navigation-item"><a href="{{route('register')}}">Sign Up</a></li>
                    <li class="main-header__mobile-navigation-item"><a href="{{route('login')}}">Login</a></li>
                @else
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <li class="main-header__mobile-navigation-item">
                            <button style="border: none;background-color: inherit"><a href="{{route('logout')}}">
                                    <span>Logout</span></a>
                            </button>
                        </li>
                    </form>
                @endguest
            </ul>
        </nav>
    </div>
</header>--}}

<main class="centered">
    @yield('content')
</main>
<footer>
    <div class="footer-top">
        <div class="footer-top__section">
            <h1>Find us at</h1>
            <ul class="footer-top__social">
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-facebook"
                                                                     aria-hidden="true"></i></a>
                </li>
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-instagram"
                                                                     aria-hidden="true"></i></a>
                </li>
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-envelope-o"
                                                                     aria-hidden="true"></i></a></li>
                <li class="footer-top__social-handle"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
        <div class="footer-top__section">
            <ul class="footer-top__navigation">
                <li class="footer-top__navigation-item"><a href="./book-ride.html"><span>Book Ride</span></a></li>
                <li class="footer-top__navigation-item"><a href="./user/bookings.html"><span>My Bookings</span></a>
                </li>
                <li class="footer-top__navigation-item"><a href="./offer-ride.html"><span>Offer Ride</span></a></li>
                <li class="footer-top__navigation-item"><a href="./signup.html"><span>Sign Up</span></a></li>
                <li class="footer-top__navigation-item"><a href="./login.html"><span>Login</span></a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© MyPool 2021</p>
    </div>
</footer>
</body>
<script src="{{URL::asset('js/navigation.js')}}"></script>
<script src="https://use.fontawesome.com/9b1d03ddac.js"></script>
@yield('agreementScript')
</html>
