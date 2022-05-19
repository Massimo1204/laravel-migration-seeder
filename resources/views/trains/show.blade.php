@extends('layouts.base')

@section('main-content')
    <h1 class="title">Single Train</h1>
    <div class="trains">
        <div class="card">
            <h3>Train : {{ $train->train_code}}</h3>
            <p>Departure: {{$train->departure_station}}</p>
            <p>Arrival: {{$train->destination_station}}</p>
            <p>Departure Time: {{$train->departure_time}}</p>
            <p>Arrival Time: {{$train->arrival_time}}</p>
            <a href="{{route('trains.index')}}">View all Trains</a>
        </div>
    </div>
@endsection