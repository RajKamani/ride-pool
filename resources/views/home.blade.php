@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <form method="post" action="{{route('offer_ride',auth()->user())}}">
                     @csrf
                        <button class="btn btn-primary" type="Submit">Offer ride</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
