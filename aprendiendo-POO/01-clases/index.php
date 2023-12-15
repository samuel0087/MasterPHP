<?php
//Programacion Orientada a objetos (POO)

//Clase se utiliza para definir un molde para crear objetos con mismas caracteristicas.

class Coche{
    
    //Atributos / propiedades (variables)
    private $color = 'Rojo';
    private $marca = 'Ford';
    private $modelo = 'Taunus Coupe GT SP';
    private $velocidad = 0;
    private $cilindrada = 2.3;
    private $anio_fabricacion = 1981;
    
    
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

$coche = new Coche();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();


var_dump($coche);


