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
            $query ="SELECT*FROM registro WHERE dni = '$dni'";
            $validaDni = mysqli_query($conex, $query);
            if(mysqli_num_rows($validaDni) > 0){
                $_SESSION['mensajeRegistro'] = '¡Usuario existente!';
                $_SESSION['mensajeColorRegistro'] = 'info';    
            }else{
                $consulta = "INSERT INTO registro(nombre, dni, email, contrasena, fecha_reg, usuario, id_cargo) VALUES ('$nombre', '$dni', '$email', '$contrasena', '$fecha_reg', '$usuario', '$id_cargo')";
                $resultado = mysqli_query($conex, $consulta);
                
                if($resultado){
                    $_SESSION['mensajeRegistro'] = '¡Registro completado! Inicie Sesion';
                    $_SESSION['mensajeColorRegistro'] = 'success'; 
                }else{
                    $_SESSION['mensajeRegistro'] = '¡Ocurrio un error!';
                    $_SESSION['mensajeColorRegistro'] = 'danger';
                }
            }
        }else{
            $_SESSION['mensajeRegistro'] = '¡Complete todos los campos!';
            $_SESSION['mensajeColorRegistro'] = 'info';
        }
    }
?>