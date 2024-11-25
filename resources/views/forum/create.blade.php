@extends('layouts.app')

@section('title', 'Foro de ayuda')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Foro de Ayuda</h1>

    <!-- Mensajes de éxito o error -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <!-- Formulario de búsqueda -->
    <form action="{{ route('forum.search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Buscar..." value="{{ request()->query('query') }}">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <!-- Lista de publicaciones -->
    <div class="mb-4">
        @foreach($posts as $post)
            <div class="post mb-3">
                <div class="post-header d-flex justify-content-between">
                    <h5>{{ $post->user_name }} - {{ $post->published_at->format('d/m/Y H:i') }}</h5>
                    @if(auth()->check() && auth()->id() == $post->user_id)
                        <div>
                            <a href="{{ route('forum.edit', $post->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('forum.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </div>
                    @endif
                </div>
                <p>{{ $post->content }}</p>
                
                <!-- Respuestas -->
                <div class="replies mt-3">
                    @foreach($post->replies as $reply)
                        <div class="reply mb-2">
                            <p><strong>{{ $reply->user_name }}</strong> - {{ $reply->created_at->format('d/m/Y H:i') }}</p>
                            <p>{{ $reply->content }}</p>
                        </div>
                    @endforeach
                </div>

                <!-- Responder -->
                <form action="{{ route('forum.reply', $post->id) }}" method="POST" class="mt-3">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" class="form-control" rows="3" placeholder="Escribe tu respuesta..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Responder</button>
                </form>
            </div>
        @endforeach
    </div>

    <!-- Paginación -->
    <div class="d-flex justify-content-center mt-4">
        {{ $posts->links('pagination::bootstrap-4') }}
    </div>

    <!-- Formulario para crear un nuevo post -->
    <div class="mt-5">
        <h4>Crear nueva publicación</h4>
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <textarea name="content" class="form-control" rows="4" placeholder="Escribe tu mensaje..." required></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-3">Publicar</button>
        </form>
    </div>
</div>
@endsection
