<?php

class Coche{
    
    //Atributos / propiedades (variables)
    private $color = 'Rojo';
    private $marca = 'Ford';
    private $modelo = 'Taunus Coupe GT SP';
    private $velocidad = 0;
    private $cilindrada = 2.3;
    private $anio_fabricacion = 1981;
    
    //constructor
    public function __construct($color = '', $marca = '', $modelo = '', $velocidad = 0, $cilindrada = 0, $anio = 0) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->cilindrada = $cilindrada;
        $this->anio_fabricacion = $anio;
    }
    
    
    //Metodos / definen el comportamiento del objeto
    
    public function setColor($nuevo_color){
        $this->color = $nuevo_color;
    }
    
    public function setMarca($nueva_marca){
        $this->marca = $nueva_marca;
    }
    
    public function setModelo($modelo) {
        $this->modelo = modelo;
    }
    
    public function acelerar(){
        $this->velocidad++;
    }
    
    public function desacelerar(){
        $this->velocidad--;
    }
    
    public function setCilindrada($cilindrada){
        $this->cilindrada = $cilindrada;
    }
    
    public function setAnioFabricacion($anio){
        $this->anio_fabricacion = $anio;
    }
    
    public function getColor(){
        return $this->color;
    }
    
    public function getMarca(){
        return $this->marca;
    }
    
    public function getModelo() {
        return $this->modelo;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
    public function getCilindrada(){
        return $this->cilindrada;
    }
    
    public function getAnioFabricacion(){
        return $this->anio_fabricacion;
    }
    
}



