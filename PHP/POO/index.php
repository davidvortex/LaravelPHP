<?php

require_once 'POO_php.php';


// un objeto  es una instancia de una clase
$persona1 = new Persona;

$persona1->nombre = "David";
$persona1->apellido = "Coronado";
$persona1->edad = 20;

$persona2 = new Persona;
$persona2->nombre = "Elizabeth";
$persona2->apellido = "Codoy";
$persona2->edad = 22;


echo "El nombre de la persona 1 es: ". $persona1->nombre. ". Su edad que tiene: ". $persona1->edad;
echo "<br>";
echo "El nombre de la persona 2 es: ". $persona2->nombre. ". Su Apellido es: ". $persona2->apellido;
echo "<br>";




echo "<br><br><br>";
echo "<center>Hecho por David Jesus Coronado Reyes </center><br>";