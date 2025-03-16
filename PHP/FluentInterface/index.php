<?php

class Personas {
    public $nombre, $apellido1, $apellido2, $dni;

    public function setNombre($nombre) {
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellido($apellido1, $apellido2) {
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        return $this;
    }

    public function setDni($dni) {
        $this->dni = $dni;
        return $this;
    }

    public function ImprimirDatos() {
        echo "Nombre: $this->nombre <br>";
        echo "Apellidos: $this->apellido1 $this->apellido2 <br>";
        echo "DNI: $this->dni <br>";
    }
}

$persona = new Personas();
$persona->setNombre("Juan")
        ->setApellido("Perez", "Jimenez")
        ->setDni("12345678")
        ->ImprimirDatos();