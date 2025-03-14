<?php

class Casa {
    public $color, $tamaño, $seguridad;
    final public function bienvenido(){
        echo "Bienvenido a la casa";
    }
}

class Departamento extends Casa {
    // public $pisos, $habitaciones, $baños;
    
    public function bienvenido(){
        echo "Bienvenido al departamento";
    }

}

$departamento = new Departamento;
$departamento->bienvenido();
echo "<br>";

