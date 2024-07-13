<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ForumPost;
use Carbon\Carbon;

class ForumController extends Controller
{
    public function index()
    {
        $posts = ForumPost::with('user')->latest()->get();
        return view('forum.index', compact('posts'));
    }

    public function create()
    {
        $posts = ForumPost::with('user')->latest()->get();
        return view('forum.create', compact('posts'));

        $posts = ForumPost::latest()->take(10)->get();
        return view('forum.create', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:1000',
        ]);

        ForumPost::create([
            'user_id' => auth()->id(),
            'user_name' => auth()->user()->name,
            'content' => $request->content,
            'published_at' => Carbon::now(),
        ]);

        return redirect()->route('forum.create')->with('status', 'Mensaje enviado con éxito.'); 
    }
}
