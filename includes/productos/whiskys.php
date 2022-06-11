<?php 
    $consultaWhiskys = $conex->query("SELECT * FROM whiskys LIMIT $empieza, $registrosMostrar");

    function mostrarWhiskys($sql) : void{
      ?>
      <div class="bg-warning">
        <span class="d-flex justify-content-center bg-warning text-dark fw-bold fs-3">WHISKYS</span>
      </div>
      <div class="album py-5 bg-dark">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
              foreach($sql as $whiskys){
                  ?>
                  <div class="col bg-warning.bg-gradient">
                      <div class="card shadow-sm bg-warning.bg-gradient">
                          <a href=""><img src="<?php echo $whiskys['url'];?>" title="Informacion" class="bd-placeholder-img card-img-top" width="100%" height="10%" alt="<?php echo $whiskys['nombre'];?>"></a>     
                          <div class="card-body">
                            <div class="d-flex justify-content-between align-items-left">
                              <div class="btn-group">
                                <span class="text-info fw-bold">Nombre: </span><span class="text-warning fw-bold"><?php echo $whiskys['nombre'];?></span>
                              </div>
                                <small class="text-success fw-bold">$<?php echo $whiskys['precio'];?> ARS</small>
                            </div>
                              <div class="d-flex justify-content-between align-items-right">
                                  <small class="text-muted fw-bold"><?php echo $whiskys['capacidad'];?>ml</small>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php
              }
            ?>
          </div>
        </div>
      </div>
  <?php
    }
    function tablaWhiskys($sql) : void{
      ?>
        <p class="text-dark m-0 p-0 fs-2 bg-warning fw-normal text-center fw-bold col-12">Whiskys</p> </p> 
        <table class="table table-bordered border-dark table-striped bg-white">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">URL</th>
              <th scope="col">Precio</th>
              <th scope="col">Capacidad</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php while($resultadoProducto = mysqli_fetch_array($sql)){?>
              <tr>
                <th scope="row"><?php echo $resultadoProducto['id'];?></th>
                <td><?php echo $resultadoProducto['nombre'];?></td>
                <td><?php echo $resultadoProducto['url'];?></td>
                <td><?php echo $resultadoProducto['precio'];?></td>
                <td><?php echo $resultadoProducto['capacidad'];?></td>
                <td>
                  <a href="includes/admin/editarProductos/editarWhiskys.php?idWhiskys=<?php echo $resultadoProducto['id'];?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                  <a href="includes/admin/eliminar.php?idWhiskys=<?php echo $resultadoProducto['id'];?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php
  }

?>