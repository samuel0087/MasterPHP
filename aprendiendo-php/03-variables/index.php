<?php

/* 
 ¿Que es una variable?
 * Una variable es un espacio de memoria (de la memoria RAM) con la cual estaremos trabajando mientras el programa este funcionando.
 * Puedo guardar cualquier tipo de dato dentro de las variables (int. bool, float, char, string)
 
 * Declaracion: declaramos las variables con un nombre y con el signo $ delante (ej: $EstoEsUnaVariable) para reservar ese espacio de memoria para que posteriormente
 * podamos usarlo.
 * PHP al ser un lenguaje debilmente tipado, no es necesario indicar el tipo de dato que se usara en cada variable, haciendo que estas, puedan guardar cualquier tipo de datos
 * sin importar el tipo de dato que llevan dentro.
 * 
 * Caracteristicas:
 * El nombre de una variable no puede comenzar con numeros ni contener caracteres especiales, tampoco la letra ñ (ej: $2variable, $año, $ida/hora).
 * se permiten '_' en los nobres de las variables, pero no '-'.
*/

 $mi_primera_variable = "Hola, esta es mi primera variable con PHP";
 
 echo '<h1>'.$mi_primera_variable.'</h1>';
 

