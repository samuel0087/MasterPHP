<?php

require_once 'config/database.php';

class ModeloBase{
    protected $db;

    public function __construct(){
        $this->db = database::conectar();
    }

    public function getAll($tabla) {
        $query = $this->db->query("SELECT * FROM $tabla");

        return $query;
    }
}