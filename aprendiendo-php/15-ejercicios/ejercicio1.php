<?php

/* 
 Hacer un programa en PHP que tenga un array con 8 numeros enteros y que haga lo siguiente:
 * Recorrerlo y Mostrarlo
 * ordenaarlo y mostrarlo
 * mostrar su logitud
 * buscar algun elemento
 */

function MostrarVector($numeros){
    foreach($numeros as $numero){
    echo $numero . '<br/>';
    }
}

//vector
$numeros = Array(5,2,6,3,7,2,1,9);

echo '<h1>Vector original</h1>';
MostrarVector($numeros);

echo '<h1>Vector ordenado</h1>';
sort($numeros);
MostrarVector($numeros);

echo 'cantidad de elementos del array: ' .count($numeros);
echo '<br/>';

echo 'Buscar el numero 7 <br/>';
$result = (int)array_search(7, $numeros)+1;
var_dump($result);
echo 'posicion: '. $result;


