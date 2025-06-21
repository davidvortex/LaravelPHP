<?php

use App\Http\Controllers\ShowcrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackEndContoller;
use App\Http\Controllers\CrearcrudController;
use App\Http\Controllers\IndexcrudController;
use App\Http\Controllers\PostContoller;
use App\Models\Prueba;
use App\Http\Controllers\EmailController;
use App\Mail\PostMail;
use Illuminate\Support\Facades\Mail;

// crear crud
Route::get('/indexcruds/index', [IndexcrudController::class, 'create'])->name('post.create');
Route::post('/indexcruds/crear', [CrearcrudController::class, 'store'])->name('post.crear');
Route::post('/indexcruds/show', [ShowcrudController::class, 'show'])->name('post.show');

// Crear las rutas para el CRUD de indexcruds con el controlador IndexcrudController
Route::resource('indexcruds', IndexcrudController::class)
    // La opción 'parameters' reemplaza el nombre de la clave de la URL
    // 'indexcruds' será reemplazado por 'post' en la URL.
    ->parameters(['indexcruds' => 'post'])
    // Aquí se personalizan los nombres de las rutas generadas
    // Cambiamos 'indexcruds' por 'post' para que todas las rutas tengan el prefijo 'post'
    ->names('post')
    // La opción 'except' se utiliza para excluir rutas específicas del grupo de rutas generadas
    // En este caso, estamos excluyendo la ruta de 'destroy', lo que significa que no se creará
    // la ruta para eliminar un recurso (esto puede ser útil si no quieres permitir eliminaciones).
    ->except(['destroy']);


    // Ruta para mostrar todos los posts
    Route::resource('posts', PostContoller::class);




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

// Rutas para enviar correos electrónicos
Route::get('/mail/create', [EmailController::class, 'create'])->name('mail.create');
Route::post('/mail/send', [EmailController::class, 'send'])->name('mail.send');


