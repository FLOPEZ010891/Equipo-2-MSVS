@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Mensaje</h1>
        <form action="{{ route('forum.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <textarea name="content" class="form-control" rows="5">{{ old('content', $post->content) }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Actualizar Mensaje</button>
        </form>
    </div>
@endsection
