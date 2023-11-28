<?php

    //estructura de desicion IF

    $color = 'azul';
    $year = 2019;


    if($color == 'rojo')
    {
        echo 'El color es rojo';
    }
    else
    {
        echo 'El color NO es rojo';
    }

    echo '<br/>';


    if($year == 2019)
    {
        echo 'Es el año correcto';
    }
    else
    {
        $year = $year - 2019;

        if($year > 0)
        {
            echo 'Estamos en el 2019, te pasaste '.$year.' Años';
        }
        else
        {
            echo 'Estamos en el 2019, te faltan '.-$year.' Años';
        }
    }

    echo '<br/>';


    //switch

    $dia = 3;
    

    switch($dia)
    {
        case 1:
            echo 'Lunes';
            break;
        case 2:
            echo 'Martes';
            break;
        case 3:
            echo 'Miercoles';
            break;
        case 4:
            echo 'Jueves';
            break;
        case 5:
            echo 'Viernes';
            break;
        default:
            echo 'Es fin de semana';
            break;

    }

    // GOTO

    echo '<h1>Instruccion 1<h1/>';
    goto marca;
    
    echo '<h1>Instruccion 2<h1/>';
    echo '<h1>Instruccion 3<h1/>';
    echo '<h1>Instruccion 4<h1/>';
    echo '<h1>Instruccion 5<h1/>';
    echo '<h1>Instruccion 6<h1/>';

    marca:
    echo '<h1>Hola<h1/>';
    echo '<h1>me saltie 5 instrcciones con el goto <h1/>';

    
?>