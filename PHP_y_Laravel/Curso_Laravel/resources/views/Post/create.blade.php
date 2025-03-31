<!DOCTYPE html>
<html lang="en">
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
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0-4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"></path>
            </svg>
            <span>Información: Asegúrate de llenar todos los campos correctamente.</span>
        </div>

        <form action="#" method="POST" class="space-y-4">
            <div>
                <label class="block text-gray-700">Título del Post</label>
                <input type="text" class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Ingrese el título">
            </div>
            <div>
                <label class="block text-gray-700">Descripción</label>
                <textarea class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" rows="4" placeholder="Ingrese la descripción"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">Guardar Post</button>
            </div>
        </form>
    </div>
</body>
</html>
