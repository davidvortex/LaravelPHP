@extends('layouts.app')

@section('titulo', 'Lista de Registros')

@section('content')
    <div class="max-w-6xl mx-auto p-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-blue-600 mb-4">Lista de Registros</h2>

        <!-- Botón para agregar nuevo registro -->
        <a href="{{ route('indexcruds.create') }}" class="bg-green-600 text-white px-4 py-2 rounded mb-4 inline-block">+ Agregar Nuevo</a>

        <!-- Tabla de registros -->
        <table class="w-full mt-4 border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Nombre</th>
                    <th class="border p-2">Descripción</th>
                    <th class="border p-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($indexcruds as $item)
                    <tr class="border">
                        <td class="border p-2">{{ $item->id }}</td>
                        <td class="border p-2">{{ $item->nombre }}</td>
                        <td class="border p-2">{{ $item->descripcion }}</td>
                        <td class="border p-2">
                            <!-- Ver registro -->
                            <a href="{{ route('indexcruds.show', $item->id) }}" class="bg-blue-500 text-white px-2 py-1 rounded">Ver</a>

                            <!-- Editar registro -->
                            <a href="{{ route('indexcruds.edit', $item->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Editar</a>

                            <!-- Eliminar registro -->
                            <form action="{{ route('indexcruds.destroy', $item->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded" onclick="return confirm('¿Seguro que quieres eliminar este registro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center p-4">No hay registros disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
