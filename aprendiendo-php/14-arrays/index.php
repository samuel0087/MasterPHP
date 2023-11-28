<?php

//Arraay / vectores
/*
 * Un array es un conjunto de datos bajo un unico noiombre.
 * para acceder a un valor solo necesitamos saber su indece(numerico o alfanumerico.
 * 
 */

$peliculas = Array('Batman', 'Mujer maravilla', 'Black Adam', 'Capitan america');
$series = ['The flash', 'Daredevil', 'The punisher', 'She Hulk'];

var_dump($series);
var_dump($peliculas);

//Array asociativo
$personas = Array(
    'nombre' => 'Samuel Tomas',
    'apellidos' => 'Medina',
    'edad' => date('Y')-1999
);

//Recorrer un array con for
echo '<h1>Lista de peliculas</h1>';

echo '<ul>';

for($i = 0; $i < count($peliculas); $i++){
    echo '<li>' . $peliculas[$i] . '</li>';
}

echo '</ul>';

//Recorrer con foreach

echo '<h1>Listado de series</h1>';

echo '<ul>';

foreach($series as $serie){
    echo '<li>' . $serie . '</li>';
}

echo '</ul>';

var_dump($personas);

//Array multidimencionales
$contactos = Array(
    array(
        'nombre' => 'Samuel',
        'email' => 'Samuel@sam.com'
    ),
    array(
        'nombre' => 'Nahuel',
        'email' => 'nahul@snahu.com'
    ),
    array(
        'nombre' => 'Dario',
        'email' => 'Dario@dar.com'
    )
);

foreach($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
}

