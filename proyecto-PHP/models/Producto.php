<?php


class Producto{
    private $id;
    private $categoria_id;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $oferta;
    private $fecha;
    private $image;
    private $db;


    public function __construct(){
        $this->db = Database::connect();
    }
    public function getId() {
        return $this->id;
    }

    public function getCategoria_id() {
        return $this->categoria_id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function getPrecio() {
        return $this->precio;
    }

    public function getStock() {
        return $this->stock;
    }

    public function getOferta() {
        return $this->oferta;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getImage() {
        return $this->image;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $this->db->real_escape_string($descripcion);
    }

    public function setPrecio($precio) {
        $this->precio = $precio;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }

    public function setOferta($oferta) {
        $this->oferta = $oferta;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function setImage($image) {
        $this->image = $this->db->real_escape_string($image);
    }
    
    public function getAll(){
        $sql = "SELECT * FROM productos ORDER BY id DESC";
        $result = $this->db->query($sql);
        
        return $result;
    }
    
    public function getRandom($limit){
        $sql = "SELECT * FROM productos ORDER BY RAND() LIMIT {$limit}";
        $result = $this->db->query($sql);
        
        return $result;
    }
    
    public function getProducto(){
        $sql = "SELECT * FROM productos WHERE id = {$this->id}";
        $product = $this->db->query($sql);
        
        return $product->fetch_object();
    }
    
    public function getAllCategory(){
        $sql = "SELECT p.*, c.nombre FROM productos p "
                ."INNER JOIN categorias c ON c.id = p.categoria_id "
                ."WHERE p.categoria_id = {$this->categoria_id} "
                . "ORDER BY id DESC;";
                
        $result = $this->db->query($sql);

        return $result;
        
    }


    public function save(){
        $sql = "INSERT INTO productos VALUES(NULL,{$this->categoria_id},'{$this->nombre}', '{$this->descripcion}', {$this->precio}, {$this->stock}, NULL, CURDATE(), '{$this->image}');";
        $result = $this->db->query($sql);
    
        return $result;
    }
    
    public function delete(){
        $sql = "DELETE FROM productos WHERE id = {$this->id}";
        $result = $this->db->query($sql);

        return $result;
    }
    
    public function edit(){
         $sql = "UPDATE productos SET categoria_id={$this->categoria_id}, nombre='{$this->nombre}', descripcion='{$this->descripcion}', precio={$this->precio}, stock={$this->stock}";
         
         if($this->image != null){
            $sql .= ", imagen= '{$this->image}'";
         }
         
         $sql .= " WHERE id={$this->id};";
         
        $result = $this->db->query($sql);
    
        return $result;
    }


}


