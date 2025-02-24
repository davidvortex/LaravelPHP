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

    <main class="flex-grow flex items-center justify-center mt-20">
        <h1 class="text-3xl font-bold text-gray-800">Bienvenido a mi sitio Web David Jesus Coronado Reyes</h1>
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-auto">
        <p>&copy; 2025 Mi Sitio Web. Hecho por: David Jesus Coronado Reyes.</p>
    </footer>
</body>

</html>
