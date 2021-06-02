@extends('layouts.app')

@section('content')

 <div class="content">
 	 @forelse($vehicles as $vehicle)
            <div class="vehicle">
                <div class="vehicle-details">
                    <div class="vehicle-details__content">
                        <h4>Model</h4>
                        <span>{{$vehicle->model_name}}</span>
                    </div>
                    <div class="vehicle-details__content">
                        <h4>Class</h4>
                        <span>{{$vehicle->category}}</span>
                    </div>
                </div>
                <div class="vehicle-details">
                    <div class="vehicle-details__content">
                        <h4>Seats</h4>
                        <span>{{$vehicle->no_of_seats}}</span>
                    </div>
                    <div class="vehicle-details__content">
                        <h4>Purchased</h4>
                        <span>{{$vehicle->purchase_date}}</span>
                    </div>
                </div>
                <div class="vehicle-details">
                    <div class="vehicle-details__content">
                        <h4>Kms. Used</h4>
                        <span>{{$vehicle->km_used}}</span>
                    </div>
                    <div class="vehicle-details__content">
                        <h4>Rate/Km</h4>
                        <span>₹{{$vehicle->rate_per_km}}/-</span>
                    </div>
                </div>
                <div class="vehicle-actions">
                    <a href="{{route('update-vehicle-form',$vehicle)}}" class="flat-button">
                        Edit
                    </a>
                     <form method="post" action="{{route('delete-vehicle',$vehicle)}}">
                        @csrf
                        @method('delete')
                    <button class="flat-button">
                        Delete
                    </button>
                     </form>
                </div>
            </div>
             @empty
            <div class="vehicle">
                <div class="vehicle-details">
                    <span>No Vehicle Added Yet!</span>
                </div>

            </div>
        @endforelse
        </div>
 
@endsection
