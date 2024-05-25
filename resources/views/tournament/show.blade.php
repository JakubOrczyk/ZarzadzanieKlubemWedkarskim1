@extends('layouts.app')

@section('content')
    <div id="wycieczki" class="container mt-5 mb-5">
        <div class="row m-2 text-center">
            <h1>{{ $tournament->name }}</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="card" style="min-width: 50vw; max-width: 90vw;">
                <div class="card-body">
                    <h5 class="card-title">Informacje o zawodach</h5>
                    <p class="card-text">{!! $tournament->description !!}</p>
                    <h5 class="card-title">Łowisko</h5>
                    <a href="{{ route('lake.show', $lake) }}">
                    <p class="card-text">{{ $lake->name }}</p>
                    </a>
                    <h5 class="card-title">Lokalizacja</h5>
                    <p class="card-text">{{ $lake->location }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
