<?php

require_once './app/controllers/PeliculaController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar';

if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) { 
    case 'listar':
        $controller= new PeliculaController();
        $controller->showGeneros(); 
        break;
    case 'mostrar':
        $controller= new PeliculaController();
        $controller->showPeliculas($params[1]); 
        break;
    default: 
        $controller= new PeliculaController();
        $controller->showGeneros();
        break;
}



