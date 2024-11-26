@extends('layouts.app')

@section('content')
<div class="autocuidado-container">
    <div class="autocuidado-content">
        <h2 class="autocuidado-title">Autocuidado</h2>
        <div id="contenidoPrincipal">
            <p class="autocuidado-description">El autocuidado es una parte esencial de la salud y el bienestar. Conoce más tips haciendo clic en los botones de la derecha.</p>
            <img src="{{ asset('img/autocuidado.jpg') }}" alt="Autocuidado" id="imagenPrincipal" class="imagen-principal">
        </div>
        <div id="contenidoRelacionado" style="display: none;"></div>
    </div>
    <div class="autocuidado-sidebar">
        <button onclick="mostrarImagen('alimentacion')">Alimentación Saludable</button>
        <button onclick="mostrarImagen('higiene')">Higiene del Sueño</button>
        <button onclick="mostrarImagen('ejercicio')">Rutinas de Ejercicio</button>
        <button onclick="mostrarImagen('estres')">Manejo del Estrés</button>
        <button onclick="mostrarImagen('senales')">Señales de Alarma</button>
    </div>
</div>
@endsection

<script>
function mostrarImagen(seccion) {
    let contenidoPrincipal = document.getElementById('contenidoPrincipal');
    let contenidoRelacionado = document.getElementById('contenidoRelacionado');
    contenidoPrincipal.style.display = 'none';
    contenidoRelacionado.style.display = 'block';


    let contenido;
    switch (seccion) {
        case 'alimentacion':
            contenido = '<img src="{{ asset('img/alimentacion.jpg') }}" alt="Alimentación Saludable" class="imagen-animada">';
            contenido += '<p>Consejos sobre alimentación saludable.</p>';
            contenido += '<iframe width="560" height="315" src="https://www.youtube.com/embed/dxH__2x0p-I?si=p50bFxLTGbpiXmU9" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>';
            break;
        case 'higiene':
            contenido = '<img src="{{ asset('img/higiene.jpg') }}" alt="Higiene del Sueño" class="imagen-animada">';
            contenido += '<p>Consejos sobre higiene del sueño.</p>';
            break;
        case 'ejercicio':
            contenido = '<img src="{{ asset('img/ejercicio.jpg') }}" alt="Higiene del Sueño" class="imagen-animada">';
            contenido += '<p>Rutinas de ejercicio para mantenerte en forma.</p>';
            break;
        case 'estres':
            contenido = '<img src="{{ asset('img/estres.jpg') }}" alt="Manejo del Estrés" class="imagen-animada">';
            contenido += '<p>Consejos sobre manejo del estrés.</p>';
            break;
        case 'senales':
            contenido = '<img src="{{ asset('img/senales.jpg') }}" alt="Señales de Alarma" class="imagen-animada">';
            contenido += '<p>Señales de alarma a tener en cuenta.</p>';
            break;
    }

    contenidoRelacionado.innerHTML = contenido;

}
</script>
