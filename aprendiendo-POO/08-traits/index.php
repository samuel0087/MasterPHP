<?php

trait Utilidades{
    public function mostrarNombre(){
        return '<h1>Nombre: ' . $this->nombre . '</h1>';
    }
}

class Auto{
    private $nombre;
    private $marca;
    
    use Utilidades;
    
    
    public function __construct($nombre = "", $marca=""){
       $this->nombre = $nombre;
       $this->marca = $marca;
    }
    
}

class Persona{
    private $nombre;
    private $apellidos;
}

class Videojuego{
    private $nombre;
    private $categoria;
}

$Coche = new Auto('Taunus Coupe GT SP', 'Ford');

var_dump($Coche);
echo $Coche->mostrarNombre();