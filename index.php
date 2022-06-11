<?php 
  require("con_db.php");
  include("includes/head.php");  
?>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <?php 
      try {
      ?> 
      <?php include("includes/header.php") ?>

        <section>
          <!--Vinos-->
          <div>
            <?php 
              include("includes/productos/vinos.php"); 
              mostrarPaginacionVinos($consultaVino);
            ?>
          </div>
            <!--Espumantes-->
          <div>
            <?php 
              include("includes/productos/espumantes.php");
              mostrarPaginacionEspumantes($consultaEspumantes);
            ?>        
          </div>
            <!--whiskys-->
          <div>
            <?php 
              include("includes/productos/whiskys.php");
              mostrarWhiskys($consultaWhiskys);
            ?>
          </div>
          <!--Cervezas-->
          <div>
            <?php 
              include("includes/productos/cervezas.php");
              mostrarPaginacionCerveza($consultaCerveza);
            ?>
          </div>
        </section>

        <div>
          <?php 
            $totalRegistros = mysqli_num_rows($queryVino);
            $totalPaginas = ceil($totalRegistros/$registrosMostrar);
          ?>
          <nav aria-label="Page navigation example d-flex flex-wrap justify-content-center">
            <ul class="pagination d-flex flex-wrap justify-content-center mt-2 mb-0">
              <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo "1";?>">Anterior</a></li>
              <?php 
                for($i=1; $i <= $totalPaginas; $i++){
                  ?> <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo "$i";?>"><?php echo "$i" ?></a></li> <?php
                }
              ?>
              <li class="page-item"><a class="page-link" href="index.php?pagina=<?php echo "$totalpaginas";?>">Siguiente</a></li>
            </ul>
          </nav>
          <!--<nav class="bg-dark border-top border-warning m-0 py-2 d-flex flex-wrap justify-content-center">
            <ul class="pagination pagination-lg">
              <li class="page-item"><a class="page-link" href="index.php">1</a></li>
              <li class="page-item"><a class="page-link" href="subirImagen/subirArchivo.php">2</a></li>
            </ul>
          </nav>-->
        </div>

        <?php include("includes/footer.php") ?>
      <?php
    } catch (Exception $e) {
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
    }
  ?>
    
</body>
</html>