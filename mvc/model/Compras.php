<?php

namespace Clase;

Class articulo
{
    private $id_articulo,$nombre_articulo,$IVA;
   

    function __construct($id_articulo,$nombre_articulo,$IVA)
    {
       $this->setId_articulo($id_articulo);
       $this->setNombre_Articulo($nombre_articulo);
       $this->setIvA($IVA);
    }

   public function getId_articulo()
   {
       return $this->id_articulo;
   }

   public function setId_articulo($id_articulo)
   {
       $this->id_articulo = $id_articulo;
   }
    
   //gets y sets nombre_articulo
   public function getNombre_articulo()
   {
       return $this->nombre_articulo;
   }

   public function setNombre_articulo($nombre_articulo)
   {
       $this->nombre_articulo = $nombre_articulo;
   }

   //get y sets IvA
   public function getIVA()
   {
       return $this->IVA;
   }

   public function setIvA($IVA)
   {
       $this->IvA = $IVA;
   }


}

   class Compra 
   {
   
    private $articulos = [];

    function __construct($articulos)
    {
        if(!!is_array($articulos)) {
            $this->articulos = $articulos;
        }
    }

     function imprimirarticulos()
    {
       
        foreach ($this->articulos as $key => $articulo) {
         
            echo "ID:" . $articulo->getId_articulo() . " Nombre articulo: " . $articulo->getNombre_articulo() . " IVA: " . $articulo->getIVA()."*******";
        }
   }
}

   $id_articulo = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
   $nombre_articulo = ["Papas", "Carne", "Sandia", "Fresa", "Papaya", "Chips", 'Carbon', "Audifonos", "Cocina", "Refrigeradora"];
   $IVA = [25, 15, 10, 20, 11, 13, 19, 18, 17, 39];


   for($i=0; $i < count($id_articulo); $i++) {
       $articulos[] = (new articulo($id_articulo[$i], $nombre_articulo[$i], $IVA[$i]));
   }

   
   $Compra = new Compra($articulos);
   //Llamado del método imprimir.
   $Compra->imprimirarticulos();



?>