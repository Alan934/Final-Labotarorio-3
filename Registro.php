<?php
    include("con_db.php");

    if(isset($_POST['registrarse'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1){
            $nombre = trim($_POST['nombre']);
            $dni = trim(($_POST['dni']));
            $email = trim(($_POST['email']));
            $contrasena = trim(($_POST['contrasena']));
            $fecha_reg = date("d/m/y");
            $consulta = "INSERT INTO registro(nombre, dni, email, contrasena, fecha_reg) VALUES ('$nombre', '$dni', '$email', '$contrasena', '$fecha_reg')";
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                    <h3>¡Registro completado!</h3>
                <?php
            }else{
                ?>
                    <h3>¡Ocurrio un error!</h3>
                <?php
            }
        }else{
            ?>
                <h3>¡Complete todos los campos!</h3>
            <?php
        }
    }
?>