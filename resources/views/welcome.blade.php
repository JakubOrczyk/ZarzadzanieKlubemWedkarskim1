@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <h1>Witaj w klubie wędkarskim</h1>
        <p>Wystartuj razem z nami w zawodach wędkarskich!</p><br />
        <div class="row">
            @forelse ($tournaments->take(3) as $tournament)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $tournament->name }}</h5>
                            <p class="card-text">{!! Str::limit($tournament->description, 100, '...') !!}</p>
                            <a href="{{ route('tournament.show', $tournament) }}" class="btn btn-primary">Zobacz!</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <p class="text-center">Brak zawodów.</p>
                </div>
            @endforelse
        </div>
        <h2>Cennik zawodów</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Typ</th>
                    <th>Cena</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-success">
                    <td >Normalny</td>
                    <td>90 PLN</td>
                </tr>
                <tr>
                    <td>Ulgowy</td>
                    <td>50 PLN</td>
                </tr>
                <tr class="table-success">
                    <td>Student</td>
                    <td>30 PLN</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
