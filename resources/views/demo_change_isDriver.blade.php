@extends('layouts.app')

@section('content')



    <div class="centered">
        <form method="post" action="{{route('AgreementAccept',auth()->user())}}">
            @csrf
            <button class="btn btn-primary" type="Submit">Accept Agreement</button>
        </form>
    </div>

@endsection
