<?php
    require("con_db.php");
    session_start();

    if(isset($_POST['registrarse'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['usuario']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['contrasena']) >= 1){
            $nombre = trim($_POST['nombre']);
            $usuario = trim($_POST['usuario']);
            $dni = trim(($_POST['dni']));
            $email = trim(($_POST['email']));
            $id_cargo = 2;
            /*$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);*/
            $contrasena = trim(($_POST['contrasena']));
            $fecha_reg = date("d/m/y");

            $consulta = "INSERT INTO registro(nombre, dni, email, contrasena, fecha_reg, usuario, id_cargo) VALUES ('$nombre', '$dni', '$email', '$contrasena', '$fecha_reg', '$usuario', '$id_cargo')";
            $resultado = mysqli_query($conex, $consulta);
            
            /*$filas = mysqli_fetch_array($resultado);

            if($filas['dni'] == $dni){
                ?>
                    <h3>¡Ya esta Registrado!</h3>
                <?php
            }else{
                
            }*/
            if($resultado){
                ?>
                    <h3 class="text-success">¡Registro completado! Inicie Sesion</h3>
                <?php
                
            }else{
                ?>
                    <h3 class="text-danger">¡Ocurrio un error!</h3>
                <?php
            }
        }else{
            ?>
                <h3 class="text-danger">¡Complete todos los campos!</h3>
            <?php
        }
    }
?>