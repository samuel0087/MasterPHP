<?php

class Nota{
    private $nombre;
    private $descripcion;
    
    public function __construct($nom = "", $descripcion = ""){
        $this->nombre = $nom;
        $this->descripcion = $descripcion;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setDescripcion($descripcion): void {
        $this->descripcion = $descripcion;
    }


}

