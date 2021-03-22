@extends('layouts.app')

@section('content')


    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <h1 class="form-title">Login</h1>
        <input class="form-input" type="text" name="email" placeholder="E-Mail" required />
        @error('email')
        <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <input class="form-input" type="password" name="password" placeholder="Password" required />
        @error('password')
        <span style="color: red;">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        <button class="flat-button" type="submit">Login</button>
        <p class="form-link">Don't have any account?<a href="{{route('register')}}"> Signup</a></p>
    </form>


@endsection




{{-- <div class="form-group row mb-0">
     <div class="col-md-8 offset-md-4">
         <button type="submit" class="btn btn-primary">
             {{ __('Login') }}
         </button>

         @if (Route::has('password.request'))
             <a class="btn btn-link" href="{{ route('password.request') }}">
                 {{ __('Forgot Your Password?') }}
             </a>
         @endif--}}

