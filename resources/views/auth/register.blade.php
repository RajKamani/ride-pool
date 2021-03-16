@extends('layouts.app')

@section('content')
    <div class="centered">
        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf
            <h1 class="form__title">Sign Up</h1>
            <input class="form__input" type="text" name="name" placeholder="Full Name" required
                   value="{{old('name')}}"/>
            @error('name')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="form__input" type="email" name="email" placeholder="E-Mail" required  value="{{old('email')}}"/>
            @error('email')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="form__input" type="number" name="contact" placeholder="Contact" required  value="{{old('contact')}}"/>
            @error('contact')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form__input form__input-radio">
                <label for="gender">Gender</label>
                <div>
                    <input class="form__input-radio-button" type="radio" name="gender"
                           value="male"/><span>Male</span>
                </div>
                <div>
                    <input class="form__input-radio-button" type="radio" name="gender"
                           value="female"/><span>Female</span>
                </div>
            </div>
            @error('gender')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <textarea name="address" class="form__input" placeholder="Address" required >{{{ old('address') }}}</textarea>
            @error('address')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="form__input" type="password" name="password" placeholder="Password" required/>
            @error('password')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input class="form__input" type="password" name="password_confirmation" placeholder="Confirm Password"
                   required/>
            <button class="flat-button" type="submit">Sign Up</button>
            <p class="form-link">Already have an account?<a href="{{route('login')}}"> Login</a></p>
        </form>
@endsection
