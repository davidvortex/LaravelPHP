@extends('layouts.app')

@section('titulo', 'Crear Registro')

@section('content')
    <div class="max-w-6xl mx-auto p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-blue-600 mb-4">Crear Nuevo Registro</h2>

        <form action="{{ route('indexcruds.store') }}" method="POST">
            @csrf

            <!-- Nombre -->
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 block w-full border-gray-300 rounded-md" required>
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="mt-1 block w-full border-gray-300 rounded-md" required></textarea>
            </div>

            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Crear Registro</button>
        </form>
    </div>
@endsection
