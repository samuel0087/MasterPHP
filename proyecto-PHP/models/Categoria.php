<?php
require_once './config/db.php';

class Categoria{
    private $id;
    private $nombre;
    private $db;
    
    public function __construct($name = ""){
        $this->db= Database::connect();
        $this->nombre = $this->db->real_escape_string($name);
    }
    
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNombre($name){
        $this->nombre = $this->db->real_escape_string($name);
    }
    
    public function getAll(){
        $query = "SELECT * FROM categorias;";
        $result = $this->db->query($query);
        
        return $result;
    }
    
    public function getCategoria(){
        $sql = "SELECT * FROM categorias WHERE id={$this->id};";
        $result = $this->db->query($sql);
        
        return $result->fetch_object();
    }
    
    public function save(){
        $sql = "INSERT INTO categorias VALUES(NULL,'{$this->nombre}');";
        $result = $this->db->query($sql);
        
        return $result;
    }


    
}