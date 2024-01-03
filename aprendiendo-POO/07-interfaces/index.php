<?php

interface Ordenador {

    public function encender();

    public function apagar();

    public function reiniciar();

    public function detectarUSB();
}

class Imac Implements Ordenador {

    private $model;

    public function getModel() {
        return $this->model;
    }

    public function setModel($model): void {
        $this->model = $model;
    }

    //debe tener obligatoriamente todos los metodos de la interface que implementamos

    public function encender() {
        return 'Lo que sea';
    }

    public function apagar() {
        return 'Lo que sea';
    }

    public function reiniciar() {
        return 'Lo que sea';
    }

    public function detectarUSB() {
        return 'Lo que sea';
    }

}
