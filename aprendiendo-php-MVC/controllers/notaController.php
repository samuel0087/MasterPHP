<?php

require_once 'models/nota.php';

class NotaController{

    public function listar(){
        $nota = new Nota();
        $notas = $nota->getAll('notas');
        
        require_once 'views/nota/listar.php';
        
    }
    
    public function crear(){
        $nota = new Nota(3, "Julian Alvarez, la nueva estrella", "El futbolista argentino (ex-River Plate), seta haciendo Historia");
        
        $save = $nota->guardar();       
        
        header("Location:index.php?controller=nota&action=listar");
    }
}