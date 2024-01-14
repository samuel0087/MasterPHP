<?php

require_once 'autoload.php';

/*
$ser_humano = new Usuario();

echo $ser_humano->getNombre();
echo $ser_humano->setNombre("Medina Tomas Samuel");
echo $ser_humano->getNombre();

echo '<hr/>';

$cat = new Categoria();

echo $cat->getDescripcion();
 */
use MisClases\Usuario;
use MisClases\Entrada;
use MisClases\Categoria;

class Principal{
    private $usuario;
    private $entrada;
    private $categoria;
    
    public function __construct() {
        $this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada(); 
        
    }
    
    public function getUsuario() {
        return $this->usuario;
    }

    public function getEntrada() {
        return $this->entrada;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    public function setEntrada($entrada): void {
        $this->entrada = $entrada;
    }

    public function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }


}

$principal = new Principal();

//comprobar si existen metodos en las clases
$metodos = get_class_methods($principal); //devuelve en un array los nombres de los metodos que puede invocar el objeto
var_dump($metodos);

$busqueda = array_search('getUsuario', $metodos); //Buscar el nombre de un metodo (indice si es verdadero, falso si no existe) 

if($busqueda){
    echo '<h1>'. $metodos[$busqueda] .'</h1> <hr/>';
}
else{
    echo 'No EXISTEEEEEE';
}

//comprobar si una clase existe
$clase = @class_exists('MisClases\Usuario');
var_dump($clase);

if($clase){
    echo "EXISTE";
}
else{
    echo "No Existe";
}