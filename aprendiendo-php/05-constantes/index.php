<?php

/* 
Constantes:
 * es un espacio de memoria en donde se asigna un dato en el momento en el que se crea y este no puede
 * ser modificado en ningun momento.
 */

//declaracion de una constante.
define('NOMBRE', 'Samuel Tomas Medina');
define('PROYECTO', 'Drone Jass');

echo '<h1>' . NOMBRE . '</h1>';  //al usar una constante, no se debe usar el signo $.
echo '<h1>' . PROYECTO . '</h1>';

// CONSTANTES PREDEFINIDAS

echo '<h2>'.PHP_VERSION.'</h2>';            //VERSION DE PHP
echo '<h2>'.PHP_OS.'</h2>';                 //VERSION DEL SISTEMA OPERATIVO
echo '<h2>'.PHP_EXTENSION_DIR.'</h2>';      //extenciones del servidor
echo '<h2>'.__LINE__.'</h2>';               //LINEA DONDE ESTA ESTA CONSTANTE
echo '<h2>'.__FILE__.'</h2>';               //RUTA DEL ARCHIVO

function HolaMundo()
{
    echo '<h2>'.__FUNCTION__.'</h2>';      //FUNCION DONDE ESTA EJECUTANDOCE ESTA FUNCION
}


HolaMundo();