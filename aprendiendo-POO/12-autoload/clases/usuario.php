<?php

class Usuario{
    private $nombre;
    
    public function __construct($name = "Samuel") {
        $this->nombre = $name;
    }
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }


}
