<link rel="stylesheet" href="assets/style.css">
 <link href="Assets\css\bootstrap.min.css" rel="stylesheet">
	  <link href="Assets\css\Style.css" rel="stylesheet">
<?php
require_once 'model/database.php';
$controller = 'Citas';

if(!isset($_REQUEST['c']))
{
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    $controller->Index();    
}
else
{
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';
    
    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;
    
    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}