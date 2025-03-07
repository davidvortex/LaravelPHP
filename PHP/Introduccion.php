<?php

    $fecha  = date("d/m/Y");
    echo "La Fecha de hoy es: ". $fecha;
    $nombre = 'David Jesus Coronado Reyes';


    echo 'tu nombre es: '.$nombre.', con la fecha de hoy: '.$fecha;
    // diferentes tipos de imprimir 
    echo "tu nombre es: $nombre, con la fecha de hoy: $fecha ";
    
    define('CURSO', 'PHP ');
    echo CURSO;

    define('Animales',[
        'perro',
        'gato',
        'vaca',
            'toro',
    ]);

    echo Animales[2];

    $mi_cadena = 'david jesus';
    echo strlen($mi_cadena);
    echo "<br>";
    echo mb_strlen($mi_cadena);
    echo "<br>";
    echo strpos($mi_cadena, "e");
    echo "<br>";
    echo str_contains($mi_cadena, 'jesus') ? 'Si si encuentra: ':'no se encuenta';
    echo "<br>";
    echo str_starts_with($mi_cadena, 'jesus') ? 'Si si encuentra: ':'no se encuenta';
    echo "<br>";
    $cadenas1 = 'Prueba';
    $cadenas2 = 'prueba';

    if(strcmp($cadenas1, $cadenas2) == 0){
        echo "las dos canedas son iguales";
    }else{
        echo "las dos canedas son difernetes";
    }

    echo substr($cadenas1, 1);
    echo substr($cadenas1, 1,3);
    echo substr($cadenas1, -2);
    $cadensa3 = "hoola mundo";
    echo str_replace("mundo","eee", $cadenas1 );

