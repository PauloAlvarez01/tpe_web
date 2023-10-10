<?php

require_once './app/controllers/VinotecaController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar';

if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) { 
    case 'listar':
        $controller= new VinotecaController();
        $controller->showVinos(); 
        break;
    case 'mostrarVino':
        $controller= new VinotecaController();
        $controller->showVino($params[1]); 
        break;
    case 'mostrarBodega':
        $controller= new VinotecaController();
        $controller->showBodega($params[1]); 
        break;
    case 'mostrarBodegas':
        $controller= new VinotecaController();
        $controller->showBodegas(); 
        break;
    case 'mostrarCepa':
        $controller= new VinotecaController();
        $controller->showCepa($params[1]); 
        break;
    case 'mostrarCepas':
        $controller= new VinotecaController();
        $controller->showCepas(); 
        break;
    case 'mostrarVinosPorBodega':
        $controller= new VinotecaController();
        $controller->showVinosPorBodega($params[1]); 
        break;
    case 'mostrarVinosPorCepa':
        $controller= new VinotecaController();
        $controller->showVinosPorCepa($params[1]); 
        break;
    default: 
        $controller= new VinotecaController();
        $controller->showVinos();
        break;
}



