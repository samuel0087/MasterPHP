<?php
require_once 'clases.php';

$persona = new Informatico();
$persona->setLenguajes('NodeJs');
$persona->setLenguajes('HTML');
var_dump($persona);