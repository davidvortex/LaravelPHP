<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::prefix('api')->group(base_path('routes/api.php'));




// Pagina principal
Route::get('/', function () {
    return view('welcome');
});

// categorias de musica
Route::get('categorias', function (\Illuminate\Http\Request $request) {
    $categorias_musica = [
        'pop' => [  'Aleck Sinteck',
                    'Jaunes',
                    'Miranda',
                    'Paulina Rubio'],
        'rock' => [ 'Maná',
                    'Cafe Tacuba',
                    'Elefante'],
        'reggaeton' => ['Daddy Yankee',
                        'Wisin Yandel',
                        'Bad Bunny',
                        'Ozuna'],
        'banda' => ['El Recodo',
                    'Julion Alvarez',
                    'Calibre 50',
                    'Tigres del Norte'],
    ];

    // Obtener el parámetro de la URL
    $nombreMusica = $request->input('nombremusica');

    // Si no se solicita un género, muestra todos
    if (is_null($nombreMusica)) {
        foreach ($categorias_musica as $genero => $artistas) {
            echo "Música de $genero:<br>";
            foreach ($artistas as $artista) {
                echo "* $artista <br>";
            }
            echo "<br>";
        }
    } else {
        if (array_key_exists($nombreMusica, $categorias_musica)) {
            echo "Música de $nombreMusica:<br>";
            foreach ($categorias_musica[$nombreMusica] as $artista) {
                echo "* $artista <br>";
            }
        } else {
            echo "No existe la categoría.";
        }
    }
});

// grupo de rutas con prefijo `categorias`
Route::prefix('categorias')->group(function () {
    Route::prefix('ofertas')->group(function () {
        Route::get('ultimo-mes', function () {
            echo 'Último mes para comprar su boleto';
        });

        Route::get('ultima-semana', function () {
            echo 'Última semana para comprar su boleto';
        });
    });

    Route::get('top', function () {
        echo 'Cantante más escuchado: ' . 'CANTANTE MÁS ESCUCHADO';
    });

    Route::get('conciertos', function () {
        echo 'Conciertos de la banda: ' . 'LAS BANDAS';
    });

    // ruta dinamica
    Route::get('{NombreMusica}', function (String $NombreMusica) {
        echo 'Elección de la música es: ' . $NombreMusica;
    });

    return view('produccion');

});

// ruta `eleccion/top` con parámetro opcional
Route::get('eleccion/top/{TiposMusicales?}', function (?string $TiposMusicales = null) {
    $TiposMus = [
        'pop' => [  'Aleck Sinteck',
                    'Jaunes',
                    'Miranda',
                    'Paulina Rubio'],
        'rock' => [ 'Maná',
                    'Cafe Tacuba',
                    'Elefante'],
        'reggaeton' => ['Daddy Yankee',
                        'Wisin Yandel',
                        'Bad Bunny',
                        'Ozuna'],
        'banda' => ['El Recodo',
                    'Julion Alvarez',
                    'Calibre 50',
                    'Tigres del Norte'],
    ];

    if (is_null($TiposMusicales)) {
        foreach ($TiposMus as $artistas) {
            foreach ($artistas as $Musica) {
                echo $Musica . '<br>';
            }
        }
    } else {
        if (isset($TiposMus[$TiposMusicales])) {
            foreach ($TiposMus[$TiposMusicales] as $Musica) {
                echo $Musica . '<br>';
            }
        } else {
            echo "Este género musical no está registrado.";
        }
    }
});

// devuelve todos los artistas en JSON
Route::get('seleccion/json', function () {
    $TiposMus = [
        'pop' => [  'Aleck Sinteck',
                    'Jaunes',
                    'Miranda',
                    'Paulina Rubio'],
        'rock' => [ 'Maná',
                    'Cafe Tacuba',
                    'Elefante'],
        'reggaeton' => ['Daddy Yankee',
                        'Wisin Yandel',
                        'Bad Bunny',
                        'Ozuna'],
        'banda' => ['El Recodo',
                    'Julion Alvarez',
                    'Calibre 50',
                    'Tigres del Norte'],
    ];

    $seleccion = [];

    foreach ($TiposMus as $genero => $artistas) {
        foreach ($artistas as $artista) {
            $seleccion[] = $artista;
        }
    }

    return response()->json($seleccion);
});

// ruta simple para API
Route::get('api/json', function () {
    echo 'API de productos';
});

// ruta adicional para `/home`
Route::get('/home', function () {
    return view('welcome');
});


