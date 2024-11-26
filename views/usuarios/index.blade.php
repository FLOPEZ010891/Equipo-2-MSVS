@extends('layouts.app')

@section('content')
   <!-- Dentro de index.blade.php -->

<div class="registro">
    <h2 class="text-center">Usuarios</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('usuarios.create') }}" class="submit-button mb-3">Crear Usuario</a>

    <!-- Formulario de búsqueda -->
    <form action="{{ route('usuarios.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar...">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <table class="custom-table">
        <thead>
            <tr>
                <th>Foto de perfil</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Dirección</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Ocupación</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>
                        @if ($usuario->imagen)
                            <img src="{{ asset($usuario->imagen) }}" alt="Imagen de perfil" class="profile-image">
                        @else
                            <img src="{{ asset('path/to/default-image.jpg') }}" alt="Imagen predeterminada" class="profile-image">
                        @endif
                    </td>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->direccion }}</td>
                    <td>{{ $usuario->edad }}</td>
                    <td>{{ $usuario->sexo }}</td>
                    <td>{{ $usuario->ocupacion }}</td>
                    <td>{{ $usuario->telefono }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-edit">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('¿Está seguro de eliminar este usuario?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Paginación -->
    {{ $usuarios->links() }}
</div>

@endsection
