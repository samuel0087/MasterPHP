<?php

/* 
 Para mostrar el valor de mis cookies  tengo que usar $_COOKIE, una variable global, un array asociativo
 */

if(isset($_COOKIE['Micookie'])){
    echo '<h1>' . $_COOKIE['Micookie'] . '</h1>';
}
else{
    echo '<h1>No existe Micookie</h1>';
}

if(isset($_COOKIE['unyear'])){
    echo '<h1>' . $_COOKIE['unyear'] . '</h1>';
}
else{
    echo '<h1>No existe Unyear</h1>';
}
?>

<a href="index.php">Inicio</a>
<a href="delete_cookies.php">Borrar cookies</a>
