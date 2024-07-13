@extends('layouts.app')

@section('content')
    <div class="registro">
        <h2 class="text-center">Editar Usuario</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="registroForm" method="POST" action="{{ route('usuarios.update', $usuario->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="input-group">
                <label for="imagen">Imagen de perfil:</label>
                <br>
                @if ($usuario->imagen)
                    <img src="{{ asset($usuario->imagen) }}" class="mt-2" style="max-width: 200px;" alt="Imagen de perfil">
                @else
                    <p class="text-muted mt-2">No hay imagen disponible.</p>
                @endif
                <input type="file" id="imagen" name="imagen">
            </div>

            <div class="input-group">
                <label for="name">Nombre:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $usuario->name) }}" required>
                <span class="error-message" id="error-name"></span>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $usuario->email) }}" readonly>
                <span class="error-message" id="error-email"></span>
            </div>

            <div class="input-group">
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" value="{{ old('direccion', $usuario->direccion) }}" required>
                <span class="error-message" id="error-direccion"></span>
            </div>

            <div class="input-group">
                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" value="{{ old('edad', $usuario->edad) }}" required>
                <span class="error-message" id="error-edad"></span>
            </div>

            <div class="input-group">
                <label for="sexo">Sexo:</label>
                <select id="sexo" name="sexo" required>
                    <option value="Hombre" {{ old('sexo', $usuario->sexo) === 'Hombre' ? 'selected' : '' }}>Hombre</option>
                    <option value="Mujer" {{ old('sexo', $usuario->sexo) === 'Mujer' ? 'selected' : '' }}>Mujer</option>
                    <option value="No binario" {{ old('sexo', $usuario->sexo) === 'No binario' ? 'selected' : '' }}>No binario</option>
                </select>
                <span class="error-message" id="error-sexo"></span>
            </div>

            <div class="input-group">
                <label for="ocupacion">Ocupación:</label>
                <input type="text" id="ocupacion" name="ocupacion" value="{{ old('ocupacion', $usuario->ocupacion) }}">
                <span class="error-message" id="error-ocupacion"></span>
            </div>

            <div class="input-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono', $usuario->telefono) }}" required>
                <span class="error-message" id="error-telefono"></span>
            </div>

            <button type="submit" class="submit-button">Actualizar</button>
        </form>
    </div>
@endsection
