<?php

/* 
 * Escribir un programa en PHP que añada valores a un array mientras qque su longitud sea igual a 120.
 */

$list = Array();

for($i = 0; $i < 120; $i++){
    array_push($list, 'Elemento; ' . ($i+1));
}

var_dump($list);

