<?php

/* 
hacer un programa para ingresar dos numero y mostrar todos los numeros entre ellos
 */
if(isset($_GET['num1']) && isset($_GET['num2']))
{
    $max = (int)$_GET['num1'];
    $min = (int)$_GET['num2'];
    
    //si el primer numero es menor, cambiamos de orden las variables
    if($max < $min)
    {
        $aux = $max;
        $max = $mmin;
        $min = $max;
    }
    
    //mostramos todos los que estan entre ellos.
    for($i = $min; $i <= $max; $i++)
    {
        echo '<h4>' . $i .'</h4>';
    }    
    
}
else
{
    echo '<h1>Por favor ingrese los datos correctamente</h1>';
}

