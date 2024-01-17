<?php

class Usuario{
    private $nombre;
    private $apellido;
    private $email;
    private $password;

    public function __construct($name = "", $surname = "", $email = "", $pass = "") {
        $this->nombre = $name;
        $this->apellido = $surname;
        $this->email = $email;
        $this->password = $pass;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido($apellido): void {
        $this->apellido = $apellido;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }
    
    public function getAllUsers() {
        return "Todos mis usuarios";
    }


}

