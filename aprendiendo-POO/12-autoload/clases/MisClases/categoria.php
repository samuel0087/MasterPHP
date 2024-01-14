<?php

namespace MisClases;

class Categoria {
    private $nombre;
    private $descripcion;
    
    public function __construct($des = "Hablemos de magia", $cat = "Futbol"){
        $this->descripcion = $des;
        $this->nombre = $cat;
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
