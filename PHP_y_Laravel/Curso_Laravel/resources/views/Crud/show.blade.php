@extends('layouts.app')

@section('titulo', 'Ver Registro')

@section('content')
    <div class="max-w-6xl mx-auto p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-blue-600 mb-4">Detalles del Registro</h2>

        <div class="mb-4">
            <strong class="text-gray-600">ID:</strong> {{ $indexcrud->id }}
        </div>

        <div class="mb-4">
            <strong class="text-gray-600">Nombre:</strong> {{ $indexcrud->nombre }}
        </div>

        <div class="mb-4">
            <strong class="text-gray-600">Descripción:</strong> {{ $indexcrud->descripcion }}
        </div>

        <a href="{{ route('indexcruds.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Volver a la lista</a>
    </div>
@endsection
