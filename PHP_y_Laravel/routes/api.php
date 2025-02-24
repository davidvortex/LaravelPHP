<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('home');
});


// Ruta en web.php llama a esta API
Route::get('home/categoria/json', function() {
    $TiposMus = [
        'pop' => ['Aleck Sinteck', 'Jaunes', 'Miranda', 'Paulina Rubio'],
        'rock' => ['Maná', 'Cafe Tacuba', 'Elefante'],
        'reggaeton' => ['Daddy Yankee', 'Wisin Yandel', 'Bad Bunny', 'Ozuna'],
        'banda' => ['El Recodo', 'Julion Alvarez', 'Calibre 50', 'Tigres del Norte'],
    ];
    $response = Http::timeout(5)->get(url('api/categorias/json'));
    return response()->json($TiposMus); // devuelve JSON con todas las categorias
});

// euta de prueba en la API
Route::get('seleccionar', function () {
    return response()->json(['mensaje' => 'API de productos']);
});
