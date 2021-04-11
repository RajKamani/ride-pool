@extends('layouts.app')
@section('content')
    <div class="common-layout">
        <form class="common-layout__content" action="{{route('add-route',auth()->user())}}" method="POST">
            @csrf
            <h1 class="form-title">Add a new Journey!</h1>
            <div class="input-container">
                <label class="form-label" for="from">Source</label>
                <input class="form-input" type="text" placeholder="Ex. Gandhidham" name="source" id="source" value="{{old('source')}}"/>
            </div>
            @error('source')

            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror
            <div class="input-container">
                <label class="form-label" for="from">Destination</label>
                <input class="form-input" type="text" placeholder="Ex. Ahmedabad" name="destination"
                       id="destination"  value="{{old('destination')}}"/>
            </div>
            @error('destination')

            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror

            <div class="input-container">
                <label class="form-label" for="from">Date</label>
                <input class="form-input" type="date" placeholder="Date" name="date" id="date"  value="{{old('date')}}"/>
            </div>
            @error('date')

            <span style="color: red;">
                    <strong>{{ $message == 'The date must be a date after yesterday.' ? 'The date must be Today or after today.' :$message }}</strong>
                </span>

            @enderror


            <div class="input-container">
                <label class="form-label" for="from">Duration</label>
                <input class="form-input" type="text" placeholder="Ex. 2 hour" name="duration" id="durations"  value="{{old('duration')}}"/>
            </div>
            @error('duration')

            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror

            <div class="input-container">
                <label class="form-label" for="from">Choose Your Vehicle</label>
                <select name="vehicle" id="vehicle" class="form-input">
                    @forelse($cars as $car)
                        <option value="{{$car->id}}">{{$car->model_name}}</option>
                    @empty
                        <option value="null">Add Car First!</option>
                    @endforelse
                </select>
            </div>
            @error('vehicle')

            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>

            @enderror
            <div class="align-center">
                <button class="flat-button" type="submit">Confirm</button>
            </div>
        </form>
        <div class="common-layout__image-container">
            <img src="../assets/svgs/journey.svg" alt="Journey"/>
        </div>
    </div>
@endsection
