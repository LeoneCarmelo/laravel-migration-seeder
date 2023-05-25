@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-info">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Company</th>
                        <th scope="col">Departure Station</th>
                        <th scope="col">Arrival Station</th>
                        <th scope="col">Departure Time</th>
                        <th scope="col">Arrival Time</th>
                        <th scope="col">Train Code</th>
                        <th scope="col">Wagons number</th>
                        <th scope="col">Delayed</th>
                        <th scope="col">Deleted</th>
                    </tr>
                </thead>
                @forelse ($trains as $train)
                <tbody>
                    <tr>
                        <th scope="row">{{$train->id}}</th>
                        <td>{{$train->company}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->total_wagons}}</td>
                        <td>{{$train->on_time ? 'Yes' : 'No'}}</td>
                        <td>{{$train->deleted ? 'Yes' : 'No'}}</td>
                    </tr>
                    @empty 
                    <p>Sorry, no trains found!</p>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection