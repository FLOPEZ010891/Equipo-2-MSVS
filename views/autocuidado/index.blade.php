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

    let imagen, mensaje;
    switch (seccion) {
        case 'alimentacion':
            imagen = '<img src="{{ asset('img/alimentacion.jpg') }}" alt="Alimentación Saludable" class="imagen-animada">';
            mensaje = '<p>Consejos sobre alimentación saludable.</p>';
            break;
        case 'higiene':
            imagen = '<img src="{{ asset('img/higiene.jpg') }}" alt="Higiene del Sueño" class="imagen-animada">';
            mensaje = '<p>Consejos sobre higiene del sueño.</p>';
            break;
        case 'ejercicio':
            imagen = '<img src="{{ asset('img/ejercicio.jpg') }}" alt="Rutinas de Ejercicio" class="imagen-animada">';
            mensaje = '<p>Consejos sobre rutinas de ejercicio.</p>';
            break;
        case 'estres':
            imagen = '<img src="{{ asset('img/estres.jpg') }}" alt="Manejo del Estrés" class="imagen-animada">';
            mensaje = '<p>Consejos sobre manejo del estrés.</p>';
            break;
        case 'senales':
            imagen = '<img src="{{ asset('img/senales.jpg') }}" alt="Señales de Alarma" class="imagen-animada">';
            mensaje = '<p>Señales de alarma que debes tener en cuenta.</p>';
            break;
        default:
            imagen = '';
            mensaje = '';
    }

    contenidoRelacionado.innerHTML = mensaje + imagen;
}
</script>
