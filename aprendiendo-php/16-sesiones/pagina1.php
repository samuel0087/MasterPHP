<?php

session_start();

echo 'Pagina 1 en la sesion ' . $_SESSION['var'];

?>

<a href="index.php">Inicio</a>
<a href="logout.php">Cerrar sesion</a>

