<?php

require_once 'models/nota.php';

class NotaController{
    public function listar(){
        $nota = new Nota('Crear pagina', 'Una pagina de listas de tareas');
        
        require_once 'views/nota/listar.php';
        
    }
    
    public function crear(){
        
    }
}