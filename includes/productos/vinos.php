<?php 
  $queryVino = $conex->query("SELECT * FROM vinos");

  $registrosMostrar = '3';
  if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
  }else{
    $pagina = 1;
  }
  $empieza = ($pagina-1) * $registrosMostrar;
  $consultaVino = $conex->query("SELECT * FROM vinos LIMIT $empieza, $registrosMostrar");
  
  function mostrarPaginacionVinos($sql) : void{
    ?>
    <div class="bg-warning">
      <span class="d-flex justify-content-center bg-warning text-dark fw-bold fs-3">VINOS</span>
    </div>
      <div class="album py-5 bg-dark">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <?php
              while($vinos = mysqli_fetch_assoc($sql)){
                ?>
                  <div class="col bg-warning.bg-gradient">
                    <div class="card shadow-sm bg-warning.bg-gradient">
                      <a href=""><img src="<?php echo $vinos['url'];?>" title="Informacion" class="bd-placeholder-img card-img-top" width="100%" height="10%" alt="<?php echo $vinos['nombre'];?>"></a>     
                      <div class="card-body">
                          <div class="d-flex justify-content-between align-items-left">
                            <div class="btn-group">
                              <span class="text-info fw-bold">Nombre: </span><span class="text-warning fw-bold"><?php echo $vinos['nombre'];?></span>
                            </div>
                              <small class="text-success fw-bold">$<?php echo $vinos['precio'];?> ARS</small>
                          </div>
                          <div class="d-flex justify-content-between align-items-left">
                            <div class="btn-group">
                              <span class="text-info fw-bold">Variedad: </span><span class="text-warning fw-bold"><?php echo $vinos['variedad'];?></span>
                            </div>
                              <small class="text-muted fw-bold"><?php echo $vinos['capacidad'];?>ml</small>
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

  function mostrarVinos($sql) : void{
    ?>
    <div class="bg-warning">
    <span class="d-flex justify-content-center bg-warning text-dark fw-bold fs-3">VINOS</span>
    </div>
      <div class="album py-5 bg-dark">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
             <?php
              foreach($sql as $vinos){
                ?>
                    <div class="col bg-warning.bg-gradient">
                      <div class="card shadow-sm bg-warning.bg-gradient">
                        <a href=""><img src="<?php echo $vinos['url'];?>" title="Informacion" class="bd-placeholder-img card-img-top" width="100%" height="10%" alt="<?php echo $vinos['nombre'];?>"></a>     
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-left">
                              <div class="btn-group">
                                <span class="text-info fw-bold">Nombre: </span><span class="text-warning fw-bold"><?php echo $vinos['nombre'];?></span>
                              </div>
                                <small class="text-success fw-bold">$<?php echo $vinos['precio'];?> ARS</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-left">
                              <div class="btn-group">
                                <span class="text-info fw-bold">Variedad: </span><span class="text-warning fw-bold"><?php echo $vinos['variedad'];?></span>
                              </div>
                                <small class="text-muted fw-bold"><?php echo $vinos['capacidad'];?>ml</small>
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

  function tablaVinos($sql) : void{
      ?>
        <p class="text-dark m-0 p-0 fs-2 bg-warning fw-normal text-center fw-bold col-12">Vinos</p> </p> 
        <table class="table table-bordered border-dark table-striped bg-white">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Nombre</th>
              <th scope="col">URL</th>
              <th scope="col">Precio</th>
              <th scope="col">Variedad</th>
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
                <td><?php echo $resultadoProducto['variedad'];?></td>
                <td><?php echo $resultadoProducto['capacidad'];?></td>
                <td>
                  <a href="includes/admin/editarProductos/editarVinos.php?idVino=<?php echo $resultadoProducto['id'];?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                  <a href="includes/admin/eliminar.php?idVino=<?php echo $resultadoProducto['id'];?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      <?php
  }
?>