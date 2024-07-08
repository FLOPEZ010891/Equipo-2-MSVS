@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <img src="img/logo.png" alt="Logo" class="hero-logo">
            <h1>Mente Sana, Vida Sana</h1>
            <p>Cuida tu salud mental siendo parte de nuestra comunidad. Regístrate ahora y únete a otros adolescentes que están aquí para apoyarte. Juntos, podemos construir un espacio seguro para hablar, aprender y crecer. ¡Te esperamos!</p>
            <a href="{{ route('registro.show') }}" class="hero-button">Regístrate</a> 
        </div>
        <div class="hero-image">
            <img src="img/Salud1.jpg" alt="Imagen descriptiva">
        </div>
    </div>
</section>
@endsection
