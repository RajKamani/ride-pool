@extends('layouts.app')

@section('content')
    <div class="content">
        @forelse($vehicles as $vehicle)
            <div class="vehicle">
                <div class="vehicle-details">
                    <span>{{$vehicle->model_name}}</span>
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
