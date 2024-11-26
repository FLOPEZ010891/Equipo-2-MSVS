<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <script src="{{ asset('js/validaciones.js') }}" defer></script>
</head>
<body>
    @include('layouts.nav')
    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>
