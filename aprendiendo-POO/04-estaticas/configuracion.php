<?php

class Configuracion{
    public static $color;
    public static $newletter;
    public static $entorno;
    
    public static function getColor() {
        return self::$color;
    }

    public static function getNewletter() {
        return self::$newletter;
    }

    public static function getEntorno() {
        return self::$entorno;
    }

    public static function setColor($color){
        self::$color = $color;
    }

    public static function setNewletter($newletter) {
        self::$newletter = $newletter;
    }

    public static function setEntorno($entorno) {
        self::$entorno = $entorno;
    }


}

