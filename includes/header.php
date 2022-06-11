    <header>
          <nav class="container-fluid bg-warning d-flex flex-wrap justify-content-center">
            <p class="text-dark fw-bold mb-0 p-0 fs-1 d-flex flex-wrap justify-content-center col-8">BARPINCHO</p>
            <?php 
                session_start();
                if(isset($_SESSION['usuario'])){
                  ?>
                    <p class="text-dark fw-bold mb-0 p-0 fs-2 d-flex flex-wrap justify-content-rigth col">BIENVENIDO: <?= $_SESSION['usuario'] ?></p>        
                  <?php
                  session_unset(); session_destroy();
                }
            ?>
            <button class="btn btn-dark-outline-success btn-dark btn-sm" type="button"><a href="FormRegistro.php" class="nav-link">Ingresar</a></button>
          </nav>

          <nav class="navbar navbar-expand-lg bg-dark p-2">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img class="imgHeader" src="imagenes/logos/bar2.png" alt="Logo Bar"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <button class="btn" name="btnVinos"><a class="nav-link active link-warning" aria-current="page" href="mostrarOrdenar.php">VINOS</a></button>
                  </li>
                  <li class="nav-item">
                    <button class="btn"><a class="nav-link active link-warning" aria-current="page" href="mostrarOrdenar.php">ESPUMANTES</a></button>
                  </li>
                  <li class="nav-item">
                    <button class="btn"><a class="nav-link active link-warning" aria-current="page" href="mostrarOrdenar.php">WHISKYS</a></button>
                  </li>
                  <li class="nav-item">
                    <button class="btn"><a class="nav-link active link-warning" aria-current="page" href="mostrarOrdenar.php">CERVEZA</a></button>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="email" placeholder="Correo electronico" aria-label="email">
                  <button class="btn btn-warning-outline-success btn-warning" type="button">Subscribirse</button>
                </form>
              </div>
            </div>
          </nav>
    </header>