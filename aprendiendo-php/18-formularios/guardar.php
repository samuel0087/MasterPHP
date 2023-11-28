<?php

if(isset($_GET['nombre']) && isset($_GET['descripcion'])){
    if(!empty($_GET['nombre'])){
        echo '<h1>' . $_GET['nombre'] . '</h1>';
        echo '<h1>' . $_GET['descripcion'] . '</h1>';
    }
    else{
     echo '<h1>Incognito</h1>';
    }
    
}
else{
     echo '<h1>Incognito</h1>';
}