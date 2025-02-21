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


?>