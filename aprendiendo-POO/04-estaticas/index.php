<?php

require_once 'configuracion.php';

Configuracion::setColor('Azul');
Configuracion::setEntorno('Localhost');
Configuracion::setNewletter(true);

echo Configuracion::getColor() . '<br/>';
echo Configuracion::getEntorno() . '<br/>';
echo Configuracion::getNewletter() . '<br/>';

