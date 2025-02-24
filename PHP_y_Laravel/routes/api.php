<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Endpoint de prueba
Route::get('/', function () {
    return response()->json(['message' => 'Bienvenido a la API']);
});

// Devuelve todos los artistas en JSON
Route::get('seleccion/json', function () {
    $TiposMus = [
        'pop' => ['Aleck Sinteck', 'Jaunes', 'Miranda', 'Paulina Rubio'],
        'rock' => ['Maná', 'Cafe Tacuba', 'Elefante'],
        'reggaeton' => ['Daddy Yankee', 'Wisin Yandel', 'Bad Bunny', 'Ozuna'],
        'banda' => ['El Recodo', 'Julion Alvarez', 'Calibre 50', 'Tigres del Norte'],
    ];

    return response()->json($TiposMus);
});

// Otra ruta simple
Route::get('productos', function () {
    return response()->json(['producto1' => 'Guitarra', 'producto2' => 'Piano']);
});

 