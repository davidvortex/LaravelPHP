<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Post</title>

    <!-- CDN de Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Estilos personalizados -->
    <style>
        body {
            background: linear-gradient(135deg, #b3cde0, #6497b1);
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-md w-full max-w-lg">
        <h1 class="text-2xl font-bold text-blue-600 text-center mb-4">Crear Nuevo Post</h1>

        <!-- Alerta personalizada -->
        <div class="bg-blue-100 text-blue-800 p-4 rounded-md mb-4 flex items-center">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
            </svg>
            <span>Información: Asegúrate de llenar todos los campos correctamente.</span>
        </div>

        <!-- Formulario -->
        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
        @csrf  <!-- Protección contra CSRF -->

            <!-- Campo Nombre -->
            <div>
                <label class="block text-gray-700">Nombre</label>
                <input type="text" name="nombre" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Nombre">
            </div>

            <!-- Campo Apellidos -->
            <div>
                <label class="block text-gray-700">Apellidos</label>
                <input type="text" name="apellidos" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Apellidos">
            </div>

            <!-- Botón de envío -->
            <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                    Guardar Post
                </button>
            </div>
            <div class="mt-6 text-center">
            <a href="index" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 ease-in-out transform hover:scale-105">
                Atras
            </a>
        </div>
        </form>
    </div>
</body>
</html>
