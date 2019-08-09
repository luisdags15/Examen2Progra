<?php

require_once "model/productos.php";

class ProductoControlador{

    private $model;

    public function __CONSTRUCT(){
        $this->modelo=new Producto;
    }

    public function Inicio(){
        require_once "view/encabezado.php";
        require_once "view/inicio/principal.php";
        require_once "view/pie.php";
    }

    public function ListarProductos(){
        require_once "view/encabezado.php";
        require_once "view/productos/index.php";
        require_once "view/pie.php";
    }


    public function FormCrear(){
        require_once "view/encabezado.php";
        require_once "view/productos/form.php";
        require_once "view/pie.php";
    }

    public function AgregarArticulos(){
        require_once "view/encabezado.php";
        require_once "view/productos/iva.php";
        require_once "view/pie.php";
    }

    public function ComprarArticulos(){
        require_once "view/encabezado.php";
        require_once "view/productos/compras.php";
        require_once "view/pie.php";
    }

    public function FacturaArticulos(){
        require_once "view/encabezado.php";
        require_once "view/productos/factura.php";
        require_once "view/pie.php";
    }


    public function MostrarIVA(){
        require_once "view/encabezado.php";
        require_once "view/productos/iva.php";
        require_once "view/pie.php";
    }

    public function Guardar(){

        $p=new Producto();
        $p->setProducto_id(intval($_POST['ID']));
        $p->setProducto_nombre($_POST['nombre']);
        $p->setProducto_precio($_POST['precio']);
        $p->setProducto_iva($_POST['iva']);
        $p->setProducto_cantidad(intval($_POST['cantidad']));
      
        $this->modelo->Insertar($p);
        header("location:?c=producto&a=ListarProductos");
    }

    
    public function GuardarCompras(){

        $p=new Producto();
        $p->setProducto_id(intval($_POST['ID']));
        $p->setProducto_nombre($_POST['nombre']);
        $p->setProducto_precio($_POST['precio']);
        $p->setProducto_iva($_POST['iva']);
        $p->setProducto_cantidad(intval($_POST['cantidad']));
      
        $this->modelo->InsertarCompras($p);
        header("location:?c=producto&a=FacturaArticulos");
    }

}