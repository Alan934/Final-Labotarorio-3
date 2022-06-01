<?php 
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
?>