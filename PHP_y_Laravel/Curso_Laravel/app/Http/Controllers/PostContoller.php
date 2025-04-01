<?php

namespace App\Http\Controllers;

use App\Models\Post; // Asegúrate de importar el modelo Post
use Illuminate\Http\Request;


class PostContoller extends Controller
{
    // Mostrar todos los posts
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    // Mostrar el formulario de creación
    public function create()
    {
        return view('post.create');
    }

    // Almacenar un nuevo post
    public function store(Request $request)
{
    Post::create($request->all());
    return redirect()->route('post.index');
}


    // Mostrar un post específico (Usando Model Binding)
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    // Mostrar el formulario de edición (Usando Model Binding)
    public function edit(Post $post)
    {
        return view('post.edit', compact('post'));
    }

    // Actualizar un post (Usando Model Binding)
    public function update(Request $request, Post $post)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
        ]);

        // Actualizar el post
        $post->update($request->all());

        return redirect()->route('posts.index')->with('success', 'Post actualizado correctamente');
    }

    // Eliminar un post (Usando Model Binding)
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado correctamente');
    }
}
