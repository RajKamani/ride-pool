@extends('layouts.app')

@section('content')

    <form class="common-layout" method="POST" action="{{route('AgreementAccept',auth()->user())}}">
        @csrf
        <div class="common-layout__image-container">
            <img src="{{ URL::asset('assets/svgs/city.svg') }}" alt="Offroad"/>

        </div>
        <div class="common-layout__content">
            <h1 class="content-heading">Offer Rides</h1>
            <p class="content-text">By using the Site, you represent and warrant that: (1) you have the legal capacity and you agree to comply with these Terms of Use. (2) your use of the Site will not violate any applicable law or regulation.</p>
            <p class="content-text">If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Site.</p>
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
