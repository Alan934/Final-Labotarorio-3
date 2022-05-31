<?php 
    include("con_db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Ingresar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bodyIngreso">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <br><br><br><br>
    <main class="form-signin w-50 m-auto">
        <form method="post">
            <h1 class="h3 mb-3 text-center fw-bold text-warning">INICIO DE SESION</h1>

            <div class="form-floating my-1">
                <input type="text" class="form-control" name="usuario" id="floatingInput" placeholder="Usuario">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating my-1">
                <input type="password" class="form-control" name="contrasena" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="col text-center py-1">
                <a href="index.php"><button class="w-75 btn btn-lg btn-warning fw-bold" name="iniciarSesion" type="submit">Iniciar Sesion</button></a>
                <a href="index.php"><button class="w-50 btn btn-lg btn-warning fw-bold my-1" type="button">Inicio</button></a>
            </div>
            <p class="mt-3 mb-1 text-center">&copy; 2022</p>
        </form>
    </main>

    <?php 
        include("ingresar.php");
        include("ingresar.php");
    ?>
</body>
</html>