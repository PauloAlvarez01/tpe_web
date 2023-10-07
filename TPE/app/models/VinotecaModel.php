<?php

class VinotecaModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_vinoteca;charset=utf8', 'root', '');
    }

    function getVinos() {
        $query = $this->db->prepare('SELECT a.*, b.*, c.* FROM `vino` a INNER JOIN `cepa` b ON a.id_cepa = b.id_cepa INNER JOIN `bodega` c ON a.id_bodega = c.id_bodega ');
        $query->execute();
        $vinos = $query->fetchAll(PDO::FETCH_OBJ);

        return $vinos;
    }
            
    function getBodega($bodega) {
        $query= $this->db->prepare('SELECT * FROM `bodega`  WHERE `id_bodega` = ?');
        $query->execute([$bodega]);
        $bodega= $query->fetch(PDO::FETCH_OBJ);

        return $bodega;
    }

    function getCepa($cepa) {
        $query= $this->db->prepare('SELECT * FROM `cepa`  WHERE `id_cepa` = ?');
        $query->execute([$cepa]);
        $cepa= $query->fetch(PDO::FETCH_OBJ);

        return $cepa;
    }


    
   
}