<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ForumController extends Controller
{
    // Mostrar las publicaciones recientes
    public function create()
    {
        $posts = ForumPost::latest()->take(10)->get(); // Obtén las últimas 10 publicaciones
        return view('forum.create', compact('posts'));
    }

    // Guardar una nueva publicación
    public function store(Request $request)
    {
        // Validación del contenido de la publicación
        $validated = $request->validate([
            'content' => 'required|string|min:10|max:1000',
        ]);

        // Filtrado de palabras inapropiadas (puedes agregar más palabras a esta lista)
        $inappropriateWords = ['palabra1', 'palabra2'];
        $content = $request->input('content');
        foreach ($inappropriateWords as $word) {
            $content = str_ireplace($word, '***', $content); // Reemplaza palabras inapropiadas
        }

        // Crear la publicación
        $post = new ForumPost();
        $post->content = $content;
        $post->published_at = Carbon::now();
        $post->user_name = auth()->user()->name; // Obtiene el nombre del usuario autenticado
        $post->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('forum.create')->with('status', 'Tu mensaje ha sido publicado.');
    }
}
