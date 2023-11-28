<?php

/* 
Crear una sesion que aumente o disminuya su valor en uno 
 * en funcion en que si el parametro get (variable counter) esta en uno o en cero
 */

session_start();

if(!isset($_SESSION['num'])){
    $_SESSION['num'] = 0;
}

if(isset($_GET['numero']) && ($_GET['numero'] == 1 || $_GET['numero'] == 0 )){
    if($_GET['numero'] != 0){
        $_SESSION['num']++;
    }
    else{
        $_SESSION['num']--;
    }
}


echo '<h1>Valor actual: ' . $_SESSION['num'] . '</h1>';

if(isset($_GET['error']) && $_GET['error'] == 'incorrecto'){
    echo '<strong style="color:red">Ingrese un 1 o un 0</strong>';
}
?>

<a href="ejercicio1.php?numero=0">Descontar</a>
<a href="ejercicio1.php?numero=1">Aumentar</a>

