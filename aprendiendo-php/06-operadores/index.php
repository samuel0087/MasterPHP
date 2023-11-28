<?php

    //OPERADORES ARITMETICOS

    $numero1  = 22;
    $numero2 = 100;

    echo 'Suma: '.($numero1 + $numero2).'<br/>';
    echo 'Resta: '.($numero1 - $numero2).'<br/>';
    echo 'Division: '.($numero1 / $numero2).'<br/>';
    echo 'Multiplicacion: '.($numero1 * $numero2).'<br/>';
    echo 'Resto: '.($numero1 % $numero2).'<br/>';



    $year = 2019;

     //Operadores de incremento

    // $year = $year + 1;
    $year++;

    // OPERADORES DE DECREMENTO

    // $year = $year - 1;
    $year--;

    //OPERADORES DE PRE-INCREMENTO
    //$year = 1 + $year;
    ++$year;

    //OPERADORES DE PRE-DECREMENTO
    //$year = 1 - $year;
    --$year;

    echo '<h1>'.$year.'</h1>';



?>