<?php
require_once 'autoload.php';


$ser_humano = new Usuario();

echo $ser_humano->getNombre();
echo $ser_humano->setNombre("Medina Tomas Samuel");
echo $ser_humano->getNombre();

echo '<hr/>';

$cat = new Categoria();

echo $cat->getDescripcion();