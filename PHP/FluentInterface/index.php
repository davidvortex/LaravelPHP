<?php

class Personas {
    // esto era una manera de hacerlo despues de la version 5 de PHP
    // ya esto no es necesario, se puede hacer directamente en el constructor
    // public $nombre, $apellido1, $apellido2, $dni;

    public function __construct(public $nombre, public $apellidoPat, public $apellidoMat, public $dni) {
        /*
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->dni = $dni;
        */

    }


    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellido($apellidoPat, $apellidoMat) {
        $this->apellidoPat = $apellidoPat;
        $this->apellidoMat = $apellidoMat;
        return $this;
    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function ImprimirDatos() {
        echo "Nombre: $this->nombre <br>";
        echo "Apellidos paterno y materno: $this->apellidoMat $this->apellidoPat <br>";
        echo "DNI: $this->dni <br>";
    }
}

$persona = new Personas(nombre:"Pedro", apellidoPat: "Garcia", apellidoMat:"Lopez", dni:"87654321");
$persona->ImprimirDatos();

/*
$persona->setNombre("Juan")
        ->setApellido("Perez", "Jimenez")
        ->setDni("12345678")
        ->ImprimirDatos();
*/


