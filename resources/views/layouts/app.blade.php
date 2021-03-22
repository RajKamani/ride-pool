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
    <link rel="stylesheet" href="{{ URL::asset('css/forms.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">

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
                    <a href="./user/bookings.html"><span>My Bookings</span></a>
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

</body>
<script src="{{URL::asset('js/navigation.js')}}"></script>
@yield('agreementScript')
</html>
