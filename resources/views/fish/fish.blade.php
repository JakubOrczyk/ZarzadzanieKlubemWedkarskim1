@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-4">Gatunki ryb</h1>
        <p class="mb-4">Poznaj ryby w naszych łowiskach</p>
        @include('shared.session-error')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Gatunek</th>
                    <th scope="col">Rodzaj</th>
                    <th scope="col">Obraz</th>
                    @if (Auth::check())
                        <th scope="col">Akcje</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse ($fishes as $fish)
                    <tr>
                        <td>{{ $fish->species }}</td>
                        <td>{{ $fish->type }}</td>
                        <td>
                            <img src="{{ asset('storage/img/'.$fish->image) }}" class="img-fluid"
                                style="max-width: 100px; height: auto;">
                        </td>
                        @if (Auth::check())
                            <td>
                                <a href="{{ route('fish.edit', $fish) }}" class="btn btn-primary btn-sm">Edycja</a>
                                <form method="POST" action="{{ route('fish.destroy', $fish->id) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Usuń</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Brak ryb.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        @if (Auth::check())
            <a href="{{ route('fish.create') }}" class="btn btn-success mb-3">Dodaj Rybe</a>
            <a href="{{ route('fish.image_upload') }}" class="btn btn-info mb-3">Dodaj nowy obrazek</a>
        @endif
    </div>
@endsection
