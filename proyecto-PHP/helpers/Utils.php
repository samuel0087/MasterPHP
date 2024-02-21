<?php

class Utils{
    
    public static function deleteSession($name) {
        if(isset($_SESSION[$name])){
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
    }

    public static function isAdmin(){
        if(!isset($_SESSION['admin'])){
            header('Location:' . base_url);
        }
        else{
            return true;
        }
    }
    
    public static function showCategorias(){
        require_once 'models/Categoria.php';
        
        $categoria = new Categoria();
        $result = $categoria->getAll();
        
        return $result;
    }
}