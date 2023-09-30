<?php

require_once './app/models/PeliculaModel.php';
require_once './app/views/PeliculaView.php';

class PeliculaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new PeliculaModel();
        $this->view = new PeliculaView();
    }

    public function showGeneros(){
        $generos = $this->model->getGeneros();
        $this->view->showGeneros($generos);
    }

    public function showPeliculas($genero){
        $peliculas = $this->model->getPeliculas($genero);
        $this->view->showPeliculas($peliculas, $genero);
    }

}