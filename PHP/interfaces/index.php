<?php

interface mi_plantilla {
    public function setVariable($nombre);
    public function getHtml();
}

interface mi_plantilla2 {
    public function prueba2();
}

class mi_plantilla3 implements mi_plantilla, mi_plantilla2 {
    public function setVariable($nombre) {
        echo "Variable establecida: $nombre";
    }
    
    public function getHtml() {
        return "<html></html>";
    }

    public function prueba2() {
        echo "Prueba 2";
    }

    public function prueba3() {
        echo "Prueba 3";
    }
}

class mi_plantilla4 extends mi_plantilla3 {
    public function prueba1() {
        echo 'prueba1';
    }

    public function prueba4() {
        echo 'prueba4';
    }

    public function prueba5() {
        echo 'prueba5';
    }
}
