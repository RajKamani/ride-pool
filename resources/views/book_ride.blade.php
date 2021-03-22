@extends('layouts.app')

@section('content')
    <div class="common-layout">
        <div class="common-layout__image-container">
            <img src="./assets/svgs/book.svg" alt="Book" />
        </div>
        <form class="common-layout__content">
            <h1 class="form-title">Book a ride today!</h1>
            <div class="input-container">
                <label class="form-label" for="from">From</label>
                <input class="form-input" type="text" placeholder="Ex. Gandhidham" name="from" id="from" />
            </div>
            <div class="input_container">
                <label class="form-label" for="to">To</label>
                <input class="form-input" type="text" placeholder="Ex. Ahmedabad" name="to" id="to" />
            </div>
            <div class="input_container">
                <label class="form-label" for="seats">Seats</label>
                <input class="form-input" type="number" placeholder="Ex. 2" name="seats" id="seats" />
            </div>
            <div class="input_container">
                <label class="form-label" for="date">Date</label>
                <input class="form-input" type="date" name="date" id="date" />
            </div>
            <div class="align-center">
                <a class="flat-button" href="./user/available-rides.html">Search Rides</a>
            </div>
        </form>
    </div>
@endsection
