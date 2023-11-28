<?php

session_start();

if(isset($_SESSION['var'])){
    session_destroy();
}

echo '<h2>Sesion cerrada</h2>';
?>

<a href="index.php">Iniciar sesion</a>

