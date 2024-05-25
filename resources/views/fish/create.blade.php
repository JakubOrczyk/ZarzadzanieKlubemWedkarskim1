@extends('layouts.app')

@section('content')
    <div class="container mt-5 mb-5">
        @include('shared.session-error')
        <div class="row mt-4 mb-4 text-center">
            <h1>Dodaj nową rybe</h1>
        </div>
        @include('shared.validation-error')
        <div class="row d-flex justify-content-center">
            <div class="col-6">
                <form method="POST" action="{{ route('fish.store') }}" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group mb-2">
                        <label for="species" class="form-label">Gatunek</label>
                        <input id="species" name="species" type="text"
                            class="form-control @if ($errors->first('species')) is-invalid @endif"
                            value="{{ old('species') }}">
                        <div class="invalid-feedback">Nieprawidłowa nazwa gatunku!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="type" class="form-label">Rodzaj</label>
                        <select id="type" name="type"
                            class="form-control @if ($errors->first('type')) is-invalid @endif">
                            <option value="tłusty" {{ old('type') === 'tłusty' ? 'selected' : '' }}>Tłusty</option>
                            <option value="średnio-tłusty" {{ old('type') === 'średnio-tłusty' ? 'selected' : '' }}>
                                Średnio-tłusty</option>
                            <option value="chudy" {{ old('type') === 'chudy' ? 'selected' : '' }}>Chudy</option>
                        </select>
                        <div class="invalid-feedback">Nieprawidłowy rodzaj!</div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="image" class="form-label">Zdjęcie</label>
                        <input id="image" name="image" type="text"
                            class="form-control @if ($errors->first('image')) is-invalid @endif"
                            value="{{ old('image') }}">
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
