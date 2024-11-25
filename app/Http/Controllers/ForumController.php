<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use App\Models\ForumReply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
   
    public function index(Request $request)
    {
        $query = $request->get('query'); 
    
        return $this->search($request); 
        return view('forum.index', compact('posts'));
    }

   
    public function search(Request $request)
    {
        $query = $request->get('query'); 
    
        $posts = ForumPost::query()
            ->when($query, function ($queryBuilder) use ($query) {
                $queryBuilder->where('content', 'like', "%{$query}%")
                    ->orWhereHas('user', function ($userQuery) use ($query) {
                        $userQuery->where('name', 'like', "%{$query}%");
                    });
            })
            ->latest()
            ->paginate(10); // Realiza la paginación
    
        return view('forum.create', compact('posts')); // Devuelve las publicaciones filtradas
    }

   
    public function create()
    {
        $posts = ForumPost::paginate(10);
        return view('forum.create', compact('posts'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:1500',
        ]);

    
        $content = $this->filterBadWords($request->content);
        
        ForumPost::create([
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'content' => $content,
            'published_at' => now(),
        ]);

        return redirect()->route('forum.create')->with('success', 'Publicación creada con éxito.');
    }

    
    private function filterBadWords($content)
    {
        $badWords = ['puto', 'pendejo', 'chingada']; 
        $replacement = '[***]'; 

        foreach ($badWords as $badWord) {
            $content = str_ireplace($badWord, $replacement, $content);
        }

        return $content;
    }

    /**
     * Mostrar el formulario para editar una publicación.
     */
    public function edit($id)
    {
        $post = ForumPost::findOrFail($id);

        if ($post->user_id !== Auth::id()) {
            return redirect()->route('forum.create')->with('error', 'No tienes permiso para editar esta publicación.');
        }

        return view('forum.edit', compact('post'));
    }

    /**
     * Actualizar una publicación con bloqueo de palabras inapropiadas.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string|max:500',
        ]);

        $post = ForumPost::findOrFail($id);

        if ($post->user_id !== Auth::id()) {
            return redirect()->route('forum.create')->with('error', 'No tienes permiso para editar esta publicación.');
        }

        // Validar contenido contra palabras inapropiadas
        $content = $this->filterBadWords($request->content);

        $post->update([
            'content' => $content,
        ]);

        return redirect()->route('forum.create')->with('success', 'Publicación actualizada con éxito.');
    }

    /**
     * Eliminar una publicación.
     */
    public function destroy($id)
    {
        $post = ForumPost::findOrFail($id);

        if ($post->user_id !== Auth::id()) {
            return redirect()->route('forum.create')->with('error', 'No tienes permiso para eliminar esta publicación.');
        }

        $post->delete();

        return redirect()->route('forum.create')->with('success', 'Publicación eliminada con éxito.');
    }

    /**
     * Responder a una publicación con bloqueo de palabras inapropiadas.
     */
    public function reply(Request $request, $postId)
    {
        $request->validate([
            'content' => 'required|string|max:1500',
        ]);

        $post = ForumPost::findOrFail($postId);

        // Validar contenido contra palabras inapropiadas
        $content = $this->filterBadWords($request->content);

        ForumReply::create([
            'post_id' => $post->id,
            'user_id' => Auth::id(),
            'user_name' => Auth::user()->name,
            'content' => $content,
        ]);

        return redirect()->route('forum.create')->with('success', 'Respuesta enviada con éxito.');
    }
}
