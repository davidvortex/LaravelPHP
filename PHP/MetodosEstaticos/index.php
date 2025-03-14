<?php

class Persona {

    public static $nombre = "Juan";

    public static function saludo() {
        echo "Hola";
    }

    public function saludar() {
        // echo "Hola, mi nombre es " . $this->nombre; // No se puede acceder a una propiedad estatica desde un metodo de instancia
        echo "Hola, mi nombre es " . self::$nombre;
    }
}

class Mexicano extends Persona {

    public static function saludemos() {
        echo "Hola, desde mexico me llamo: ". parent::$nombre;
    }
}


// Persona::saludo();
// echo Persona::$nombre;
$persona = new Persona();
$persona->saludar();
echo "<br>";
$mexico = new Mexicano();
$mexico->saludemos();



