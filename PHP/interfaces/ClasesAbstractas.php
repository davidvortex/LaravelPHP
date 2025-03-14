<?php

abstract class ClaseAbstractas
{
    abstract protected function getValor();
    abstract public function ValorPrefijo($Prefijo);

    public function imprimir()
    {
        echo $this->getValor() . "\n";
    }

}

class ClasesConcretas extends ClaseAbstractas
{
    protected $Valor;

    protected function getValor()
    {
        return "ClasesConcretas: ";
    }

    public function ValorPrefijo($Prefijo)
    {
        return $Prefijo . "Clase Conreta";
    }
} 

$clase1 = new ClasesConcretas();
$clase1->imprimir();
echo $clase1->ValorPrefijo("Prefijo: ");


