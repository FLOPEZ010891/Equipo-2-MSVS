@extends('layouts.app')

@section('content')
    <div class="container foro-create-container">
        <div class="foro-create-text">
            <h1>Participar en el Foro</h1>
            <p>Deja tu mensaje y participa en el foro. Comparte tus experiencias y consejos con otros adolescentes.</p>
            <form action="{{ route('forum.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <textarea name="content" class="form-control" rows="5" placeholder="Escribe tu mensaje aquí..."></textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary foro-submit-button">Enviar</button>
            </form>
        </div>
        
        <div class="foro-messages">
            @foreach($posts as $post)
                <div class="foro-message">
                    <p>{{ $post->content }}</p>
                    <small>{{ $post->published_at->format('d M Y, H:i') }} - {{ $post->user_name }}</small>
                </div>
            @endforeach
        </div>  
@endsection
