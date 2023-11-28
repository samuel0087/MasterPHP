<?php

//debuggear
$name = 'Samuel Tomas Medina';
var_dump($name);

//Fechas
echo datE('d-m-Y');
echo '<br/>';
echo time();

//matematicas
echo '<br/>';
echo 'Raiz cuadrada de 10 :'.sqrt(10);

echo '<br/>';
echo 'Numero aleatorio entre 10 y 40: ' . rand(10, 40);

echo '<br/>';
echo 'Numero pi: ' . pi();

echo '<br/>';
echo 'Redondeo de 8.5682: ' . round(8.5682);

        
// Mas funciones generales
echo '<br/>';
echo gettype($name);

echo '<br/>';

if(is_string($name)){
    echo 'La variable nombre es un string';
    echo '<br/>';
}

if(!is_float($name)){
    echo 'La variable nombre No es un float';
    echo '<br/>';
}

if(isset($name)){
    echo 'La variable existe';
    echo '<br/>';
}
else{
    echo 'La variable NO existe';
    echo '<br/>';
}

if(isset($edad)){
    echo 'La variable existe';
    echo '<br/>';
}
else{
    echo 'La variable NO existe';
    echo '<br/>';
}

//Limpiar espacios delante y detras de un string
$frase = '    Hola mundo      ';
var_dump(trim($frase));

//eliminar variables
$edad = 23;
unset($edad);

//Comprobar variables vacias
$text = '        ';

if(empty(trim($text))){
    echo "La variable text No tiene contenido";
}
else{
    echo 'La variable TIENE CONTENIDO';
}

echo '<br/>';

//Contar caracteres de un string
$cadena ="1253558ff";
echo strlen($cadena);

echo '<br/>';

//encontrar caracteres
$frases = "La vida es bella";

echo strpos($frase, 'es');

//remplazar palabras en un string
$frases = str_replace('vida', 'bici', $frases);
echo '<br/>';
echo $frases;






?>