<?php 
    session_start();
    if($_SESSION['cargo'] == 1){
        require("../../con_db.php");

        if(isset($_GET['dni'])){
            $dni = $_GET['dni'];
            $query = "DELETE FROM registro WHERE dni = $dni";
            $resultado = mysqli_query($conex, $query);
            if(!$resultado){
                die("Fallo al eliminar");
            }

            $_SESSION['mensajeAdmin'] = '!Eliminado Correctamente¡';
            $_SESSION['mensajeColorAdmin'] = 'success';

            header("Location: ../../admin.php");
        }

        if(isset($_GET['idVino'])){
            $id = $_GET['idVino'];
            $query = "DELETE FROM vinos WHERE id = $id";
            $resultado = mysqli_query($conex, $query);
            if(!$resultado){
                die("Fallo al eliminar");
            }
            $_SESSION['mensajeAdmin'] = '!Eliminado Correctamente¡';
            $_SESSION['mensajeColorAdmin'] = 'success';
            header("Location: ../../admin.php");
        }

        if(isset($_GET['idWhiskys'])){
            $id = $_GET['idWhiskys'];
            $query = "DELETE FROM whiskys WHERE id = $id";
            $resultado = mysqli_query($conex, $query);
            if(!$resultado){
                die("Fallo al eliminar");
            }
            $_SESSION['mensajeAdmin'] = '!Eliminado Correctamente¡';
            $_SESSION['mensajeColorAdmin'] = 'success';
            header("Location: ../../admin.php");
        }

        if(isset($_GET['idCervezas'])){
            $id = $_GET['idCervezas'];
            $query = "DELETE FROM cerveza WHERE id = $id";
            $resultado = mysqli_query($conex, $query);
            if(!$resultado){
                die("Fallo al eliminar");
            }
            $_SESSION['mensajeAdmin'] = '!Eliminado Correctamente¡';
            $_SESSION['mensajeColorAdmin'] = 'success';
            header("Location: ../../admin.php");
        }

        if(isset($_GET['idEspumantes'])){
            $id = $_GET['idEspumantes'];
            $query = "DELETE FROM espumantes WHERE id = $id";
            $resultado = mysqli_query($conex, $query);
            if(!$resultado){
                die("Fallo al eliminar");
            }
            $_SESSION['mensajeAdmin'] = '!Eliminado Correctamente¡';
            $_SESSION['mensajeColorAdmin'] = 'success';
            header("Location: ../../admin.php");
        }

    }else{
        header ("Location: ../../index.php");
    }
?>