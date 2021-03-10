@extends('layouts.app')

@section('content')



    <form method="post" action="{{route('AgreementAccept',auth()->user())}}">
        @csrf
        <button class="btn btn-primary" type="Submit">Accept Agreement</button>
    </form>

@endsection
