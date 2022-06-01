<?php 
    require("con_db.php");
    $consulta = $conex->query("SELECT * FROM whiskys");

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
?>