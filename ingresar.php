<?php 
    require("con_db.php");

    if(isset($_POST['iniciarSesion'])){
        if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1){
            $contrasena = $_POST['contrasena'];
            $usuario = $_POST['usuario'];

            $query ="SELECT*FROM registro WHERE contrasena = '$contrasena' AND usuario = '$usuario'";
            $consultas = mysqli_query($conex, $query);
            $array = mysqli_fetch_array($consultas);

            if($array['id_cargo'] == 1){//admin
                header("location:admin.php");
            }else if($array['id_cargo'] == 2){//usuario
                header("location:Index.php");
                session_start();
                $_SESSION['bar']['usuario'] = $array['usuario'];
                include("mostrarUsuario.php");
            }else{
                ?>
                    <h3 class="text-danger">¡Datos incorrectos!</h3>
                <?php
            }
        }else{
            ?>
                <h3 class="text-danger">¡Complete todos los campos!</h3>
            <?php
        }
    }
?>