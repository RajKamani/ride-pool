@extends('layouts.app')

@section('content')
    <div class="common-layout">
        <div class="common-layout__image-container">
            <img src="../assets/svgs/car.svg" alt="Journey"/>
        </div>
        <form class="common-layout__content" method="POST" action="{{route('add-vehicle',auth()->user())}}">
            @csrf
            <h1 class="form-title">Add your wheels!</h1>

            <div class="input-container">
                <label class="form-label" for="from">Model</label>
                <input class="form-input" type="text" placeholder="Ex. Ertiga" name="model" id="model" value="{{old('model')}}"/>
            </div>
            @error('model')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-container">
                <label class="form-label" for="from">Category</label>
                <input class="form-input" type="text" placeholder="Ex. SUV" name="catagory" id="catagory" value="{{old('catagory')}}"/>
            </div>
            @error('catagory')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-container">
                <label class="form-label" for="from">Seats</label>
                <input class="form-input" type="text" placeholder="Ex. 7" name="seats" id="seats" value="{{old('seats')}}"/>
            </div>
            @error('seats')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-container">
                <label class="form-label" for="from">Date of Purchase</label>
                <input class="form-input" type="date" name="purchase_date" id="purchase_date" value="{{old('purchase_date')}}"/>
            </div>
            @error('purchase_date')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-container">
                <label class="form-label" for="from">Kilometres Used</label>
                <input class="form-input" type="text" placeholder="Ex. 70000" name="kms_used" id="kms_used" value="{{old('kms_used')}}"/>
            </div>
            @error('kms_used')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-container">
                <label class="form-label" for="from">Rate/km</label>
                <input class="form-input" type="number" placeholder="Ex. ₹10/-" name="rate" id="rate" value="{{old('rate')}}"/>
            </div>
            @error('rate')
            <span style="color: red;">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="align-center">
                <button class="flat-button" type="submit">Confirm</button>
            </div>
        </form>
    </div>
@endsection
