<?php

class UsuarioController{
    public function index(){
        echo "INDEX DE USUARIOS";
    }
    
    public function registro(){
        require_once 'views/usuario/registro.php';
    }
    
    public function save(){
        var_dump($_POST);
    }
}