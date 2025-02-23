<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
// x|return view('welcome');
// });


// esto puede ser una pagina principal
Route::get('/', function () {
    return view('welcome');
});

// categorias
Route::get('categorias', function (\Illuminate\Http\Request $repuesta) {

    dd($repuesta);
    $categorias_musica = [
        'pop' => [
            'Aleck Sinteck',
            'Jaunes',
            'Miranda',
            'Paulina Rubio',
        ],
        'rock' => [
            'Maná',
            'Cafe Tacuba',
            'Elefante',
        ],
        'regueaton' => [
            'Daddy Yanke',
            'Wisin Yandel',
            'Bad Bunny',
            'Ozuna',
        ],
        'banda' => [
            'El Recodo',
            'Julion Alvarez',
            'Calibre 50',
            'Tigres del Norte'
        ],
    ];



    // Obtener el valor del parámetro variable
    $nombreMusica = $repuesta->input('nombremusica');

    // Si el parámetro 'nombremusica' es nulo, mostrar todas las categorías y sus artistas
    if (is_null($nombreMusica)) { // si es nullo nombre musica significa que no se solicito
        // ayuda a recorrer el array de mi $categorias_musica
        foreach ($categorias_musica as $genero => $artistas) {
            echo "Musica de $genero :<br>";
            foreach ($artistas as $artista) {
                echo "* $artista <br>";
            }
            echo "<br>";
        }
    } else {
        // Verificar si la categoría existe
        if (array_key_exists($nombreMusica, $categorias_musica)) {
            echo "Musica de $nombreMusica:<br>";
            //ayuda a rrecorrer el array de $categorias_musica
            foreach ($categorias_musica[$nombreMusica] as $artista) {
                echo "* $artista <br>";
            }
        } else {
            // caso de que no exista la categoria
            echo "no existe la categoria men.";
        }
    }
});

/*
Route::get('categorias/pop', function () {
    echo 'musica de pop' ;
});

Route::get('categorias/rock', function () {
    echo 'musica de rock' ;
});

Route::get('categorias/regueaton', function () {
    echo 'musica de reguaton' ;
});

Route::get('categorias/banda', function () {
    echo 'musica de banda' ;
});
*/

// este metoodo me ayuda para no poner en las demas profijos categoriacs
Route::prefix('categorias')->group(function () {


    Route::prefix('ofertas')->group(function () {
        Route::get('ultimo-mes', function () {
            echo 'ultimo MES para comprar su boleto';
        });

        Route::get('ultima-semana', function () {
            echo 'ultimo SEMANA para comprar su boleto';
        });
    });


    Route::get('top', function () {
        echo 'Cantante mas escuchado: ' . 'CANTANTE MAS ESCUCHADO';
    });

    Route::get('conciertos', function () {
        echo 'conciertos de la banda: ' . 'LAS BANDAS';
    });

    // Linea original
    // Route::get('categorias/{NombreMusica}', function (String $NombreMusica) {
    Route::get('{NombreMusica}', function (String $NombreMusica) {
        echo 'Eleccion de la musica es: ' . $NombreMusica;
    });
});

// una funcion que necesita una variable para el parametro
Route::get('eleccion/top', function (?string $TiposMusicales = null) {
    $TiposMus = [
        'pop' => [
            'Aleck Sinteck',
            'Jaunes',
            'Miranda',
            'Paulina Rubio',
        ],
        'rock' => [
            'Maná',
            'Cafe Tacuba',
            'Elefante',
        ],
        'regueaton' => [
            'Daddy Yanke',
            'Wisin Yandel',
            'Bad Bunny',
            'Ozuna',
        ],
        'banda' => [
            'El Recodo',
            'Julion Alvarez',
            'Calibre 50',
            'Tigres del Norte'
        ],
    ];
    // el usuario no selecciona un tipo de musica
    if (is_null($TiposMusicales)) {
        // Mostrar todos los géneros y sus artistas
        foreach ($TiposMus as $NombreMusicaArray) {
            foreach ($NombreMusicaArray as $Musica) {
                echo $Musica . '<br>';
            }
        }
    } else {
        // Verificar si el tipo musical existe
        if (isset($TiposMus[$TiposMusicales])) {
            foreach ($TiposMus[$TiposMusicales] as $Musica) {
                echo $Musica . '<br>';
            }
        } else {
            echo "Este género musical no está registrado.";
        }
    }
});

// Nos de vuelve los productos
Route::get('seleccion/json', function () {
    $TiposMus = [
        'pop' => [
            'Aleck Sinteck',
            'Jaunes',
            'Miranda',
            'Paulina Rubio',
        ],
        'rock' => [
            'Maná',
            'Cafe Tacuba',
            'Elefante',
        ],
        'regueaton' => [
            'Daddy Yanke',
            'Wisin Yandel',
            'Bad Bunny',
            'Ozuna',
        ],
        'banda' => [
            'El Recodo',
            'Julion Alvarez',
            'Calibre 50',
            'Tigres del Norte'
        ],
    ];

    $seleccion = [];

    foreach($TiposMus as $TiposMusArrary){
        foreach($TiposMusArrary as $selecciones){
            $seleccion[] = $selecciones;
        }
    }

    return new \Illuminate\Http\JsonResponse($seleccion);
    // return \Illuminate\Support\Facades\Response::json($seleccion);

});
