@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        @include('shared.session-error')
        <div class="row mt-4 mb-4 text-center">
            <h1>Edytuj dane Łowisko</h1>
        </div>
        @include('shared.validation-error')
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('lake.update', $lake->id) }}" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nazwa</label>
                        <input id="name" name="name" type="text"
                            class="form-control @if ($errors->first('name')) is-invalid @endif"
                            value="{{ $lake->name }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="location" class="form-label">Lokalizacja</label>
                        <input id="location" name="location" type="text"
                            class="form-control @if ($errors->first('location')) is-invalid @endif"
                            value="{{ $lake->location }}">
                        <div class="invalid-feedback">Nieprawidłowy Lokalizacja!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="type" class="form-label">Typ</label>
                        <select id="type" name="type"
                            class="form-control @if ($errors->first('type')) is-invalid @endif">
                            <option value="rzeka" {{ $lake->type === 'rzeka' ? 'selected' : '' }}>Rzeka</option>
                            <option value="staw" {{ $lake->type === 'staw' ? 'selected' : '' }}>Staw</option>
                            <option value="jezioro" {{ $lake->type === 'jezioro' ? 'selected' : '' }}>Jezioro</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy typ!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="image" class="form-label">Zdjęcie</label>
                        <input id="image" name="image" type="text"
                            class="form-control @if ($errors->first('image')) is-invalid @endif"
                            value="{{ $lake->image }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa zdjęcia!</div>
                    </div>
                    <div class="text-center mt-4 mb-4">
                        <input class="btn btn-success" type="submit" value="Wyślij">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
