<?php
    // Definición de variables con nombres descriptivos
    $Nombre = "DAVID JESUS CORONADO REYES <br>";
    $nombre = "david jesus coronado reyes <br>";

    // Definir variables numéricas
    $numero = 12; // Entero
    $numeroFloat = 123.123; // Número decimal (float)

    // Mostrar el número entero con concatenación para mejor legibilidad
    echo "El número entero es: " . $numero . "<br>";

    // Mostrar el número flotante (decimal)
    echo "Este tipo de número es flotante: " . $numeroFloat . "<br>";

    // Definir una variable de tipo string para un saludo
    $greeting = "hola mundo <br>";

    // Mostrar el saludo
    echo "El saludo es: " . $greeting;

    // Mostrar el nombre en minúsculas
    echo $nombre;

    // Mostrar el nombre en mayúsculas
    echo $Nombre;

    // Escapar caracteres especiales
    $datos = "hola 'David' tu tienes una edad: \"24\" <br>";  // Usamos las comillas dobles escapadas dentro de la cadena

    // Mostrar los datos con el valor escapado
    echo $datos;

    // variables asigandas
    $variable = 34;
    $variable_negativo = -$variable;

    // operador unario
    echo $variable_negativo . "<br>";

    //modulo
    $num1= 5;
    $num2= 10;
    $num3= 5;

    echo $num1 == $num3;
    echo "<br>";
    var_dump($num1 == $num3); // valores iguales
    echo "<br>";
    var_dump($num1 != $num3); // valores si son diferentes
    echo "<br>";
    var_dump($num1 && $num3); // valores y
    echo "<br>";

    // operadores de asignacion combinada
    $a1 = 5;
    echo "mi primer numero es igual a: " . $a1 . "<br>";
    $a2 = ++$a1;
    echo "mi primer numero es igual a 5 pero se le aumenta: " . $a2 . "<br>";

    declare(strict_type=1);
    function SumarEntrero($entero1, $entero2){
        return $entero1 + $entero2; 
    }

    $resultado2 = SumarEntrero(4, 5.3);

    echo "El resusltado es: " . $resultado2;
    echo "<br>";

    // declare(strict_types = 1);

    function summarEnteros(int $numeroentero1 , int $numeroentero2): int | float
    {
        return ($numeroentero1 + $numeroentero2)/2;
    }

    $resultado3 = SumarEntrero(4,6);

    echo "la suma es:". $resultado3 ;

    
