<?php

class PeliculaModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_movies;charset=utf8', 'root', '');
    }

    function getGeneros() {
        //SELECT DISTINCT selecciona sin repetir
        $query = $this->db->prepare('SELECT DISTINCT `genre`FROM `movies`');
        $query->execute();
        $generos = $query->fetchAll(PDO::FETCH_OBJ);

        return $generos;
    }

    function getPeliculas($genero) {
        $query= $this->db->prepare('SELECT * FROM `movies` WHERE `genre` = ?');
        $query->execute([$genero]);
        $peliculas= $query->fetchAll(PDO::FETCH_OBJ);

        return $peliculas;
    }
   
}