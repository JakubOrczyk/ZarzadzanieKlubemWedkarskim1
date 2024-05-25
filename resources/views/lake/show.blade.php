@extends('layouts.app')

@section('content')
    <div id="wycieczki" class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="container text-center mt-5">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <h5 class="card-title">Nazwa</h5>
                        <p class="card-text">{{ $lake->name }}</p>
                        <h5 class="card-title">Lokalizacja</h5>
                        <p class="card-text">{{ $lake->location }}</p>
                        <h5 class="card-title">Typ</h5>
                        <p class="card-text">{{ $lake->type }}</p>
                    </div>
                    <div class="col-md-8 mb-4">
                        <img src="{{ asset('storage/img/' . $lake->image) }}" class="card-img-top img-fluid"
                            style="max-height: 40vh; max-width: 40vw">
                    </div>
                </div>
            </div>
            <div class="row">
                <h5 class="card-title">Ryby w Łowisku:</h5>
                @foreach ($lake->fishes as $fish)
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('storage/img/' . $fish->image) }}" class="card-img-top" style="height: 30vh;">
                                <p>Gatunek: {{ $fish->species }}</p>
                                <p>Rodzaj: {{ $fish->type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @if (Auth::check())
            <a href="{{ route('lake.addFish', $lake) }}" class="btn btn-primary btn-sm">Przypisz/Usuń Rybe</a>
        @endif
    </div>
@endsection
