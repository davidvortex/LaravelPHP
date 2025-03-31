<?php

namespace App\Http\Controllers;

use App\Models\Post; // Asegúrate de importar el modelo Post
use Illuminate\Http\Request;


class PostContoller extends Controller
{
    // Método para mostrar todos los posts
    public function index()
    {
        // Obtener todos los posts desde la base de datos
        $posts = Post::all();
        return view('Post.index', compact('posts'));
    }

    // Método para crear un nuevo post
    public function create()
    {
        return view('Post.create');
    }

    // Método para mostrar un post específico
    public function show($post)
    {
        // Buscar el post en la base de datos por su ID
        $post = Post::findOrFail($post);  // Buscar el post usando el ID
        return view('Post.show', compact('post'));
    }

    // Método para almacenar un nuevo post
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        // Crear un nuevo post
        Post::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirigir a la lista de posts con un mensaje
        return redirect()->route('posts.index')->with('success', 'Post creado correctamente');
    }

    // Método para editar un post (aún no lo has definido)
    public function edit($post)
    {
        $post = Post::findOrFail($post);
        return view('Post.edit', compact('post'));
    }

    // Método para actualizar un post (aún no lo has definido)
    public function update(Request $request, $post)
    {
        $post = Post::findOrFail($post);

        // Validar los datos
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        // Actualizar los datos del post
        $post->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post actualizado correctamente');
    }

    // Método para eliminar un post (aún no lo has definido)
    public function destroy($post)
    {
        $post = Post::findOrFail($post);
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Post eliminado correctamente');
    }
}


