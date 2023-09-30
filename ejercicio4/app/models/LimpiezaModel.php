<?php

class LimpiezaModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_limpieza;charset=utf8', 'root', '');
    }

    function getProductos() {
        $query = $this->db->prepare('SELECT * FROM `productos`');
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);

        return $productos;
    }

    function getDescripcion($id) {
        $query= $this->db->prepare('SELECT * FROM `productos` WHERE `id` = ?');
        $query->execute([$id]);
        $producto= $query->fetch(PDO::FETCH_OBJ);

        return $producto;
    }
   
}