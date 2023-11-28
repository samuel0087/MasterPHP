<?php

/* 
 Desarrollar un programa donde se imprima por pantalla los cuadrados de un numerode los primeros numeros naturales.
 * pd: Utilizar un bucle while
 */

$cont = 1;

while($cont <= 40)
{
    $cuadrado = $cont * $cont;
    
    echo '<h3> El cuadrado de ' . $cont . ' es ' . $cuadrado . '<h3>';
    
    $cont ++;
}

