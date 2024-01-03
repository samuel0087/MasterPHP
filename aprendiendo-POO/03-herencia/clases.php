<?php

/* 
 Herencia: La posibilidad de compartir atributos y metodos entre clases
 */

class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function __construct($nombre = "", $apellidos="", $altura=0, $edad=0){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->altura = $altura;
        $this->edad = $edad;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }
    
    public function hablar(){
        return "Estoy Hablando";
    }
    
    public function caminar(){
        return "Caminando estoy";
    }


}

class Informatico extends Persona{
    public $lenguajes;
    
    public function __construct($lenguajes = Array('PHP', 'JS', 'CSS')){
        parent::__construct();
        $this->lenguajes = $lenguajes;
    }
    
    public function getLenguajes() {
        return $this->lenguajes;
    }

    public function setLenguajes($lenguajes) {
        array_push($this->lenguajes, $lenguajes);
    }

            
    public function programar(){
        return "Estoy programando";
    }

    public function repararOrdenador(){
        return "Reparo PC";
    }
}