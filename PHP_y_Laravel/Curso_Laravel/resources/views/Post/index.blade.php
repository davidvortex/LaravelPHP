@extends('layouts.app')

@section('titulo')
    Laravel XD
@endsection

@push('css')
    <style>
        body{
            background-color: aquamarine;
        }
    </style>
@endpush


@section('content')
    <div class="max-w-4xl mx-auto px-4 mt-8">
        <!-- Alerta tipo 'info' con Tailwind CSS -->
        <div class="inline-flex items-center rounded-md bg-blue-50 px-4 py-2 text-sm font-medium text-blue-700 ring-1 ring-blue-700/10 ring-inset">
            <span class="mr-2">Información </span> Este es un mensaje de información, puedes agregar más detalles aquí.
        </div>
    </div>
@endsection

