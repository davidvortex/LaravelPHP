<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-600 text-white p-4 text-center text-2xl font-bold relative">
        <a href="{{ route('posts.index') }}" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow-md transition">Salir</a>
        Detalles del Post
    </header>

    <main class="max-w-4xl mx-auto p-6 mt-6 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold text-gray-800">{{ $post->titulo }}</h1>
        <p class="mt-2 text-gray-600">Publicado el {{ $post->created_at->format('d M, Y') }}</p>

        <div class="mt-4 text-gray-700">
            <p>{{ $post->contenido }}</p>
        </div>

        <div class="mt-6 flex space-x-4">
            <a href="{{ route('posts.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Volver</a>
            <a href="{{ route('posts.edit', $post->id) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Editar</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded" onclick="return confirm('¿Seguro que deseas eliminar este post?')">Eliminar</button>
            </form>
        </div>
    </main>

    <footer class="mt-10 text-center text-gray-600">
        &copy; 2025 - Laravel Blog
    </footer>
</body>
</html>
