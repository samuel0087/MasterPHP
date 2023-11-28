<?php
    $nombre =$_POST['nombre'];
    $snombre = $_POST['snombre'];
    $apellido = $_POST['apellido'];

    echo '<h1>'.$nombre.'<h1>';
    echo '<h1>'.$snombre.'<h1>';
    echo '<h1>'.$apellido.'<h1>';

    var_dump($_POST);

?>