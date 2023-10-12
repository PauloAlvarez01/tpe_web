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

    function getVino($id) {
        $query= $this->db->prepare('SELECT a.*, b.*, c.* FROM `vino` a INNER JOIN `cepa` b ON a.id_cepa = b.id_cepa INNER JOIN `bodega` c ON a.id_bodega = c.id_bodega  WHERE `ID_vino` = ?');
        $query->execute([$id]);
        $vino= $query->fetch(PDO::FETCH_OBJ);

        return $vino;
    }
            
    function getBodega($id) {
        $query= $this->db->prepare('SELECT * FROM `bodega`  WHERE `id_bodega` = ?');
        $query->execute([$id]);
        $bodega= $query->fetch(PDO::FETCH_OBJ);

        return $bodega;
    }

    function getBodegas() {
        $query= $this->db->prepare('SELECT * FROM `bodega`');
        $query->execute();
        $bodegas= $query->fetchAll(PDO::FETCH_OBJ);

        return $bodegas;
    }

    function getCepa($id) {
        $query= $this->db->prepare('SELECT * FROM `cepa`  WHERE `id_cepa` = ?');
        $query->execute([$id]);
        $cepa= $query->fetch(PDO::FETCH_OBJ);

        return $cepa;
    }

    function getCepas() {
        $query= $this->db->prepare('SELECT * FROM `cepa`');
        $query->execute();
        $cepas= $query->fetchAll(PDO::FETCH_OBJ);

        return $cepas;
    }

    function getVinosPorBodega($id) {
        $query= $this->db->prepare('SELECT a.*, b.*, c.* FROM `vino` a INNER JOIN `cepa` b ON a.id_cepa = b.id_cepa INNER JOIN `bodega` c ON a.id_bodega = c.id_bodega  WHERE a.id_cepa = ?');
        $query->execute([$id]);
        $vinos= $query->fetchAll(PDO::FETCH_OBJ);

        return $vinos;
    }

    function getVinosPorCepa($id) {
        $query= $this->db->prepare('SELECT a.*, b.*, c.* FROM `vino` a INNER JOIN `cepa` b ON a.id_cepa = b.id_cepa INNER JOIN `bodega` c ON a.id_bodega = c.id_bodega  WHERE a.id_cepa = ?');
        $query->execute([$id]);
        $vinos= $query->fetchAll(PDO::FETCH_OBJ);

        return $vinos;
    }

    function updateVino($Nombre, $Tipo, $Azucar, $id_bodega, $id_cepa, $id) {    
        $query = $this->db->prepare('UPDATE `vino` SET Nombre=?, Tipo=?, Azucar=?, id_cepa=?, id_bodega =? WHERE ID_vino = ?');
        $query->execute([$Nombre, $Tipo, $Azucar, $id_bodega, $id_cepa, $id]);
    }
}