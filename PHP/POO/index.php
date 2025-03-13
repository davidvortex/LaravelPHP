<?php

require_once 'POO_php.php';

// Un objeto es una instancia de una clase
$persona1 = new Persona("David", "Coronado", 20);

/*
$persona1->setNombre("David"); 
$persona1->setApellido("Coronado");
$persona1->edad = 20;
*/

$persona2 = new Persona("Jorge", "Perez", 22);
/*
$persona2->setNombre("Jorge");
$persona2->setApellido("Perez");
$persona2->edad = 22;
*/

echo "El nombre de la persona 1 es: " . $persona1->getNombre() . ". Su edad que tiene: " . $persona1->edad;
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre() . ". Su Apellido es: " . $persona2->getApellido();
echo "<br>";

echo "<br><br><br>";
echo "<center>Hecho por David Jesus Coronado Reyes </center><br>";

$MEXicano = new mexicano;
$MEXicano->setNombre("Ruben Jose");

$USA = new estadounidense;
$USA->setNombre("John Dose");