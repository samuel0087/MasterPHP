<?php

/* 
 Ejercicio 4: recojer dos numeros por la url (GET) y hacer todas las operaciones basicas de una calculadora 
 * (suna, resta, multiplicacion y division) de esos numeros.
 */

if(isset($_GET['num1']) && isset($_GET['num2']))
{
    $num_uno = (int)$_GET['num1'];
    $num_dos = (int)$_GET['num2'];
    
    echo '<h3>Suma: ' . ($num_uno+$num_dos) . '</h3>';
    echo '<h3>Resta: ' . ($num_uno-$num_dos) . '</h3>';
    echo '<h3>Multiplicacion: ' . ($num_uno * $num_dos) . '</h3>';
    echo '<h3>Division: ' . ($num_uno / $num_dos) . '</h3>';
    
}
else
{
    echo '<h1>Faltan datos, por favor, ingrese los datos correctamente</h1>';
}

