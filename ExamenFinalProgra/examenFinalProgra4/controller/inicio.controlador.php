<?php

require_once "model/productos.php";
Class InicioControlador{

    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo=new Producto();
    }

    public function Inicio(){
        
        require_once "view/encabezado.php";
        require_once "view/pie.php";
        require_once "view/inicio/principal.php";
    }
}