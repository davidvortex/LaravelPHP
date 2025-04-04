<?php

class Persona {
    public $nombre, $apellido1, $apellido2, $edad;    

    public function __construct($nombre, $apellido1, $apellido2, $edad) {
        $this->nombre = strtolower($nombre);
        $this->apellido1 = strtolower($apellido1);
        $this->apellido2 = strtolower($apellido2); 
        $this->edad = $edad;
    }

    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() {
        return ucwords($this->nombre);
    }
    
    public function setApellidos($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2; 
    }
    
    public function getApellidos(){
        return $this->apellido1 . " " . $this->apellido2;
    }
}

class Mexicano extends Persona {
    public $departamento, $ciudad, $estado;

    public function setApellidos($apellido1, $apellido2) {
        parent::setApellidos($apellido1, $apellido2);
        echo "Los apellidos se asignarion correctamente<br>";

    }
}

class Estadounidense extends Persona {
    public $comunidad, $region;

    public function setApellidos($apellido1, $apellido2) {
        $this->apellido1 = $apellido2;
        $this->apellido2 = $apellido1; 
    }
}


