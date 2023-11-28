<?php

//archivos
//abrir archivos
$archivo = fopen('texto.txt', 'a+'); // a+ para leer y escribir

//escribir
$texto = '<br/> Mi nombre es Samuel Medina<br/>';
fwrite($archivo, $texto);

//leer contenido
rewind($archivo); // ubica el puntero al inicio del archivo
$contenido = "";

while(!feof($archivo)){     //feof() -> devuelve true si el puntero se encuentra al final del archivo
    $contenido .= fgets($archivo) . '<br/>';
}

echo $contenido;

//cerrar el archivo
fclose($archivo);


//copiar archivo
//copy('texto.txt', 'texto_copia.txt') or die('Error al copiar');

//renombrar
//rename('texto_copia.txt', 'ultra_copia.dat');

//eliminar
//unlink('ultra_copia.dat');

//file_exists() // para comprobar si el archivo existe