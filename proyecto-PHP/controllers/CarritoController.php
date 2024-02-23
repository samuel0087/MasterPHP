<?php

require_once 'models/producto.php';

class CarritoController{
    public function index(){
        require_once 'views/carrito/index.php';
    }

    public function add(){
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        else{
            header('Location:' . base_url);
        }

        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = Array();
        }
        else{
            $cont = 0;

            foreach($_SESSION['carrito'] as $indice => $elemento){
                if($elemento['id_product'] == $id){
                    $_SESSION['carrito'][$indice]['cantidad']++;
                    $cont++;
                }
            }
        }

        if(!isset($cont) || $cont == 0){
            $producto = new Producto();
            $producto->setId($id);
            $product = $producto->getProducto();

            $_SESSION['carrito'][] = Array(
                "id_product" => $product->id,
                "precio" => $product->precio,
                "cantidad" => 1,
                "producto" => $product
            );
        }
        header('Location:' . base_url . 'Carrito/index');
    }

    public function delete(){
        Utils::deleteSession('carrito');
        header('Location:' . base_url . 'Carrito/index');
    }
}