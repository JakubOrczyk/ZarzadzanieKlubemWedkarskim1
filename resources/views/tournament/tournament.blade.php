@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Zawody</h1>
        <p class="mb-4">Wystartuj w naszych zawodach</p>
        @include('shared.session-error')
        <div class="container mt-4">
            <div class="row">
                @forelse ($tournaments as $tournament)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $tournament->name }}</h5>
                                <p class="card-text">{!! Str::limit($tournament->description, 50) !!}</p>
                                <a href="{{ route('tournament.show', $tournament) }}" class="btn btn-primary">Zobacz szczegóły</a>
                                @if (Auth::check())
                                    <div class="mt-2">
                                        <a href="{{ route('tournament.edit', $tournament) }}"
                                            class="btn btn-secondary btn-sm">Edycja</a>
                                        <form method="POST" action="{{ route('tournament.destroy', $tournament->id) }}"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Brak turniejów.</p>
                    </div>
                @endforelse
            </div>
        </div>
        @if (Auth::check())
            <a href="{{ route('tournament.create') }}" class="btn btn-success mb-3">Dodaj Turniej</a>
            <a href="{{ route('tournament.image_upload') }}" class="btn btn-info mb-3">Dodaj nowy obrazek</a>
        @endif
    </div>
@endsection
