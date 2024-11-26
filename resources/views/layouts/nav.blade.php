<nav class="navbar">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
        <a href="{{ route('index') }}"><span>MSVS</span></a>
    </div>
    <ul class="menu">
        @guest

            <li><a href="{{ route('autocuidado') }}">Autocuidado</a></li> 
            <li><a href="{{ route('login') }}">Inicio de sesión</a></li>
            <li><a href="{{ route('register') }}">Registro</a></li>
        @endguest
        @auth

            <li><a href="{{ route('autocuidado') }}">Autocuidado</a></li>

            <li><a href="{{ route('tamizaje.index') }}">Tamizajes</a></li>
            <li><a href="{{ route('forum.index') }}">Foros de ayuda</a></li>
            <li><a href="{{ route('usuarios.index') }}">Usuarios</a></li>
            <li>
                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        @endauth
    </ul>
</nav>
