<?php

require_once './app/models/ComentarioModel.php';
require_once './app/views/ComentarioView.php';

class ComentarioController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new ComentarioModel();
        $this->view = new ComentarioView();
    }

    public function showComentarios(){
        $comentarios = $this->model->getComentarios();
        $this->view->showComentarios($comentarios);
    }

    public function addComentario(){
        $comentario = $_POST['comentario'];
        var_dump($comentario);
        if (empty($comentario)) {
            $this->view->showError("Debe completar todos los campos");
            
        }else{

        
        $this->model->insertComentario($comentario);
        header('Location: ' . BASE_URL);
        }
    }

}