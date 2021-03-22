@extends('layouts.app')

@section('content')

    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <h1 class="form-title">Sign Up</h1>
        <input class="form-input" type="text" name="name" placeholder="Full Name" required value="{{old('name')}}"/>
        @error('name')
        <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <input class="form-input" type="email" name="email" placeholder="E-Mail" required value="{{old('email')}}"/>
        @error('email')
        <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <input class="form-input" type="number" name="contact" placeholder="Contact" required
               value="{{old('contact')}}"/>
        @error('contact')
        <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <div class="form-input form-input__radio">
            <label for="gender">Gender</label>
            <div>
                <input class="form-input__radio-button" type="radio" name="gender" value="male"/><span>Male</span>
            </div>
            <div>
                <input class="form-input__radio-button" type="radio" name="gender"
                       value="female"/><span>Female</span>
            </div>
        </div>
        @error('gender')
        <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <textarea class="form-input" name="address" placeholder="Address" required>{{{ old('address') }}}</textarea>
        @error('address')
        <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <input class="form-input" type="password" name="password" placeholder="Password" required/>
        @error('password')
        <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
        @enderror
        <input class="form-input" type="password" name="password_confirmation" placeholder="Confirm Password" required/>
        <button class="flat-button" type="submit">Sign Up</button>
        <p class="form-link">Already have an account?<a href="{{route('login')}}"> Login</a></p>
    </form>
@endsection
