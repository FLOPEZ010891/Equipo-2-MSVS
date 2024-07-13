
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h3>Tus resultados se han guardado satisfactoriamente</h3>
            <p>{{ $mensaje }}</p>
            <a class="btn btn-primary" href="{{ route('unidadesdesalud.index') }}">Consultar Centros de Salud</a>
            <a class="btn btn-primary" href="{{ url('/autocuidado') }}" role="button">Continuar</a>
        </div>
    </div>
@endsection
