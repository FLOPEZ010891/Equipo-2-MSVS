
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-success mt-4" role="alert">
            <h3>Tus resultados se han guardado satisfactoriamente</h3>
            <p>{{ $mensaje }}</p>
            <a class="btn btn-outline-primary" href="{{ url('/autocuidado') }}" role="button">Continuar</a>
        </div>
    </div>
@endsection
