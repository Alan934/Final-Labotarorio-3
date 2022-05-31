<?php 
    include("con_db.php");

        if(isset($_POST['descendentePrecio'])){
            $descendente = mysqli_query($conex, "SELECT * FROM vinos ORDER BY precio ASC");
            $descendenteC = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY precio ASC");
            ?>
            <div class="bg-warning">
              <span class="d-flex justify-content-center bg-warning text-dark fw-bold fs-3">VINOS</span>
            </div>
            <div class="album py-5 bg-dark">
              <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                  <?php
                    foreach($descendente as $vinos){
                        ?>
                            <div class="col bg-warning.bg-gradient">
                                <div class="card shadow-sm bg-warning.bg-gradient">
                                    <a href=""><img src="<?php echo $vinos['url'];?>" title="Informacion" class="bd-placeholder-img card-img-top" width="100%" height="10%" alt="<?php echo $vinos['nombre'];?>"></a>     
                                    <div class="card-body">
                                        <p class="card-text text-success text-center fw-bold">$<?php echo $vinos['precio'];?> ARS</p>
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

            <div class="bg-warning">
                  <span class="d-flex justify-content-center bg-warning text-dark fw-bold fs-3">CERVEZAS</span>
                </div>
                <div class="album py-5 bg-dark">
                  <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <?php
                        foreach($descendenteC as $cerveza){
                            ?>
                                <div class="col bg-warning.bg-gradient">
                                    <div class="card shadow-sm bg-warning.bg-gradient">
                                        <a href=""><img src="<?php echo $cerveza['url'];?>" title="Informacion" class="bd-placeholder-img card-img-top" width="100%" height="10%" alt="<?php echo $cerveza['nombre'];?>"></a>     
                                        <div class="card-body">
                                            <p class="card-text text-success text-center fw-bold">$<?php echo $cerveza['precio'];?> ARS</p>
                                            <div class="d-flex justify-content-between align-items-left">
                                                <div class="btn-group">
                                                    <span class="text-info fw-bold">Variedad: </span><span class="text-warning fw-bold"><?php echo $cerveza['variedad'];?></span>
                                                </div>
                                                <small class="text-muted fw-bold"><?php echo $cerveza['capacidad'];?>ml</small>
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
        if(isset($_POST['ascendentePrecio'])){
            $ascendenteV = mysqli_query($conex, "SELECT * FROM vinos ORDER BY precio DESC");
            $ascendenteC = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY precio DESC");
            ?>
                <div class="bg-warning">
                    <span class="d-flex justify-content-center bg-warning text-dark fw-bold fs-3">VINOS</span>
                    </div>
                    <div class="album py-5 bg-dark">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <?php
                            foreach($ascendenteV as $vinos){
                                ?>
                                    <div class="col bg-warning.bg-gradient">
                                        <div class="card shadow-sm bg-warning.bg-gradient">
                                            <a href=""><img src="<?php echo $vinos['url'];?>" title="Informacion" class="bd-placeholder-img card-img-top" width="100%" height="10%" alt="<?php echo $vinos['nombre'];?>"></a>     
                                            <div class="card-body">
                                                <p class="card-text text-success text-center fw-bold">$<?php echo $vinos['precio'];?> ARS</p>
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
                
                <div class="bg-warning">
                  <span class="d-flex justify-content-center bg-warning text-dark fw-bold fs-3">CERVEZAS</span>
                </div>
                <div class="album py-5 bg-dark">
                  <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                      <?php
                        foreach($ascendenteC as $cerveza){
                            ?>
                                <div class="col bg-warning.bg-gradient">
                                    <div class="card shadow-sm bg-warning.bg-gradient">
                                        <a href=""><img src="<?php echo $cerveza['url'];?>" title="Informacion" class="bd-placeholder-img card-img-top" width="100%" height="10%" alt="<?php echo $cerveza['nombre'];?>"></a>     
                                        <div class="card-body">
                                            <p class="card-text text-success text-center fw-bold">$<?php echo $cerveza['precio'];?> ARS</p>
                                            <div class="d-flex justify-content-between align-items-left">
                                                <div class="btn-group">
                                                    <span class="text-info fw-bold">Variedad: </span><span class="text-warning fw-bold"><?php echo $cerveza['variedad'];?></span>
                                                </div>
                                                <small class="text-muted fw-bold"><?php echo $cerveza['capacidad'];?>ml</small>
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