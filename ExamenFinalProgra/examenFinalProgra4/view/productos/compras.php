
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Articulos Disponibles</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Productos</li>
          <li class="breadcrumb-item active"><a href="#">Lista de Arituculos</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Cantidad Disponible</th>
                    <th>IVA </th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php foreach($this->modelo->Listar() as $r):?>
                  <tr>
                    <td><?=$r->id?></td>
                    <td><?=$r->nombre?></td>
                    <td><?=$r->precio?></td>
                    <td><?=$r->cantidad?></td>
                    <td><?=$r->iva?></td>
                                  
                  </tr>
                <?php endforeach;?>
                </tbody>
              </table>

              <div>
          <h2><i class="fa fa-th-list"></i> Comprar Artículos</h2>
          <p></p>
        </div>

<form  class="form-group" method="POST" action="?c=producto&a=GuardarCompras"> 

<!--formulario de los articulos-->
<!--el id está AI en la DB, por eso se oculta aqui-->
<div class="form-group">
  <input class="form-control" name="ID" type="hidden">
</div>
<!--Espacio de nombre-->
<div class="form-group">
  <label class="col-1g-2 control-label" for="nombre">Nombre</label>
<div class="col-1g-10">
  <input required  class="form-control" name="nombre" type="text" placeholder="Ingrese el nombre">
</div>
</div>
<!--Espacio de precio-->
<div class="form-group">
  <label >Precio</label>
  <input required class="form-control"  name="precio" type="text" placeholder="Ingrese el precio">
</div>
  <!--Espacio de IVA  -->
  <div class="form-group">
  <label >Posee IVA</label>
  <input  required class="form-control" name="iva" type="text" placeholder="Ingrese (S) / (N)">
</div>
  <!--Espacio de Cantidad  -->
<div class="form-group">
  <label>Cantidad</label>
  <input required class="form-control"  name="cantidad" type="number" placeholder="Ingrese la cantidad">
</div>

<div class="form-group">
<button class="btn btn-primary" type="submit">Agregar</button>
</div>
</form>
            </div>
          </div>
        </div>
      </div>

