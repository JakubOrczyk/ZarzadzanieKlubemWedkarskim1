@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Łowiska</h1>
    <p class="mb-4">Łowiska dostępne dla naszych klubowiczów</p>
        @include('shared.success-toast')
        @include('shared.session-error')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Lokalizacja</th>
                    <th scope="col">Typ</th>
                    @if (Auth::check())
                        <th scope="col">Akcje</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @forelse ($lakes as $lake)
                    <tr>
                        <td>
                            <a href="{{ route('lake.show', $lake) }}">
                                {{ $lake->name }}
                            </a>
                        </td>
                        <td>{{ $lake->location }}</td>
                        <td>{{ $lake->type }}</td>
                        @if (Auth::check())
                            <td>
                                <a href="{{ route('lake.edit', $lake) }}" class="btn btn-primary btn-sm">Edycja</a>
                                <form method="POST" action="{{ route('lake.destroy', $lake->id) }}" class="d-inline">
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
            <a href="{{ route('lake.create') }}" class="btn btn-success mb-3">Dodaj Łowisko</a>
            <a href="{{ route('lake.image_upload') }}" class="btn btn-info mb-3">Dodaj nowy obrazek</a>
        @endif
    </div>
@endsection
