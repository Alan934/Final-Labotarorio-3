<?php
      include("Registro.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Registro</title>
    <script type="text/javascript" src="validar.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body class="bodyRegistro">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    <main class="form-signin w-50 m-auto">
        <br><br><br><br>
        <form name="formRegistro" method="post" onsubmit="return validarRegistro();">
            <h1 class="h3 mb-3 text-warning text-center fw-bold">REGISTRO</h1>

            <div class="form-floating my-1">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating my-1">
                <input type="text" class="form-control" name="nombre" id="floatingInput" placeholder="Nombre Completo">
                <label for="floatingInput">Nombre Completo</label>
            </div>
            <div class="form-floating my-1">
                <input type="text" class="form-control" name="usuario" id="floatingInput" placeholder="Usuario">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating my-1">
                <input type="number" class="form-control" name="dni" id="floatingInput" placeholder="DNI">
                <label for="floatingInput">DNI</label>
            </div>
            <div class="form-floating my-1">
                <input type="password" class="form-control" name="contrasena" id="floatingPassword" placeholder="Contraseña">
                <label for="floatingPassword">Contraseña</label>
            </div>
            <div class="col text-center py-1">
                <button class="w-75 btn btn-lg btn-warning fw-bold" name="registrarse" type="submit">Registrarse</button>
                <a href="FormIngreso.php"><button class="w-50 btn btn-lg btn-warning fw-bold my-1" name="ingresar" type="button">Iniciar Sesion</button></a>
                <a href="index.php"><button class="w-50 btn btn-lg btn-warning fw-bold my-1" name="atras" type="button">Atras</button></a>
            </div>
            <p class="mt-3 mb-1 text-center">&copy; 2022</p>
        </form>
        <!--         <div class="w-100 bg-info d-flex flex-wrap justify-content-center text-center">
            <p class="text-dark" id="validaciones"></p>
        </div> -->
        <div class="w-100 d-flex flex-wrap justify-content-center text-center">
            <?php if(isset($_SESSION['mensajeRegistro'])){ ?>
                <div class="alert alert-<?= $_SESSION['mensajeColorRegistro']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['mensajeRegistro']; ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset(); } ?>
        </div>
    </main>
</body>
</html>
