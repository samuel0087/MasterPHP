<?php

class Entrada{
    private $titulo;
    private $fecha;
    
    public function __contruct($des = "Hola Mundo", $cat = "09/12/18"){
        $this->titulo = $des;
        $this->Fecha = $cat;
    }
    
}