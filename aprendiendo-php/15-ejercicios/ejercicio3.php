<?php

/* 
 *Ejercicio 3. Programa que compruebe si una variable esta vacia y si lo esta,
 * rellenarla con texto en minusculas y mostrarlo en mayscula y negrita.
 */

$variable = '' ;

if(empty(trim($variable))){
    $variable = 'texto de relleno';
    echo strtoupper($variable);
}
else{
    if(isset($variable)){
       echo strtoupper($variable);
    }
}
