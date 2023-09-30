<?php

class ComentarioModel {
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=db_comentario;charset=utf8', 'root', '');
    }

    
    function getComentarios() {
        $query = $this->db->prepare('SELECT * FROM `comentarios`');
        $query->execute();

        
        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);

        return $comentarios;
    }

    
    function insertComentario($comentario) {
        $query = $this->db->prepare('INSERT INTO `comentarios` (`id`, `comentario`) VALUES (NULL, ?)');
        $query->execute([$comentario]);
   
    }

    

}