<?php

class Persona{
    private $nombre;
    private $edad;
    private $ciudad;
    
    public function __construct($nombre ="Samuel", $edad = 24, $ciudad = 'Garin'){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
        
    public function __call($name, $arguments){
        $prefix_method = substr($name, 0, 3);

        if($prefix_method == 'get'){
            $nombre_method = substr(strtolower($name), 3);
            
            if(!isset($this->$nombre_method)){
                return "El metodo no existe";
            }

            return $this->$nombre_method;
        }
        else{
            return "El metodo no existe";
        }
    }        
}

$persona = new Persona();

echo $persona->getLocalidad();