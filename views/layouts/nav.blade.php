<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
        <a href="{{ route('index') }}"><span>MSVS</span></a>
    </div>
    <ul class="menu">
        <li><a href="{{ route('autocuidado') }}">Autocuidado</a></li>
        <li><a href="#tamizajes">Tamizajes</a></li>
        <li><a href="#foros">Foros de ayuda</a></li>
        <li><a href="{{ route('login') }}">Inicio de sesión</a></li>
        <li><a href="{{ route('registro.show') }}">Registro</a></li>
        <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
    </ul>
</nav>
