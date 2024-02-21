<?php

require_once 'models/Producto.php';

class ProductoController{
    
    public function destacados(){
        $producto = new Producto();
        $productos = $producto->getRandom(8);
        
        require_once 'views/producto/destacados.php';
    }
    
    public function gestion(){
        Utils::isAdmin();
        
        $producto = new Producto();
        $productos = $producto->getAll();
        
        require_once 'views/producto/gestion.php';
    }
    
    public function crear(){
        Utils::isAdmin();
        
        require_once 'views/producto/crear.php';
    }
    
    public function save(){
        Utils::isAdmin();
        $_SESSION['create'] = false;
        
        if(isset($_POST)){
            $nombre = isset($_POST['name']) && !empty($_POST['name']) ? $_POST['name'] : false;
            $descripcion = isset($_POST['description']) && !empty($_POST['description']) ? $_POST['description'] : false;
            $precio = isset($_POST['precio']) && !empty($_POST['precio']) ? (float)$_POST['precio'] : false;
            $stock = isset($_POST['stock']) && !empty($_POST['stock']) ? $_POST['stock'] : false;
            $categoria = isset($_POST['categoria']) && !empty($_POST['categoria']) ? $_POST['categoria'] : false;
            
                            
            if($nombre && $descripcion && $precio && $stock && $categoria ){
                $producto = new Producto();
                $producto->setCategoria_id($categoria);
                $producto->setNombre($nombre);
                $producto->setDescripcion($descripcion);
                $producto->setStock($stock);
                $producto->setPrecio($precio);

                //guardar imagen
                if(isset($_FILES['image'])){
                    $file = $_FILES['image'];
                    $fileName = $file['name'];
                    $mimeType =$file['type'];

                    if($mimeType == "image/jpg" || $mimeType == "image/jpeg" || $mimeType == "image/png" || $mimeType == "image/gif"){
                        if(!is_dir('uploads/img')){
                            mkdir('uploads/img', 0777, true);
                        }
                        
                        move_uploaded_file($file['tmp_name'],'uploads/img/' . $fileName); // ruta en donde de guarda
                        $producto->setImage($fileName);
                    }
                    else{
                        $producto->setImage("default.jpeg");
                    }
                }
                else{
                    $producto->setImage("default.jpeg");
                }
                
                if(isset($_GET['id'])){
                    $producto->setId($_GET['id']);
                    $result = $producto->edit();
                }
                else{
                    $result = $producto->save();
                }
            
                if($result){
                    $_SESSION['create'] = true;
                }
            }
        }
        
        header('Location:' . base_url . 'Producto/gestion');
    }
    
    public function delete(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $producto = new Producto();
            $producto->setId($id);
            $result = $producto->delete();
            
            if($result){
                $_SESSION['delete'] = true;
            }
            else{
                $_SESSION['delete'] = false;
            }
        }
        
        header('Location:' . base_url . 'Producto/gestion');
    }
    
    public function edit(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $edit = true;
            
            $producto = new Producto();
            $producto->setId($id);
            $product = $producto->getProducto();
            
            
            require_once 'views/producto/crear.php';
        }
        
    }

    public function ver(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            
            $producto = new Producto();
            $producto->setId($id);
            $product = $producto->getProducto();
        }
        
        require_once 'views/producto/ver.php';
    }
    
}