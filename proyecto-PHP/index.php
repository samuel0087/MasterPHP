<?php
require_once 'autoload.php';
require_once 'views/lyout/header.php';
require_once 'views/lyout/sidebar.php';

if(isset($_GET['controller'])){
    $nombreClase = $_GET['controller'].'Controller';
    
    if(class_exists($nombreClase)){
    
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

}

require_once 'views/lyout/footer.php';