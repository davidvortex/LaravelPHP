<?php

class Persona {
    public $nombre, $apellido1, $apellido2, $edad;    

    public function __construct($nombre, $apellido, $edad) {
        $this->nombre = strtolower($nombre);
        $this->apellido1 = strtolower($apellido);
        $this->edad = $edad;
    }

    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() {
        return ucwords($this->nombre);
    }
    
    public function setApellido($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2; 
    }
    
    public function getApellido(){
        return $this->apellido1 ." ". $this->apellido2;
    }

}

class mexicano extends Persona {
   public departamento, cuidad, estado;
}

class estadounidense extends Persona {
    public comunidad, region;
}