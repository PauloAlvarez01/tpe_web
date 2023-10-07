<?php

require_once './app/models/VinotecaModel.php';
require_once './app/views/VinotecaView.php';

class VinotecaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new VinotecaModel();
        $this->view = new VinotecaView();
    }

    public function showVinos(){
        $vinos = $this->model->getVinos();
        $this->view->showVinos($vinos);
    }
    
    public function showBodega($id){
        $bodega = $this->model->getbodega($id);
        $this->view->showBodega($bodega);
    }

    public function showCepa($id){
        $cepa = $this->model->getCepa($id);
        $this->view->showCepa($cepa);
    }

}