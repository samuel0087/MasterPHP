<?php


class Pedido{
    private $id;
    private $usuario_id;
    private $provincia;
    private $localidad;
    private $direccion;
    private $costo;
    private $estado;
    private $fecha;
    private $hora;
    private $db;

    public function getId() {
        return $this->id;
    }

    public function getUsuario_id() {
        return $this->usuario_id;
    }

    public function getProvincia() {
        return $this->provincia;
    }

    public function getLocalidad() {
        return $this->localidad;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function getCosto() {
        return $this->costo;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getHora() {
        return $this->hora;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setUsuario_id($usuario_id){
        $this->usuario_id = $usuario_id;
    }

    public function setProvincia($provincia){
        $this->provincia = $provincia;
    }

    public function setLocalidad($localidad){
        $this->localidad = $this->db->real_escape_string($localidad);
    }

    public function setDireccion($direccion) {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    public function setCosto($costo) {
        $this->costo = $costo;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setHora($hora) {
        $this->hora = $hora;
    }

    public function __construct(){
        $this->db = Database::connect();
    }

    
    public function getAll(){
        $sql = "SELECT * FROM pedidos ORDER BY id DESC";
        $result = $this->db->query($sql);
        
        return $result;
    }

    public function getPedido(){
        $sql = "SELECT * FROM pedidos WHERE id = {$this->id};";
        $result = $this->db->query($sql);

        return $result->fetch_object();
    }

    public function getPedidoByUser(){
        $sql = "SELECT p.id, p.costo FROM pedidos p "
                ."INNER JOIN lineas_pedido lp ON lp.pedido_id = p.id "
                ."WHERE p.usuario_id = {$this->usuario_id} ORDER BY id DESC LIMIT 1";
        
        $pedido = $this->db->query($sql);

        return $pedido->fetch_object();
    }

    public function getAllPedidosByUser(){
        $sql = "SELECT p.* FROM pedidos p "
                ."WHERE p.usuario_id = {$this->usuario_id} ORDER BY id DESC ";
        
        $pedido = $this->db->query($sql);

        return $pedido;
    }

    public function getProductosByPedido($pedido_id){
        $sql = "SELECT pr.*, lp.unidades FROM productos pr "
                ."INNER JOIN lineas_pedido lp ON lp.producto_id = pr.id "
                ."WHERE lp.pedido_id = {$pedido_id}";
        
        $productos = $this->db->query($sql);

        return $productos;
    }
    

    public function save(){
        $sql = "INSERT INTO pedidos VALUES(NULL,{$this->usuario_id},'{$this->provincia}', '{$this->localidad}',' {$this->direccion}', {$this->costo}, 'Confirm', CURDATE(), CURTIME());";
        $result = $this->db->query($sql);
    
        return $result;
    }

    public function save_lineas(){
        $sql = "SELECT LAST_INSERT_ID() as 'pedidos';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedidos;
        
        foreach($_SESSION['carrito'] as $elemento){
            $product = $elemento['producto'];            

            $insert = "INSERT INTO lineas_pedido VALUES(NULL, {$pedido_id}, {$product->id}, {$elemento['cantidad']});";
            $save_lineas = $this->db->query($insert);
        }

        

        $result = false;
        if($save_lineas){
           $result = true; 
        }

        return $result;
    }



}


