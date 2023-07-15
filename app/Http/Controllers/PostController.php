<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post;
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
      
        $post->author_id = auth()->user()->id;
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post creado exitosamente.');
    }

    public function edit(Post $post)
    {
        
        if (auth()->user()->id != $post->author_id) {
            return redirect()->route('posts.index')->with('error', 'No tienes permiso para editar este post.');
        }

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
       
        if (auth()->user()->id != $post->author_id) {
            return redirect()->route('posts.index')->with('error', 'No tienes permiso para editar este post.');
        }

        
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

       
        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post actualizado exitosamente.');
    }

    public function destroy(Post $post)
    {
       
        if (auth()->user()->id != $post->author_id) {
            return redirect()->route('posts.index')->with('error', 'No tienes permiso para eliminar este post.');
        }

        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado exitosamente.');
    }
}
