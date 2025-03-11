<?php

$fecha = date('d/m/Y');
echo 'La Fecha de hoy es: ' . $fecha;
$nombre = 'David Jesus Coronado Reyes';
echo '<br>';

echo 'tu nombre es: ' . $nombre . ', con la fecha de hoy: ' . $fecha;
echo '<br>';
// diferentes tipos de imprimir
echo "tu nombre es: $nombre, con la fecha de hoy: $fecha ";
echo '<br>';

define('CURSO', 'PHP ');
echo CURSO;

define('Animales', [
    'perro',
    'gato',
    'vaca',
    'toro',
]);

echo Animales[2];

$mi_cadena = 'david jesus';
echo strlen($mi_cadena);
echo '<br>';
echo mb_strlen($mi_cadena);
echo '<br>';
echo strpos($mi_cadena, 'e');
echo '<br>';
echo str_contains($mi_cadena, 'jesus') ? 'Si si encuentra: ' : 'no se encuenta';
echo '<br>';
echo str_starts_with($mi_cadena, 'jesus') ? 'Si si encuentra: ' : 'no se encuenta';
echo '<br>';
$cadenas1 = 'Prueba';
$cadenas2 = 'prueba';

if (strcmp($cadenas1, $cadenas2) == 0) {
    echo 'las dos canedas son iguales';
} else {
    echo 'las dos canedas son difernetes';
}

echo '<br>';
echo '<br>';
echo substr($cadenas1, 1);
echo '<br>';
echo substr($cadenas1, 1, 3);
echo '<br>';
echo substr($cadenas1, -2);
echo '<br>';
echo strtoupper($cadenas1);
echo '<br>';
echo ucwords($cadenas1);
echo '<br>';
$cadensa3 = 'hoola mundo';
echo str_replace('mundo', 'eee', $cadenas1);
echo '<br>';
echo '<br>';

// Array

$Contenido = [
    [
        'nombre' => 'David Jesus Coronado Reyes',
        'correo' => 'david_2428106@hotmail.com',
        'telefono' => '2342341232',
        'direccion' => [
            'pais' => 'Mexico',
            'estado' => 'Morelos',
        ]
    ],
    [
        'nombre' => 'Coral Tepez Cortez',
        'correo' => 'Coratepez@hotmail.com',
        'telefono' => '8889433855',
    ],
    [
        'nombre' => 'Hector Octavio Mendez Herrera',
        'correo' => 'HectorMert@hotmail.com',
        'telefono' => '3334452356',
    ],
];

echo 'Primeros datos : ' . $Contenido[0]['nombre'];
echo '<br>';
echo 'Primeros datos : ' . $Contenido[0]['direccion']['pais'];
echo '<br>';
echo '<br>';

foreach ($Contenido as $recorrer) {
    echo $recorrer['nombre'] . '<br>';
    echo $recorrer['correo'] . '<br>';
    echo $recorrer['telefono'] . '<br>';
}
echo '<hr>';

$array = [1, 2, 3];

list($A, $B, $C) = $array;
echo $B;
echo '<br>';
$array = range(1, 20);
echo '<br>';
var_dump($array);
echo '<br>';
echo $array[5];
echo '<br>';
echo count($array);
echo '<br>';

$nombres = ['david', 'iris', 'elizabeth'];
// para borrar una parte de la funcino se usar
// unset($nombre[2]);

if (in_array('elizabeth', $nombres)) {
    echo 'el valor buscado se encuentra del array';
} else {
    echo 'el valor buscado no se encuentra';
}

echo '<hr>';

echo '<h2>Formularios</h2>';

// Usando método GET
$nombre2 = isset($_GET['nombre2']) ? $_GET['nombre2'] : 'No proporcionado';
$edad1 = isset($_GET['edad1']) ? $_GET['edad1'] : 'No proporcionado';
$sexo = isset($_GET['sexo']) ? $_GET['sexo'] : 'No especificado';
$roles = isset($_GET['roles']) ? $_GET['roles'] : [];

echo "<p>El nombre del usuario es: $nombre2</p>";
echo "<p>La edad del usuario es: $edad1</p>";
echo "<p>El sexo del usuario es: $sexo</p>";

echo '<p>Los roles del usuario son:</p><ul>';
if (is_array($roles) && !empty($roles)) {
    foreach ($roles as $rol) {
        echo "<li>$rol</li>";
    }
} else {
    echo '<li>No se seleccionó ningún rol</li>';
}
echo '</ul><hr>';

// Usando método POST
$nombre3 = isset($_POST['nombre3']) ? $_POST['nombre3'] : 'No proporcionado';
$edad2 = isset($_POST['edad2']) ? $_POST['edad2'] : 'No proporcionado';
$sexo2 = isset($_POST['sexo2']) ? $_POST['sexo2'] : 'No especificado';
$roles2 = isset($_POST['roles2']) ? $_POST['roles2'] : [];

echo "<p>El nombre del usuario es: $nombre3</p>";
echo "<p>La edad del usuario es: $edad2</p>";
echo "<p>El sexo del usuario es: $sexo2</p>";

echo '<p>Los roles del usuario son:</p><ul>';
if (is_array($roles2) && !empty($roles2)) {
    foreach ($roles2 as $rol2) {
        echo "<li>$rol2</li>";
    }
} else {
    echo '<li>No se seleccionó ningún rol</li>';
}
echo '</ul><hr>';

// Procesar archivo subido
if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === 0) {
    echo '<p>Se ha subido la imagen: ' . $_FILES['imagen']['name'] . '</p>';
    echo '<p>Tamaño: ' . $_FILES['imagen']['size'] . ' bytes</p>';
} else {
    echo '<p>No se ha subido ninguna imagen</p>';
}

echo '<hr>';

// Usando método REQUEST
$nombre4 = isset($_REQUEST['nombre4']) ? $_REQUEST['nombre4'] : 'No proporcionado';
$edad3 = isset($_REQUEST['edad3']) ? $_REQUEST['edad3'] : 'No proporcionado';

echo "<p>El nombre del usuario es: $nombre4</p>";
echo "<p>La edad del usuario es: $edad3</p>";



