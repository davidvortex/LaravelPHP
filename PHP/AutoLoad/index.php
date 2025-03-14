<?php

use Contollers\CursoControllers;
use Models\Curso;

require_once('Models/Curso.php');
require_once('Contollers/CursoControllers.php');

spl_autoload_register(function($clase){
    // echo str_replace('\\', '/', $clase) . '.php';
    require_once str_replace('\\', '/', $clase) . '.php';
});

$curso = new Curso;
$curso->Bienvenido();
echo "<br>";
$curso = new CursoControllers;
$curso->BienvenidoController();