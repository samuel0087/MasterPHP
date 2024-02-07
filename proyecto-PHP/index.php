<?php
session_start();
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'helpers/Utils.php';
require_once 'views/lyout/header.php';
require_once 'views/lyout/sidebar.php';

function errorIndex(){
    $error_index = new ErrorController();
    $error_index->index();
}

if(isset($_GET['controller'])){
    $nombreClase = $_GET['controller'].'Controller';
}
else{
    if(!isset($_GET['controller']) && !isset($_GET['action'])){
        $nombreClase = controller_default;
    }
    else{
        errorIndex();
        exit();
    }
}

if(class_exists($nombreClase)){
    
        $controller = new $nombreClase();
    
        if(isset($_GET['action']) && method_exists($nombreClase, $_GET['action'])){
            $metodo = $_GET['action'];
            $controller->$metodo();
        }
        else{
            if(!isset($_GET['controller']) && !isset($_GET['action'])){
                $metodo = action_default;
                $controller->$metodo();
            }
            else{
                errorIndex();
                exit();
            }
    }

}

require_once 'views/lyout/footer.php';