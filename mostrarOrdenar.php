<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Productos</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <header>
        <nav class="container-fluid bg-warning d-flex flex-wrap justify-content-center">
            <p class="text-dark fw-bold mb-0 p-0 fs-1 d-flex flex-wrap justify-content-center col-9">BARPINCHO Catalogo</p>
        </nav>

        <nav class="navbar navbar-expand-lg bg-dark p-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img class="imgHeader" src="imagenes/logos/bar2.png" alt="Logo Bar"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">PRECIO</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <form method="POST">
                                    <li><button class="btn dropdown-item bg-dark text-warning" name="ascendentePrecio">Ascendente<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/></svg></button></li>
                                    <li><button class="btn dropdown-item bg-dark text-warning" name="descendentePrecio">Descendente<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/></svg></button></li>
                                </form>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">CAPACIDAD</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <form method="POST">
                                    <li><button class="btn dropdown-item bg-dark text-warning" name="ascendenteCapacidad">Ascendente<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/></svg></button></li>
                                    <li><button class="btn dropdown-item bg-dark text-warning" name="descendenteCapacidad">Descendente<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/></svg></button></li>
                                </form>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-warning" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">NOMBRE</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <form method="POST">
                                    <li><button class="btn dropdown-item bg-dark text-warning" name="ascendenteNombre">Ascendente<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 12a.5.5 0 0 0 .5-.5V5.707l2.146 2.147a.5.5 0 0 0 .708-.708l-3-3a.5.5 0 0 0-.708 0l-3 3a.5.5 0 1 0 .708.708L7.5 5.707V11.5a.5.5 0 0 0 .5.5z"/></svg></button></li>
                                    <li><button class="btn dropdown-item bg-dark text-warning" name="descendenteNombre">Descendente<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/></svg></button></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <?php
        include("ordenar.php");
    ?>
    
    <div class="container">
      <footer class="d-flex flex-wrap justify-content-between align-items-center py-2 my-3">
        <div class="col-md-4 d-flex align-items-center">
          <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Barpincho</span>
        </div>
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
          <li class="ms-3"><a target="_blank" class="text-muted" href="https://instagram.com/"><img src="imagenes/logos/logoinstagram.png" class="bi" width="24" height="24" alt="Logo Instagram"></svg></a></li>
          <li class="ms-3"><a target="_blank" class="text-muted" href="https://twitter.com/"><img src="imagenes/logos/logotwitter.png" class="bi" width="24" height="24" alt="Logo twitter"></svg></a></li>
          <li class="ms-3"><a target="_blank" class="text-muted" href="https://www.facebook.com/alangabriel.sanjurjo"><img src="imagenes/logos/logoFacebook.png" class="bi" width="24" height="24" alt="Logo Facebook"></a></li>
        </ul>
      </footer>
    </div>
</body>
</html>