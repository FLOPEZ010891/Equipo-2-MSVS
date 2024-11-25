
@extends('layouts.app')

@section('content')
<div class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Tamizaje de Desesperanza</h1>
            <p>Un tamizaje es una evaluación preliminar que nos ayuda a identificar si existe alguna señal de alerta sobre nuestra salud mental.
                El Tamizaje de Desesperanza de Beck es una herramienta que nos ayuda a detectar sentimientos de desesperanza. ¡Anímate a contestarlo!
            </p>.</p>
            <a href="{{ route('tamizaje.desesperanza') }}" class="hero-button">Iniciar Tamizaje</a>
        </div>
        <div class="hero-image">
            <img src="{{ asset('img/tamizaje.png') }}" alt="Tamizaje de Desesperanza">
        </div>
    </div>
</div>
@endsection
