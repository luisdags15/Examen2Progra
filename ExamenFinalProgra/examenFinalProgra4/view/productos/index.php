
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Lista de Productos</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Productos</li>
          <li class="breadcrumb-item active"><a href="#">Lista Productos</a></li>
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
            </div>
          </div>
        </div>
      </div>