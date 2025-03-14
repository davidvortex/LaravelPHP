<?php

class Persona {
    public $nombre;
    
    public function saludar() {
        echo "Hola";
    }

    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() {
        return ucwords($this->nombre);
    }
}

trait Estoy {
    public function EstoyT() {
        echo " Estoy ";
    }
}


trait Trabajando {
    public function trabajar() {
        echo "trabajando";
    }
}

trait Latinoamericano {
    use Estoy, Trabajando; 

    public function saludarLatin() {
        echo "Hola";
    }
}

trait Europeo {
    public function saludarEuro() {
        echo "Ostia";
    }
}

class MEX extends Persona {
    use Latinoamericano; 

    public function saludar() {
        echo "Hola, ¿cómo estás?";
    }
}

class ESP extends Persona {
    use Estoy, Trabajando{
        // Estoy::EstoyT  Trabajando;
    }

}

$mexicano = new MEX;
$mexicano->saludar(); // Hola, ¿cómo estás?
echo "<br>";
$mexicano->saludarLatin(); // Hola
echo "<br>";
$mexicano->EstoyT(); // Estoy 
$mexicano->trabajar(); //mtrabajando