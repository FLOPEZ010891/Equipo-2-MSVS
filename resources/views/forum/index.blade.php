@extends('layouts.app')

@section('content')
    <div class="container foro-container">
        <div class="row">
            <div class="col-md-6 foro-text">
                <h1>Foro de Ayuda</h1>
                <p>Bienvenido al foro de cuidado de la salud mental. Este es un espacio seguro y respetuoso donde puedes compartir tus experiencias, hacer preguntas y recibir apoyo de otros adolescentes. Por favor, mantén un tono respetuoso y considerado en todas tus publicaciones.</p>
                <a href="{{ route('forum.create') }}" class="btn btn-primary foro-button">Iniciar en el Foro</a>
            </div>
            <div class="col-md-6 foro-image">
                <img src="{{ asset('img/foro.png') }}" alt="Foro" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
