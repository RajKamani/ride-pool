@extends('layouts.app')

@section('content')

    <form class="common-layout" method="POST" action="{{route('AgreementAccept',auth()->user())}}">
        @csrf
        <div class="common-layout__image-container">
            <img src="{{ URL::asset('assets/svgs/city.svg') }}" alt="Offroad"/>

        </div>
        <div class="common-layout__content">
            <h1 class="content-heading">Offer Rides</h1>
            <p class="content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut
                labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip
                ex ea commodo consequat.</p>
            <p class="content-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.</p>
            <input class="form-input" type="text" placeholder="Drivers Licence" name="licence"/>
            @error('licence')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="align-start">
                <input type="checkbox" name="agree" id="agree"><span> I agree the <a class="form-link" href="#">Terms
                            & Conditions</a>
                    </span>
            </div>
            <div class="align-center">
                <button class="flat-button disabled-button" disabled type="submit">Continue</button>
            </div>
        </div>
    </form>

@endsection
@section('agreementScript')
    <script src="{{URL::asset('js/UserAgreement.js')}}"></script>
@endsection
