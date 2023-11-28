<?php

/* 
 Una funcion es un conjunto de instrucciones agrupadas por un nombre
 * en concreto y pueden reutilizarse solamente invocando a la funcion tantas 
 * veces como queramos.
 * 
 * function nombreDeMiFuncion($parametro)
 * {
 *      //Bloque de instrucciones
 * }
 * 
 * Las funciones siempre deben retornar algo al programa principal.
 */

//funcion de tabla de multiplicar
function tabla($numero, $negrita = false)
{
    $cadena = '';
    $cadena .= '<h1>Tabla de multiplicar del numero '. $numero .'</h1>';
    
     if($negrita)
    {
       $cadena .= '<h1>';
    }
        
    for($i = 1; $i <= 10; $i++)
    {
        $operacion = $i * $numero;
           
        $cadena .= "$numero X $i = $operacion <br/>";
    }
    
    if($negrita)
    {
        $cadena .= '</h1>';
    }
    
    $cadena .= '<hr/>';
    
    return $cadena;
}

function devuelveNombre()
{
    $nombre = 'Samuel Medina';
    return $nombre;
}

if(isset($_GET['numero'])){
    
  $num = (int)$_GET['numero'];
  
  if(isset($_GET['negrita'])){
      echo tabla($num, true);
  }
  else{
      echo tabla($num);
  }
     
  echo devuelveNombre();
  
}
else
{
    tabla(0);
}

