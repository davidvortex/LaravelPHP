<?php

use A\Persona1;
use B\Persona2;


require_once('A/Persona1.php');
require_once('B/Persona2.php');

$people1 = new Persona1;
$people1->saludar1();

$people1 = new Persona2;
$people1->saludar2();