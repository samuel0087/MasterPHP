<?php

require_once 'models/usuario.php';

class UsuarioController{
    public function mostrarTodos(){
        
        $usuario = new Usuario();
        $todosLosUsuarios = $usuario->getAllUsers();
        
        require_once 'views/usuario/mostrarTodos.php';
    }
    
    public function crear(){
        require_once 'views/usuario/crear.php';
    }
}

