<?php
    
interface mi_plantilla {
    public function setVariable($nombre);
    public function getHtml();
}

/*
class miplantilla implements mi_plantilla
{
    public function setVariable($nombre){

    }
    public function getHtml(){

    }
}
*/

interface mi_plantilla2 
{
    public function prueba2();
}

class mi_plantilla3 extends mi_plantilla, mi_plantilla2 {
    public function prueba3();
    
}

class mi_plantilla4 implements mi_plantilla3 {
    public function prueba1(){
        echo "prueba1";
    }
}