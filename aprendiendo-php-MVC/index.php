<?php

require_once 'autoload.php';

if(isset($_GET['controller'])){
    $nombreClase = $_GET['controller'].'Controller';
}

if(class_exists($_GET['controller'])){
    
    $controller = new $nombreClase();
    
    if($_GET['action'] && method_exists($nombreClase, $_GET['action'])){
        $metodo = $_GET['action'];
        $controller->$metodo();
    }
    else{
        echo "La pagina no existe M";
    }
}
else{
    echo "La pagina no existe";
}