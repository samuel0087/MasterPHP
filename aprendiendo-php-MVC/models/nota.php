<?php

require_once 'models/ModeloBase.php';

class Nota extends ModeloBase{
    private $id;
    private $titulo;
    private $descripcion;
    
    public function __construct($id = 0, $nom = "", $descripcion = ""){
        $this->id = $id;
        $this->titulo = $nom;
        $this->descripcion = $descripcion;

        parent::__construct();
    }
    
    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    
    public function getDescripcion() {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }

    public function guardar(){
        $sql = "INSERT INTO notas(usu_id, titulo, descripcion, fecha) VALUES ({$this->id}, '{$this->titulo}', '{$this->descripcion}', CURDATE())";
    
        $save = $this->db->query($sql);
        
        return $save;
    }


}

