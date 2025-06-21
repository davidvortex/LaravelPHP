@extends('layouts.app')

@section('titulo', 'Laravel XD')

@push('css')
    <style>
        body {
            background-color: #F3F4F6 !important; /* Usando un color de fondo más suave */
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-6 mt-10 bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-3xl font-semibold text-center text-gray-800 mb-6">Bienvenido a Laravel XD</h1>

        <!-- Alerta de Información -->
        <div class="flex items-center bg-blue-100 border border-blue-500 text-blue-700 px-4 py-3 rounded-lg mb-6" role="alert">
            <!-- Icono ajustado con tamaño más pequeño (w-5 h-5) -->
            <svg class="w-5 h-5 mr-2 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m0-4h.01M12 2a10 10 0 110 20 10 10 0 010-20z" />
            </svg>
            <span class="font-medium">Información: </span> Este es un mensaje de información, puedes agregar más detalles aquí.
        </div>

        <div class="mt-6 text-center">
            <a href="create" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 ease-in-out transform hover:scale-105">
                crear usuario
            </a>
        </div>

        <!-- Botón para acción -->
        <div class="mt-6 text-center">
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 ease-in-out transform hover:scale-105">
                Ver más
            </a>
        </div>

        <div class="mt-6 text-center">
            <a href="create" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-lg shadow-md transition duration-200 ease-in-out transform hover:scale-105">
                crear mail
            </a>
        </div>
    </div>
@endsection
