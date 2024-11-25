@extends('layouts.app')

@section('content')
<div id="login" class="login">
    <h2>Inicio de Sesión</h2>
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <form id="loginForm" method="POST" action="{{ route('login.submit') }}">
        @csrf
        <div class="input-group">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <span class="error-message" id="error-email"></span>
        </div>
        <div class="input-group">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <span class="error-message" id="error-password"></span>
        </div>
        <button type="submit" class="submit-button">Iniciar Sesión</button>
    </form>
    <div class="login-links">
        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
        <a href="{{ route('registro.show') }}">¿No tienes cuenta? Regístrate</a>
    </div>
</div>
@endsection
