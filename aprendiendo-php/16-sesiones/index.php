<?php

/* 
 Sesion: Almacena y persiste datos del usuario mientras navega en el sitio web 
 hasta que cierra sesion o cierre el navegador
 */

//Iniciar la sesion
session_start();

$variable_normal = "Soy una cadena de texto";

$_SESSION['var'] = 'Soy una variable se sesion';

//variable normal
echo '<h1>' . $variable_normal . '</h1>';

//sesion
echo '<h1>' . $_SESSION['var'] . '</h1>';

?>

<a href="pagina1.php">Pagina 1</a>
<a href="logout.php">Cerrar sesion</a>
