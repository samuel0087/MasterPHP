<?php

//se utiliza para definir un "esqueleto" para crear clases de una manera más estrictas

abstract class Ordenador{
    public $encendido;
    
    abstract public function encender();
    
    public function apagar(){
        $this->encendido = false;
    }
    
}

class PcDell extends Ordenador{
    public $software;
    
    public function arrancarSoftware(){
     $this->software = true;
    }
    
    public function encender(){
        $this->encendido = true;
    }
    
}