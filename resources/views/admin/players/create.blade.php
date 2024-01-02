@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add new player</h1>
        <form class="table-top100 edit-player" action="{{route('admin.players.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name Player</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{old('name')}}">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age" placeholder="Min 17" value="{{old('age')}}">
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight kg</label>
                <input type="number" class="form-control" name="weight" id="weight" placeholder="Min 60 - max 100" value="{{old('weight')}}">
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Height cm</label>
                <input type="number" class="form-control" name="height" id="height" placeholder="Min 165 - max 220" value="{{old('height')}}">
            </div>
            <div class="mb-3">
                <label for="points" class="form-label">Points</label>
                <input type="number" class="form-control" name="points" id="points" placeholder="Min 600 - Max 20000" value="{{old('points')}}">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" name="country" id="country" placeholder="Country" value="{{old('country')}}">
            </div>
            <div class="mb-3">
                <label for="ranking" class="form-label">Ranking</label>
                <input type="number" class="form-control" name="ranking" id="ranking" placeholder="1-200" value="{{old('ranking')}}">
            </div>
            <div>
                <input type="submit" class="button" value="Add Player">
            </div>
        </form>
        @if($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection