@extends('layouts.app')

@section('content')
    <div id="wycieczki" class="container mt-5 mb-5">
        <div class="row m-2 text-center">
            <h1>Przypisz lub Usuń Rybę z {{ $lake->name }}</h1>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Gatunek</th>
                            <th scope="col">Rodzaj</th>
                            <th scope="col">Akcje</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fishes as $fish)
                            @if (!$lake->fishes->contains($fish->id))
                                <tr>
                                    <td>{{ $fish->species }}</td>
                                    <td>{{ $fish->type }}</td>
                                    <td>
                                        <form
                                            action="{{ route('lake.assignFish', ['lakeId' => $lake->id, 'fishId' => $fish->id]) }}"
                                            method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Przypisz</button>
                                        </form>
                                    </td>
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $fish->species }}</td>
                                    <td>{{ $fish->type }}</td>
                                    <td>
                                        <form
                                            action="{{ route('lake.unassignFish', ['lakeId' => $lake->id, 'fishId' => $fish->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Usuń </button>
                                        </form>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
