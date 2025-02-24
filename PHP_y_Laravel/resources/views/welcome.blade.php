<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Template</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-md w-full p-4 fixed top-0">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-xl font-bold text-gray-800" href="#">Navbar</a>
            <div class="hidden md:flex space-x-4">
                <a class="text-gray-700 hover:text-blue-500" href="#">Home</a>
                <a class="text-gray-700 hover:text-blue-500" href="#">Features</a>
                <a class="text-gray-700 hover:text-blue-500" href="#">Pricing</a>
                <span class="text-gray-400 cursor-not-allowed">Disabled</span>
            </div>
            <button class="md:hidden text-gray-700 focus:outline-none">
                ☰
            </button>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="flex-grow flex flex-col items-center justify-center mt-20 px-4">
        <h1 class="text-3xl font-bold text-gray-800 text-center mb-6">
            Bienvenido a mi sitio Web David Jesus Coronado Reyes
        </h1>

        <!-- Contenedor de Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-72">
                <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover" alt="Imagen de tarjeta">
                <div class="p-4">
                    <h5 class="text-xl font-bold">Categorias </h5>
                    <p class="text-gray-600 mt-2">Tipos de genero de musica</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">boton</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white shadow-lg rounded- lg overflow-hidden w-72">
                <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover" alt="Imagen de tarjeta">
                <div class="p-4">
                    <h5 class="text-xl font-bold">Ofertas </h5>
                    <p class="text-gray-600 mt-2"> Obetner un descuento para cierto concierto </p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">boton</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-72">
                <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover" alt="Imagen de tarjeta">
                <div class="p-4">
                    <h5 class="text-xl font-bold">eleccion top Musicales</h5>
                    <p class="text-gray-600 mt-2"> Muisca seleccionada por el usuario</p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Go somewhere</a>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden w-72">
                <img src="https://via.placeholder.com/300" class="w-full h-40 object-cover" alt="Imagen de tarjeta">
                <div class="p-4">
                    <h5 class="text-xl font-bold">Seleccion JSON</h5>
                    <p class="text-gray-600 mt-2"> Codigo como JSON </p>
                    <a href="#" class="mt-4 inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Go somewhere</a>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-auto">
        <p>&copy; 2025 Mi Sitio Web. Hecho por: David Jesus Coronado Reyes.</p>
    </footer>
</body>

</html>
