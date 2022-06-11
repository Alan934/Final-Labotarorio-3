<?php require("con_db.php"); session_start(); include('includes/productos/vinos.php'); include('includes/productos/cervezas.php'); include('includes/productos/espumantes.php'); include('includes/productos/whiskys.php'); 
    if($_SESSION['cargo'] == 1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Administrador-Barpincho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a567a0b05a.js" crossorigin="anonymous"></script>
</head>

<body class="bodyAdmin">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <header class="container-fluid d-flex flex-wrap justify-content-center">
        <p class="text-dark fw-bold mb-0 p-0 fs-1 d-flex flex-wrap justify-content-center col-12">BARPINCHO</p>
        <p class="text-dark m-0 p-0 fs-2 fw-normal text-center fw-bold col-12">BIENVENIDO ADMINISTRADOR: <?=  $_SESSION['usuarioAdmin'];?>, Ingresaste: <?= $_COOKIE[$_SESSION['usuarioAdmin']]; ?></p>
        
        <nav class="navbar navbar-expand-lg p-2">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark fw-bold fs-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">AGREGAR PRODUCTOS</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <form class="text-center" method="POST">
                                    <li><a href="includes/admin/agregrarProductos/agregarVinos.php" class="btn dropdown-item bg-dark text-warning">VINOS</a></li>
                                    <li><a href="includes/admin/agregrarProductos/agregarWhiskys.php" class="btn dropdown-item bg-dark text-warning">WHISKYS</a></li>
                                    <li><a href="includes/admin/agregrarProductos/agregarCervezas.php" class="btn dropdown-item bg-dark text-warning">CERVEZAS</a></li>
                                    <li><a href="includes/admin/agregrarProductos/agregarEspumantes.php" class="btn dropdown-item bg-dark text-warning">ESPUMANTES</a></li>
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="m-1 container-100">
        <div class="w-100 d-flex flex-wrap justify-content-center text-center">
            <?php if(isset($_SESSION['mensajeAdmin'])){ ?>
                <div class="alert alert-<?= $_SESSION['mensajeColorAdmin']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensajeAdmin']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>
        <table class="table table-bordered border-dark table-striped bg-white">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Email</th>
                    <th scope="col">Fecha Registro</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query = "SELECT * FROM registro";
                    $resultadoAdmin = mysqli_query($conex, $query);
                    $i=1;
                    while($registrados = mysqli_fetch_array($resultadoAdmin)){
                ?>
                <tr>
                    <th scope="row"><?php echo $i++;?></th>
                    <td><?php echo $registrados['nombre'];?></td>
                    <td><?php echo $registrados['usuario'];?></td>
                    <td><?php echo $registrados['dni'];?></td>
                    <td><?php echo $registrados['email'];?></td>
                    <td><?php echo $registrados['fecha_reg'];?></td>
                    <td>
                        <a href="includes/admin/editar.php?dni=<?php echo $registrados['dni'];?>" class="btn btn-secondary"><i class="fas fa-marker"></i></a>
                        <a href="includes/admin/eliminar.php?dni=<?php echo $registrados['dni'];?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php include("includes/admin/mostrarProductosAdmin.php"); ?>
    </section>

    <footer class="text-center">
        <a href="includes/admin/cerrarAdmin.php"><button class="w-25 btn btn-lg btn-dark text-warning fw-bold m-3" name="atras" type="button">Cerrar Sesion</button></a>
    </footer>

</body>
</html>

<?php }else{
    header ("Location: index.php");
} ?>