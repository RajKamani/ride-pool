@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            {{-- Request Send to Driver.
             Name of Driver : {{$user->name}}
             Contact : {{$user->contact}}--}}

            <table style="width:100%; border:1px solid black; padding: 1.5em;" cellspacing="30px">
                <tr>
                    <th colspan="2" style="font-weight: bold; color: green"> Mail has been Send to Passenger.</th>
                    <th></th>
                </tr>
                <tr>
                    <td style="font-weight: bold; font-weight: bold;">Passenger Name</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td style="font-weight: bold; font-weight: bold">Contact Number</td>
                    <td>{{$user->contact}}</td>
                </tr>
            </table>


            <a href="{{route('ride-request',auth()->user())}}">
                <button style="width:100%;margin-left: 0%;" type="submit" class="flat-button">Home</button>
            </a>

        </div>
    </div>
@endsection

