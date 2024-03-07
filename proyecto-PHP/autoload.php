<?php

function autoload_controllers($classname){
    require_once 'controllers/' . $classname . '.php';
}

spl_autoload_register('autoload_controllers');