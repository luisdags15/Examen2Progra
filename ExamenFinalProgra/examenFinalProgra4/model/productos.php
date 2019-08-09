<?php

class Producto{

private $pdo;
private $id;
private $nombre;
private $precio;
private $cantidad;
private $iva;


public function __CONSTRUCT(){
    $this->pdo = database::Conectar();
}

//id
public function getProducto_id() : ?int{
    return $this->id;
}

public function setProducto_id(int $id){
    $this->id=$id;
}
//nombre
public function getProducto_nombre() : ?string{
    return $this->nombre;
}

public function setProducto_nombre(string $nom){
    $this->nombre=$nom;
}
//precio
public function getProducto_precio() : ?int{
    return $this->precio;
}

public function setProducto_precio(int $pre){
    $this->precio=$pre;
}
//cantidad
public function getProducto_cantidad() : ?int{
    return $this->cantidad;
}

public function setProducto_cantidad(int $can){
    $this->cantidad=$can;
}
//iva
public function getProducto_iva() : ?string{
    return $this->iva;
}

public function setProducto_iva(string $ivaa){
    $this->iva=$ivaa;
}

//consulta cuantos productos hay en la base de datos
public function Cantidad(){
    try{
        $consulta=$this->pdo->prepare("SELECT SUM(cantidad) as Cantidad FROM productos;");
        $consulta->execute();
        return $consulta->fetch(PDO::FETCH_OBJ);
    }catch(Exception $e)
    {
        die($e->getMessage());
    }   
}

public function Listar(){
    try{
        $consulta=$this->pdo->prepare("SELECT *  FROM productos;");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);

    }catch(Exception $e)
    {
        die($e->getMessage());
    }   
}

public function ListarComprar(){
    try{
        $consulta=$this->pdo->prepare("SELECT *  FROM productosnueva;");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);

    }catch(Exception $e)
    {
        die($e->getMessage());
    }   
}

public function AgregarArticulos(){
 
    try{
        $consulta=$this->pdo->prepare("INSERT INTO `productos` (`id`, `nombre`, `precio`, `iva`, `cantidad`) VALUES (NULL, '$id', '$nombre', '$iva', '$cantidad');");
        $consulta->execute();
    }catch(Exception $e)
    {
        die($e->getMessage());
    }   
}

public function FacturaArticulos(){
    
    try{
        $consulta=$this->pdo->prepare("SELECT *  FROM productos_comprados;");
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_OBJ);
    }catch(Exception $e)
    {
        die($e->getMessage());
    }   

}


public function MostrarIVA(){
 
}

public function Insertar(Producto $p){
    try{
            $consulta="INSERT INTO productos(nombre,precio,iva,cantidad) VALUES (?,?,?,?);";
            $this->pdo->prepare($consulta)
                ->execute(array(
                    $p->getProducto_nombre(),
                    $p->getProducto_precio(),
                    $p->getProducto_iva(),
                    $p->getProducto_cantidad()              
            ));
    }catch(Excepteion $e){
        die($e->getMessage());
    }
}

public function InsertarCompras(Producto $p){
    try{
            $consulta="INSERT INTO productosnueva(nombre,precio,iva,cantidad) VALUES (?,?,?,?);";
            $this->pdo->prepare($consulta)
                ->execute(array(
                    $p->getProducto_nombre(),
                    $p->getProducto_precio(),
                    $p->getProducto_iva(),
                    $p->getProducto_cantidad()              
            ));
    }catch(Excepteion $e){
        die($e->getMessage());
    }
}


}