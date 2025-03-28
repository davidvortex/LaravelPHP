<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEndContoller;
use App\Http\Controllers\PostContoller;
use App\Models\Prueba;

// peticion tipo GET - obtener un recurso
Route::get('/prueba', [BackEndContoller::class, 'index']);

Route::get('/post', [PostContoller::class, 'post']);

// lo coreecto cuando tenemos mas de una sola agregar el nombre
Route::get('/post/index', [PostContoller::class, 'index']);
Route::get('/post/create', [PostContoller::class, 'create']);


// esto podria considerse opcional para redireccion no es buena practica
Route::get('/post/{post}', [PostContoller::class, 'show']);






Route::get('/contacto', function () {
    return "Hola desde la página de contacto";
});

// peticion tipo POST - crear un nuevo registro
// para especificar el tipo de variable que se recibe se coloca entre llaves
// ejemplo {nombre}
Route::get('/saludo/{nombre}', function ($nombre) {
    return "Hola, $nombre";
});

Route::get('/saludo/{deporte}/{balon}', function ($deporte, $balon) {
    return "este deporte es: $deporte y el balon es: $balon";
});

Route::get('/musica/{cantante}/{cancion?}', function ($cantante, $cancion) {


    if($cancion == null){
        return "este cantante es: $cantante y no tiene canción";
    }else{
        return "este cantante es: $cantante y la canción es: $cancion";
    }


    return "este deporte es: $cantante y el balon es: $cancion";
});


// peticion tipo PATCH - actualizar un registro

Route::get('prueba', function(){
    $prueba = new prueba;
    $prueba->nombre = 'David Robtin';
    $prueba->apellidos = 'coronado marques';
    $prueba->edad = '23';
    $prueba->ine = 'no';

    $prueba->save();

    return $prueba;

});

// peticion tipo DELETE - eliminar un registro

