@extends('layouts.app')

@section('content')
    <h2 class="centered">{{ucfirst(auth()->user()->name)}}, you can book ride.</h2>
@endsection
