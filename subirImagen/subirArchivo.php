<?php  include("guardar.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Subir Imagenes</title>
</head>
<body class="bodyArchivo">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <section>
      <br><br><br><br>
      <main class="form-signin w-50 m-auto">
        <form method="POST" enctype="multipart/form-data">
            <h1 class="h3 mb-3 fw-normal text-center fw-bold">SUBIR IMAGEN</h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="Nombre Imagen" value="">
                <label for="floatingInput">Nombre</label>
            </div>

            <div>
                <input type="file" class="form-control my-1" name="archivo">
            </div>

            <div class="col text-center py-1">
              <button class="w-75 btn btn-lg btn-warning fw-bold" name="aceptar" type="submit">Enviar</button>
            </div>
          </form>
          <div class="w-100 d-flex flex-wrap justify-content-center text-center">
            <?php if(isset($_SESSION['mensajeImagen'])){ ?>
              <div class="alert alert-<?= $_SESSION['mensajeColorImagen']; ?> alert-dismissible fade show" role="alert">
                  <?= $_SESSION['mensajeImagen']; ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            <?php session_unset(); } ?>
          </div>
      </main>

      <br><br><br><br>
      
      <main class="form-signin w-50 m-auto">
        
        <form method="POST" enctype="multipart/form-data">
            <h1 class="h3 mb-3 fw-normal text-center fw-bold">MOSTRAR IMAGEN</h1>
            <div class="form-floating">
                <input type="text" class="form-control" name="nombreMostrar" id="floatingInput" placeholder="Nombre Imagen" value="">
                <label for="floatingInput">Nombre Imagen a mostrar</label>
            </div>

            <div class="col text-center py-1">
              <button class="w-75 btn btn-lg btn-warning fw-bold" name="mostrar" type="submit">Mostrar</button>
            </div>
          </form>
          <?php include("mostrarArchivo.php"); ?>
      </main>

    </section>

    <br><br><br><br>
    
    <div>
      <nav class="bg-dark d-flex flex-wrap justify-content-center">
        <ul class="pagination pagination-lg">
        <li class="page-item"><a class="page-link" href="../index.php">1</a></li>
          <li class="page-item"><a class="page-link" href="subirArchivo.php">2</a></li>
        </ul>
      </nav>
    </div>

    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 my-3">
        <div class="col-md-4 d-flex align-items-center">
          <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Barpincho</span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a target="_blank" class="text-muted" href="https://instagram.com/"><img src="../imagenes/logos/logoinstagram.png" class="bi" width="24" height="24" alt="Logo Instagram"></svg></a></li>
          <li class="ms-3"><a target="_blank" class="text-muted" href="https://twitter.com/"><img src="../imagenes/logos/logotwitter.png" class="bi" width="24" height="24" alt="Logo twitter"></svg></a></li>
          <li class="ms-3"><a target="_blank" class="text-muted" href="https://www.facebook.com/alangabriel.sanjurjo"><img src="../imagenes/logos/logoFacebook.png" class="bi" width="24" height="24" alt="Logo Facebook"></a></li>
        </ul>
      </footer>
    </div>
    <?php

    ?>
</body>
</html>