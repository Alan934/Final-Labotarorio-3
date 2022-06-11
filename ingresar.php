<?php 
    require("con_db.php");
    session_start();

    if(isset($_POST['iniciarSesion'])){
        if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1){
            $contrasena = $_POST['contrasena'];
            $usuario = $_POST['usuario'];

            $query ="SELECT*FROM registro WHERE contrasena = '$contrasena' AND usuario = '$usuario'";
            $consultas = mysqli_query($conex, $query);
            if(mysqli_num_rows($consultas) > 0){
                $array = mysqli_fetch_array($consultas);

                $_SESSION['cargo'] = $array['id_cargo'];
                
                if($array['id_cargo'] == 1){//admin
                    $_SESSION['usuarioAdmin'] = $usuario;
                    agregarCookie($usuario, $contrasena);
                    if(isset($_COOKIE[$usuario])){
                        $cont = $_COOKIE[$usuario];
                        setcookie($usuario, $cont +1);
                    }else{
                        setcookie($usuario, 1);
                    }
                    header("location:admin.php");
                    exit;
                }else if($array['id_cargo'] == 2){//usuario
                    $_SESSION['usuario'] = $array['usuario'];
                    agregarCookie($usuario, $contrasena);
                    header("location:Index.php");
                    exit;
                }
            }else{
                $_SESSION['mensajeIngreso'] = '¡Datos incorrectos! <a href="FormRegistro.php" class="alert-link">Registrese</a>.';
                $_SESSION['mensajeColorIngreso'] = 'success';
            }
        }else{
            $_SESSION['mensajeIngreso'] = '¡Complete todos los campos!';
            $_SESSION['mensajeColorIngreso'] = 'info'; 

        }
    }

    function agregarCookie($usuario, $contrasena) : void{
        if(isset($_POST['recordarDatos'])){
            setcookie("usuario", $usuario);
            setcookie("contrasena", $contrasena);
        }
    }
?>