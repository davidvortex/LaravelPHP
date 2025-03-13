<?php

require_once 'POO_php.php';

// Un objeto es una instancia de una clase
$persona1 = new Persona("David", "Coronado", "Antunez", 20);

/*
$persona1->setNombre("David"); 
$persona1->setApellido("Coronado");
$persona1->edad = 20;
*/

$persona2 = new Persona("Jorge", "Perez", "Olmos", 22);
/*
$persona2->setNombre("Jorge");
$persona2->setApellido("Perez");
$persona2->edad = 22;
*/

echo "El nombre de la persona 1 es: " . $persona1->getNombre() . ". Su Apellido es: " . $persona1->getApellidos() .".  Su edad que tiene: " . $persona1->edad;
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre() . ". Su Apellidos son: " . $persona2->getApellidos() .".  Su edad que tiene: " . $persona2->edad;
echo "<br>";

/*
$MEXicano = new mexicano;
$MEXicano->setNombre("Ruben Jose");
*/

/*
$USA = new estadounidense;
$USA->setNombre("John Dose");
*/

$Estadounidense = new Estadounidense("Carlos", "Hernandez", "Roman", 30);
$Estadounidense->getApellidos("Jesus", "Corangues", "Flores");
echo $Estadounidense->getApellidos();
echo "<br>";

// Prueba del código
$persona1 = new Mexicano("Rodrigo", "Blitz", "López", 30);
$persona1->setApellidos("Ramírez", "Gómez");
echo "Apellidos: " . $persona1->getApellidos() . "<br>";

$perosna2 = new Estadounidense("John", "Gonz", "Smith", 40);
$persona2->setApellidos("Martinez", "Basques");
echo "Apellidos: " . $persona2->getApellidos() . "<br>";































echo "<br><br><br>";
echo "<center>Hecho por David Jesus Coronado Reyes </center><br>";
