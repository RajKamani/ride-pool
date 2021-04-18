@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h3>{{$data}}</h3>
            <a href="{{route('home')}}">
                <button style="width:100%;margin-left: 0%;" type="submit" class="flat-button">Home</button>
            </a>
        </div>
    </div>
@endsection
