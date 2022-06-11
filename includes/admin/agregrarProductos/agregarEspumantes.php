<?php require("../../../con_db.php"); session_start();; 
    if($_SESSION['cargo'] == 1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar-Espumantes-Admin-Barpincho</title>
    <link rel="stylesheet" href="../../../Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<?php 
if(isset($_POST['confirmar'])){
    if(isset($_FILES['archivo']['name'])){
        if(file_exists($_FILES['archivo']['tmp_name']) && strlen($_POST['nombre']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['capacidad']) >= 1){
            $url = 'imagenes/productos/espumantes/'.$_FILES['archivo']['name'];
            $nombre = trim($_POST['nombre']);
            $precio = trim($_POST['precio']);
            $capacidad = trim($_POST['capacidad']);
            if(move_uploaded_file($_FILES['archivo']['tmp_name'], '../../../imagenes/productos/espumantes/'.$_FILES['archivo']['name'])){
                $query = $conex->query("INSERT INTO espumantes(nombre, url, precio, capacidad) VALUES ('".$nombre."', '".$url."', '".$precio."', '".$capacidad."')");
                $_SESSION['mensajeEspumantes'] = '¡Whisky Agregado¡';
                $_SESSION['mensajeColorEspumantes'] = 'success'; 
            }
        }else{
            $_SESSION['mensajeEspumantes'] = '¡Complete todos los campos¡';
            $_SESSION['mensajeColorEspumantes'] = 'info'; 
        }
    }
}
?>

<body class="bodyAgregarProducto">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <main class="form-signin w-50 m-auto">
        <br><br><br><br>
        <div class="w-100 d-flex flex-wrap justify-content-center text-center">
            <?php if(isset($_SESSION['mensajeEspumantes'])){ ?>
                <div class="alert alert-<?= $_SESSION['mensajeColorEspumantes']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensajeEspumantes']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php } ?>
        </div>
        <form action="agregarEspumantes.php" method="POST" enctype="multipart/form-data">
            <h1 class="h3 mb-3 text-warning text-center fw-bold">AGREGAR ESPUMANTES</h1>
            <div class="form-floating my-1">
                <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="Nombre">
                <label for="floatingInput">Nombre</label>
            </div>
            <div class="form-floating my-1">
                <input type="file" class="form-control" name="archivo">
            </div>
            <div class="form-floating my-1">
                <input type="number" class="form-control" name="precio" id="floatingInput" placeholder="Precio">
                <label for="floatingInput">Precio</label>
            </div>
            <div class="form-floating my-1">
                <input type="number" class="form-control" name="capacidad" id="floatingInput" placeholder="Capacidad">
                <label for="floatingInput">Capacidad</label>
            </div>
            <div class="col text-center py-1">
                <button class="w-75 btn btn-lg btn-warning fw-bold" name="confirmar" type="submit">Confirmar</button>
                <a href="../../../admin.php"><button class="w-50 btn btn-lg btn-warning fw-bold my-1" type="button">Atras</button></a>
            </div>
            <p class="mt-3 mb-1 text-center">&copy; 2022</p>
        </form>
    </main>


</body>
</html>

<?php }else{
    header ("Location: index.php");
} ?>


