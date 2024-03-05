<?php

require_once 'models/Pedido.php';

class PedidoController{
    public function realizar(){
        require_once 'views/pedido/realizar.php';
    }

    public function add(){
        if(isset($_SESSION['identity'])){
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
                   
                   var_dump($pedido);
                   die();
                }
            }
        }
        
    }
}
