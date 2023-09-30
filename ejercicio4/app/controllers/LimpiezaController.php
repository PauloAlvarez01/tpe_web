<?php

require_once './app/models/LimpiezaModel.php';
require_once './app/views/LimpiezaView.php';

class LimpiezaController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new LimpiezaModel();
        $this->view = new LimpiezaView();
    }

    public function showProductos(){
        $productos = $this->model->getProductos();
        $this->view->showProductos($productos);
    }

    public function showDescripcion($id){
        $producto = $this->model->getDescripcion($id);
        $this->view->showDescripcion($producto);
    }

}