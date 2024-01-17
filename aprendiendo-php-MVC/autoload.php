<?php

function autocarga($classname){
    include 'controllers/' . $classname . 'Controller.php';
}

spl_autoload_register('autocarga');