@extends('layouts.app')

@section('titulo', 'Enviar correo')

@section('content')
<div class="max-w-2xl mx-auto mt-10 bg-white p-6 rounded shadow">
    @if(session('success'))
        <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('mail.send') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block font-semibold">Correo destino:</label>
            <input type="email" name="email" id="email" required
                class="w-full border border-gray-300 rounded px-3 py-2" placeholder="correo@ejemplo.com">
        </div>

        <div>
            <label for="asunto" class="block font-semibold">Asunto:</label>
            <input type="text" name="asunto" id="asunto" required
                class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Asunto del correo">
        </div>

        <div>
            <label for="mensaje" class="block font-semibold">Mensaje:</label>
            <textarea name="mensaje" id="mensaje" rows="5" required
                class="w-full border border-gray-300 rounded px-3 py-2" placeholder="Mensaje del correo"></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Enviar correo
        </button>
    </form>
</div>
@endsection
