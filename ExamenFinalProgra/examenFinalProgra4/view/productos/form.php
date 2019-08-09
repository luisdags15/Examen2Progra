<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Agregar Artículos</h1>
        
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Artículos</li>
          <li class="breadcrumb-item"><a href="?c=producto&a=FormCrear">Agregar  Artículos</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="row">
              <div class="col-lg-6">
                <form  class="form-group" method="POST" action="?c=producto&a=Guardar"> 

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
                    <!--Espacio de Cantidad  -->
                  <div class="form-group">
                    <label>Cantidad</label>
                    <input required class="form-control"  name="cantidad" type="text" placeholder="Ingrese la cantidad">
                  </div>
                    <!--Espacio de IVA  -->
                  <div class="form-group">
                    <label >Posee IVA</label>
                    <input  required class="form-control" name="iva" type="text" placeholder="Ingrese (S) / (N)">
                  </div>
                  <div class="form-group">
              <button class="btn btn-primary" type="submit">Agregar</button>
                </div>
                </form>
          
          </div>
        </div>
      </div>