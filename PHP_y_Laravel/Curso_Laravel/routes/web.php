<?php

use Illuminate\Support\Facades\Route;


// peticion tipo GET - obtener un recurso
Route::get('/', function () {
    return "Bienvenido a la página principal";
});

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



// peticion tipo DELETE - eliminar un registro

