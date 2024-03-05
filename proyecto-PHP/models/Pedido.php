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
        $this->localidad = $localidad;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
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
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        $result = $this->db->query($sql);
        
        return $result;
    }
    



    public function save(){
        $sql = "INSERT INTO pedidos VALUES(NULL,{$this->usuario_id},'{$this->provincia}', '{$this->localidad}', {$this->direccion}, {$this->costo}, 'Confirm', CURDATE(), CURTIME());";
        $result = $this->db->query($sql);
    
        return $result;
    }



}


