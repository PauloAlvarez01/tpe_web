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

    public function showVino($id){
        $vino = $this->model->getVino($id);
        $this->view->showVino($vino);
    }
    
    public function showBodega($id){
        $bodega = $this->model->getBodega($id);
        $this->view->showBodega($bodega);
    }

    public function showBodegas(){
        $bodegas = $this->model->getBodegas();
        $this->view->showBodegas($bodegas);
    }

    public function showCepa($id){
        $cepa = $this->model->getCepa($id);
        $this->view->showCepa($cepa);
    }

    public function showCepas(){
        $cepas = $this->model->getCepas();
        $this->view->showCepas($cepas);
    }

    public function showVinosPorBodega($id){
        $vinos = $this->model->getVinosPorBodega($id);
        $bodega = $this->model->getBodega($id);
        $this->view->showVinosPorBodega($vinos, $bodega);
    }

    public function showVinosPorCepa($id){
        $vinos = $this->model->getVinosPorCepa($id);
        $cepa = $this->model->getCepa($id);
        $this->view->showVinosPorCepa($vinos, $cepa);
    }

    public function showModificarVino($id){
        $vino = $this->model->getVino($id);
        $bodegas = $this->model->getBodegas();
        $cepas = $this->model->getCepas();
        $this->view->showFormularioModificar($id, $vino, $bodegas, $cepas);
    }

    public function modificarVino($id){
        $Nombre = $_POST['Nombre'];
        $Tipo = $_POST['Tipo'];
        $Azucar = $_POST['Azucar'];
        $id_bodega = $_POST['id_bodega'];
        $id_cepa = $_POST['id_cepa'];

        if (empty($Nombre) || empty($Tipo) || empty($Azucar) || empty($id_bodega) || empty($id_cepa)) {
            $this->view->showError("Debe completar todos los campos");
        }
        else{
            $this->model->updateVino($Nombre, $Tipo, $Azucar, $id_bodega, $id_cepa, $id);
            header('Location: ' . BASE_URL);
        }
        
       
    }

}