<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <form class="row g-3" method="POST">
        <h1>Registrarse</h1>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nombre Completo</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre Completo">
        </div>
        <div class="col-md-6">
          <label for="" class="form-label">DNI</label>
          <input type="number" name="dni" class="form-control" placeholder="DNI">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Email" id="inputEmail4">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Contraseña</label>
          <input type="password" name="contrasena" class="form-control" placeholder="Contraseña" id="inputPassword4">
        </div>
        <div class="col-12">
          <button type="submit" name="registrarse" class="btn btn-primary">Registrarse</button>
        </div>
    </form>
    <?php
      include("Registro.php");
    ?>
</body>
</html>