<?php

try{
    if(isset($_GET['id'])){
        echo 'El parametro es ' . $_GET['id'];
    }
    else{
        throw new Exception('Faltan parametros');
    }
} catch (Exception $ex) {
    echo 'Carga bien los datos bobo... *Meme de messi*';
}