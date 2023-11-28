<?php
$peliculas = Array('Batman', 'Mujer maravilla', 'Black Adam', 'Capitan america');

//ordenar de menor a mayor.
sort($peliculas);

//ordenar a la inversa
//arsort($peliculas);

//añadir elementos a un array
$peliculas[] = 'Iron Man';
array_push($peliculas, 'Acuaman');

//Eliminar elemento de un array
array_pop($peliculas); // elimina el ultimo
unset($peliculas[3]);

var_dump($peliculas);

//aleatorio
$indice = array_rand($peliculas);
var_dump($peliculas[$indice]);

// reversa
var_dump(array_reverse($peliculas));

//Buscar dentro de un array
$result = array_search('Black Adam', $peliculas);
var_dump($result);

//contar cantidad de elementos
echo count($peliculas); // o sizeof() tambien funciona

