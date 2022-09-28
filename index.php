<?php
    session_start();
    //Llamado de la base de datos
    require_once 'model/conect_db.php';
    // Todo esta lógica hara el papel de un FrontController
    if(!isset($_REQUEST['r']) OR ($_REQUEST['r'] === '1')) {
        $controller = 'login';
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        $controller->Login();  
    } else {
        $href = explode("&", $_REQUEST['r']);
        $c = $href[0];
        $a = $href[1];
        $controller = $a;
        // Obtenemos el controlador que queremos cargar
        $controller = strtolower($c);
        $accion = isset($a) ? $a : 'Index';
        
        // Instanciamos el controlador
        require_once "controller/$controller.controller.php";
        $controller = ucwords($controller) . 'Controller';
        $controller = new $controller;
        
        // Llama la accion
        call_user_func( array( $controller, $accion ) );
    }
?>