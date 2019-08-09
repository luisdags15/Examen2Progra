<?php

class ivaControlador{

    private $iva;

    public function MostrarIVA(){
        require_once "view/encabezado.php";
        require_once "view/productos/iva.php";
        require_once "view/pie.php";
    }
}