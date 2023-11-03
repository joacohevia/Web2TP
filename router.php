<?php
require_once './config.php';
require_once 'app/Controllers/Produc.Controller.php';
require_once 'app/Controllers/Categ.Controller.php';
require_once 'app/Controllers/AuthController.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'listar'; // accion por defecto
if (!empty( $_GET['action'])) {
    $action = $_GET['action'];
}

// listar    ->    showTasks(); consulta,lista,muestra
// parsea la accion para separar accion real de parametros
$params = explode('/', $action);


switch ($params[0]) {
    //publico
    case 'listar':
        $controller = new ProducController();
        $controller->Lista();
        break;
    case 'listaTotal':
        $controller = new ProducController();
        $controller->ListaTotal($params[1]);
        break;
    case 'categorias':
        $controller = new CategController();
        $controller->Categorias();
        break;
    case 'categId':
        $controller = new CategController();
        $controller->CategId($params[1]); 
        break;
    //items
    case 'formItems':
        $controller = new ProducController();
        $controller->formItems();
        break;
    case 'insertItems':
        $controller = new ProducController();
        $controller->insertItems();
        break;
    case 'formMod':
        $controller = new ProducController();
        $controller->formMod($params[1]);
        break;
    case 'itemsMod':
        $controller = new ProducController();
        $controller->itemsMod();
        break;
    case 'borrarItem':
        $controller = new ProducController();
        $controller->borrarItem($params[1]);
        break;

        //categorias
    case 'formCategoria'://formulario para agregar cat NUEVO
        $controller = new CategController();
        $controller->formCateg();
        break;
    case 'insertCateg':
        $controller = new CategController();
        $controller->insertCateg();
        break;
    case 'formModCateg':
        $controller = new CategController();
        $controller->ModCateg($params[1]);
        break;
    case 'CategMod':
        $controller = new CategController();
        $controller->CategMod();
        break;
    case 'borrarCateg':
        $controller = new CategController();
        $controller->borrarCateg($params[1]);
        break;
    
        //login
    case 'login':
        $controller = new authController();
        $controller->showLogin();
        break;
    case 'auth';
        $controller = new authController();
        $controller->auth();
        break;
    case 'logout':
        $controller = new authController();
        $controller->logout();
        break;
    default: 
        $controller = new ProducController();
        $controller->Error("404-not-found");
        break;
}