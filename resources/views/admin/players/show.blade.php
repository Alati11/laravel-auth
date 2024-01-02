@extends('layouts.app')

@section('content')
    
    <section>
        <div class="container">
            <div class="row">
                <div class="card card-player">
                    <img src="{{$player->image}}" alt="Player Image">
                    <div class="container">
                        <h2>{{ $player->name}}</h2>
                    </div>
                    <p>Ranking - {{$player->ranking}}</p>
                    <p>Age - {{$player->age}}</p>
                    <p>Weight kg - {{$player->weight}}</p>
                    <p>Height cm - {{$player->height}}</p>
                    <p>Official Points - {{$player->points}}</p>
                    <p>Country -{{$player->country}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection 