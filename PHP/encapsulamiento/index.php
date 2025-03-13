<?php

class miclase{

    public $variablepublica = "Soy una variable publica";
    protected $variableprotegida = "Soy una variable protegida";
    private $variableprivada = "Soy una variable privada";
    // solo en esta clase se puede acceder a la variable privada

    function printMensaje(){
        echo $this->variablepublica . "<br>";
        echo $this->variableprotegida . "<br>";
        echo $this->variableprivada . "<br>";
    }

    public function getVariableProtegida() {
        return $this->variableprotegida;
    }

    public function getVariablePrivada() {
        return $this->variableprivada;
    }
}

$miObjeto = new miclase;
$miObjetoPublico = new miclase;
$miObjetoProtegido = new miclase;
$miObjetoPrivado = new miclase;

echo $miObjetoPublico -> variablepublica . "<br>";
echo $miObjetoProtegido -> getVariableProtegida() . "<br>";
echo $miObjetoPrivado -> getVariablePrivada() . "<br>";

echo "<br>"."<br>";

$miObjeto -> printMensaje();

class miclase2 extends miclase{

    public $public2 = "Soy una variable publica de la clase 2";
    protected $protected2 = "Soy una variable protegida de la clase 2";
    private $private2 = "Soy una variable privada de la clase 2";

    function printMensaje2(){
        echo $this->public2 . "<br>";
        echo $this->protected2 . "<br>";
        echo $this->private2 . "<br>";   // No se puede acceder a la variable privada
        //solo puede ser accedida desde la clase que la declaro
    }

}

echo "<br>"."<br>";

$miObjeto2 = new miclase2;
$miObjeto2 -> printMensaje2();






