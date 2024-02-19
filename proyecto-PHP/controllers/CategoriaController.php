<?php

require_once 'models/Categoria.php';
require_once 'models/Producto.php';

class CategoriaController{
    public function index(){
        Utils::isAdmin();
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once 'views/categoria/gestionar.php';
    }
    
    public function ver(){
        if(isset($_GET['id'])){
            //Buscar categorian
            $id = $_GET['id'];
            $categoria = new Categoria();
            $categoria->setId($id);
            $cat = $categoria->getCategoria();
            
            //sacar productos de esa categoria
            $producto = new Producto();
            $producto->setCategoria_id($id);
            $productos = $producto->getAllCategory();
            
        }
        
        require_once 'views/categoria/ver.php';
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

