<?php

require_once 'models/Categoria.php';

class CategoriaController{
    public function index(){
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/gestionar.php';
    }
    
    public function crear(){
        Utils::isAdmin();
        
        require_once 'views/categoria/crear.php';
    }
    
    public function save(){
        Utils::isAdmin();
        $_SESSION['create'] = false; 
        
        if(isset($_POST)){
            $nombre = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] : false;
            
            if($nombre){
                $cat = new Categoria($nombre);
                $result = $cat->save();
                
                if($result){
                   $_SESSION['create'] = true; 
                }                         
            }
        }
        
        header('Location:' . base_url . 'Categoria/index');
    }
}

