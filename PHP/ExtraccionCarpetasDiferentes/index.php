<?php

use A\Persona1.php;
use B\Persona2.php;

require_once('A/Persona1.php');
require_once('B/Persona2.php');

$people1 = new Persona1;
$people1->saludar1();

$people1 = new Persona2;
$people1->saludar2();