@extends('layouts.app')

@section('content')
    <div class="registro">
        <h2 class="text-center">Crear Usuario</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="registroForm" method="POST" action="{{ route('usuarios.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                <span class="error-message" id="error-name"></span>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                <span class="error-message" id="error-email"></span>
            </div>
            <div class="input-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="{{ old('direccion') }}" required>
                <span class="error-message" id="error-direccion"></span>
            </div>
            <div class="input-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" value="{{ old('edad') }}" required>
                <span class="error-message" id="error-edad"></span>
            </div>
            <div class="input-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="Hombre" {{ old('sexo') == 'Hombre' ? 'selected' : '' }}>Hombre</option>
                    <option value="Mujer" {{ old('sexo') == 'Mujer' ? 'selected' : '' }}>Mujer</option>
                    <option value="Otro" {{ old('sexo') == 'Otro' ? 'selected' : '' }}>Otro</option>
                </select>
                <span class="error-message" id="error-sexo"></span>
            </div>
            <div class="input-group">
                <label for="ocupacion">Ocupación:</label>
                <input type="text" id="ocupacion" name="ocupacion" value="{{ old('ocupacion') }}">
                <span class="error-message" id="error-ocupacion"></span>
            </div>
            <div class="input-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}" required>
                <span class="error-message" id="error-telefono"></span>
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
                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" name="imagen" required>
                <span class="error-message" id="error-imagen"></span>
            </div>
            <button type="submit" class="submit-button">Guardar</button>
        </form>
    </div>
@endsection
