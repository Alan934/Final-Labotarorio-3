<?php require("../../../con_db.php"); session_start(); 
    if($_SESSION['cargo'] == 1){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../Style.css">
    <title>Editar-Cervezas-Barpincho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<?php 
    if(isset($_GET['idCervezas'])){
        $id = $_GET['idCervezas'];
        $query = "SELECT * FROM cerveza WHERE id = $id";
        $resultado = mysqli_query($conex, $query);
        if(mysqli_num_rows($resultado) == 1){
            $arrayEditar = mysqli_fetch_array($resultado);
            $nombre = $arrayEditar['nombre'];
            $url = $arrayEditar['url'];
            $precio = $arrayEditar['precio'];
            $capacidad = $arrayEditar['capacidad'];
            $variedad = $arrayEditar['variedad'];
        }
    }

    if(isset($_POST['confirmar'])){
        $nombre = trim($_POST['nombre']);
        $url = trim($_POST['url']);
        $precio = trim(($_POST['precio']));
        $capacidad = trim(($_POST['capacidad']));
        $variedad = trim(($_POST['variedad']));
        
        $query = "UPDATE cerveza set nombre = '$nombre', url = '$url', precio = '$precio', capacidad = '$capacidad', variedad = '$variedad' WHERE id = $id";
        mysqli_query($conex, $query);

        $_SESSION['mensajeAdmin'] = '!Editado Correctamente Cerveza¡';
        $_SESSION['mensajeColorAdmin'] = 'success';

        header ("Location: ../../../admin.php");
    }
?>

<body class="bodyEditar">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <main class="form-signin w-50 m-auto">
        <br><br><br><br>
        <form action="editarCervezas.php?idCervezas=<?php echo $_GET['idCervezas']; ?>" method="POST">
            <h1 class="h3 mb-3 text-warning text-center fw-bold">EDITAR Cerveza</h1>
            <div class="form-floating my-1">
                <input type="text" class="form-control" value="<?php echo $nombre ?>" name="nombre" id="floatingInput" placeholder="Nombre Completo">
                <label for="floatingInput">Actualizar Nombre</label>
            </div>
            <div class="form-floating my-1">
                <input type="text" class="form-control" value="<?php echo $variedad ?>" name="variedad" id="floatingInput" placeholder="Variedad">
                <label for="floatingInput">Actualizar Variedad</label>
            </div>
            <div class="form-floating my-1">
                <input type="text" class="form-control" value="<?php echo $url ?>" name="url" id="floatingInput" placeholder="URL">
                <label for="floatingInput">Actualizar URL</label>
            </div>
            <div class="form-floating my-1">
                <input type="number" class="form-control" value="<?php echo $precio ?>" name="precio" id="floatingInput" placeholder="Precio">
                <label for="floatingInput">Actualizar Precio</label>
            </div>
            <div class="form-floating my-1">
                <input type="number" class="form-control" value="<?php echo $capacidad ?>" name="capacidad" id="floatingInput" placeholder="Capacidad">
                <label for="floatingInput">Actualizar Capacidad</label>
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
    header ("Location: ../../../index.php");
} ?>