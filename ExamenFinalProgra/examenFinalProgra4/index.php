<?php

require_once "model/database.php";

if(!isset($_GET['c'])){
    require_once "controller/inicio.controlador.php";
    $controlador = new InicioControlador();
    call_user_func(array($controlador, "inicio"));
}else{
    $controlador = $_GET['c'];
    require_once "controller/$controlador.controlador.php";
    $controlador = ucwords($controlador)."controlador";
    $controlador = new $controlador;

    $accion = isset($_GET['a']) ? $_GET['a'] : "Inicio";
    
    call_user_func(array($controlador,$accion));
}
