<?php

require_once 'models/Pedido.php';

class PedidoController{
    public function realizar(){
        require_once 'views/pedido/realizar.php';
    }

    public function add(){
        if(isset($_SESSION['identity'])){
            $_SESSION['encargo'] = false;

            if(isset($_POST)){

                $usuario_id = $_SESSION['identity']->id;
                $provincia = isset($_POST['provincia']) && !empty($_POST['provincia']) ? $_POST['provincia'] : false;
                $ciudad = isset($_POST['ciudad']) && !empty($_POST['ciudad']) ? $_POST['ciudad'] : false;
                $calle = isset($_POST['calle']) && !empty($_POST['calle']) ? $_POST['calle'] : false;
              
                $stats = Utils::statsCarrito();
                $total = $stats['precioTotal'];

                if($provincia && $ciudad && $calle){
                                    
                   $pedido = new Pedido();
                   $pedido->setUsuario_id($usuario_id);
                   $pedido->setProvincia($provincia);
                   $pedido->setLocalidad($ciudad);
                   $pedido->setDireccion($calle);
                   $pedido->setCosto($total);
                   
                   $result = $pedido->save();

                   //guardar en lineas pedidos
                   $result_lineas = $pedido->save_lineas();

                   if($result && $result_lineas){
                    $_SESSION['encargo'] = true;
                   }

                }
                else{
                    $_SESSION['encargo'] = false;    
                }
            }
            else{
                $_SESSION['encargo'] = false;
            }

            header('Location:' . base_url . 'Pedido/confirmado');

        }
        else{
            header('Location:' . base_url);
        }      
    }

    public function confirmado(){
        if(isset($_SESSION['identity'])){
            $identity = $_SESSION['identity'];
            $pedid = new Pedido();
            $pedid->setUsuario_id($identity->id);

            $pedido = $pedid->getPedidoByUser();

            $pedido_products = new Pedido();
            $productos = $pedido_products->getProductosByPedido($pedido->id);
        }
        require_once 'views/pedido/confirmado.php';
    }

    public function mis_pedidos(){
        Utils::isIdentity();

        $pedido = new Pedido();
        $pedido->setUsuario_id($_SESSION['identity']->id);
        $pedidos = $pedido->getAllPedidosByUser();


        require_once 'views/pedido/mis_pedidos.php';
    }

    public function detalle(){
        Utils::isIdentity();

        if(isset($_GET['id'])){
            $pedido_id = $_GET['id'];
            $ped = new Pedido();
            $ped->setId($pedido_id);

            $pedido = $ped->getPedido(); // seguir para sacar el pedido

            
            $pedido_products = new Pedido();
            $productos = $pedido_products->getProductosByPedido($pedido->id);
        }

        require_once 'views/pedido/detalle.php';
    }
}
