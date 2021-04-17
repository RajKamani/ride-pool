@extends('layouts.app')

@section('content')
    <div class="common-layout">
        <div class="common-layout__image-container">
            <img src="./assets/svgs/book.svg" alt="Book" />
        </div>
        <form class="common-layout__content" action="{{route('search_ride')}}" method="POST">
            @csrf
            <h1 class="form-title">Book a ride today!</h1>
            <div class="input-container">
                <label class="form-label" for="from">From</label>
                <input class="form-input" value="{{old('source')}}" type="text" placeholder="Ex. Gandhidham" name="source" id="from" />
            </div>
            @error('source')

            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror
            <div class="input_container">
                <label class="form-label" for="to">To</label>
                <input class="form-input" type="text" value="{{old('destination')}}" placeholder="Ex. Ahmedabad" name="destination" id="to" />
            </div>
            @error('destination')

            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror
            <div class="input_container">
                <label class="form-label" for="seats">Seats</label>
                <input class="form-input" type="number" value="{{old('seats')}}" placeholder="Ex. 2" name="seats" id="seats" />
            </div>
            @error('seats')

            <span style="color: red;">
                    <strong>{{ $message}}</strong>
                </span>

            @enderror
            <div class="input_container">
                <label class="form-label" for="date">Date</label>
                <input class="form-input" type="date" name="date" id="date" />
            </div>
            @error('date')

            <span style="color: red;">
                    <strong>{{ $message == 'The date must be a date after yesterday.' ? 'The date must be Today or after today.' :$message }}</strong>
                </span>

            @enderror
            <div class="align-center">
                <button class="flat-button" type="submit">Search Rides</button>
            </div>
        </form>
    </div>
@endsection
