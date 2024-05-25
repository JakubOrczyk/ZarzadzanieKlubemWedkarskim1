@extends('layouts.app')

@section('content')

    <div class="container mt-5 mb-5">
        @include('shared.session-error')
        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nowy ryba</h1>
        </div>
        @include('shared.validation-error')
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('tournament.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text"
                            class="form-control @if ($errors->first('name')) is-invalid @endif"
                            value="{{ old('name') }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description" class="form-label">Opis</label>
                        <input id="description" name="description" type="text"
                            class="form-control @if ($errors->first('description')) is-invalid @endif"
                            value="{{ old('description') }}">
                        <div class="invalid-feedback">Nieprawidłowy opis!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="lake_id" class="form-label">Łowisko</label>
                        <select id="lake_id" name="lake_id"
                            class="form-control @if ($errors->first('lake_id')) is-invalid @endif">
                            @foreach ($lakes as $lake)
                                <option value="{{ $lake->id }}" {{ old('lake_id') == $lake->id ? 'selected' : '' }}>
                                    {{ $lake->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">Nieprawidłowe łowisko!</div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
