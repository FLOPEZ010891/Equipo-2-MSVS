@extends('layouts.app')

@section('content')
<div id="registro" class="registro">
    <h2>Registro</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form id="registroForm" method="POST" action="{{ route('registro.submit') }}" enctype="multipart/form-data">
        @csrf
        <div class="input-group">
            <label for="nombreCompleto">Nombre Completo:</label>
            <input type="text" id="nombreCompleto" name="nombreCompleto" required>
            <span class="error-message" id="error-nombreCompleto"></span>
        </div>
        <div class="input-group">
            <label for="direccion">Dirección:</label>
            <input type="text" id="direccion" name="direccion" required>
            <span class="error-message" id="error-direccion"></span>
        </div>
        <div class="input-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" min="13" required>
            <span class="error-message" id="error-edad"></span>
        </div>
        <div class="input-group">
            <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                <option value="">Selecciona una opción</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
                <option value="noBinario">No binario</option>
            </select>
            <span class="error-message" id="error-sexo"></span>
        </div>
        <div class="input-group">
            <label for="ocupacion">Ocupación:</label>
            <input type="text" id="ocupacion" name="ocupacion">
            <span class="error-message" id="error-ocupacion"></span>
        </div>
        <div class="input-group">
            <label for="telefono">Número Telefónico:</label>
            <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" required>
            <span class="error-message" id="error-telefono"></span>
        </div>
        <div class="input-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            <span class="error-message" id="error-correo"></span>
        </div>
        <div class="input-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <span class="error-message" id="error-password"></span>
        </div>
        <div class="input-group">
            <label for="password_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <span class="error-message" id="error-password_confirmation"></span>
        </div>
        <div class="input-group">
            <label for="imagen">Foto de perfil:</label>
            <input type="file" id="imagen" name="imagen" required>
            <span class="error-message" id="error-imagen"></span>
        </div>
        <button type="submit" class="submit-button">Registrarse</button>
    </form>
</div>
@endsection
