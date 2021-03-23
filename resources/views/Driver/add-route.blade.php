@extends('layouts.app')
@section('content')
    <div class="common-layout">
        <form class="common-layout__content">
            <h1 class="form-title">Add a new Journey!</h1>
            <div class="input-container">
                <label class="form-label" for="from">Source</label>
                <input class="form-input" type="text" placeholder="Ex. Gandhidham" name="source" id="source" />
            </div>
            <div class="input-container">
                <label class="form-label" for="from">Destination</label>
                <input class="form-input" type="text" placeholder="Ex. Ahmedabad" name="destination"
                       id="destination" />
            </div>
            <div class="input-container">
                <label class="form-label" for="from">Date</label>
                <input class="form-input" type="date" placeholder="Date" name="date" id="date" />
            </div>
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
            <div class="align-center">
                <button class="flat-button" type="submit">Confirm</button>
            </div>
        </form>
        <div class="common-layout__image-container">
            <img src="../assets/svgs/journey.svg" alt="Journey" />
        </div>
    </div>
@endsection
