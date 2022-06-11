<?php 
    require("../con_db.php");
    session_start();

    if(isset($_POST['aceptar'])){
        if(isset($_FILES['archivo']['name'])){
            if(file_exists($_FILES['archivo']['tmp_name']) && strlen($_POST['nombre']) >= 1){
                $url = '../imagenes/subidas/'.$_FILES['archivo']['name'];
                $nombreimg = $_POST['nombre'];
                if(move_uploaded_file($_FILES['archivo']['tmp_name'], '../imagenes/subidas/'.$_FILES['archivo']['name'])){
                    $query = $conex->query("INSERT INTO imagenes(nombre, url) VALUES ('".$nombreimg."', '".$url."')");
                    $_SESSION['mensajeImagen'] = '¡Subida con exito¡';
                    $_SESSION['mensajeColorImagen'] = 'success'; 
                }
            }else{
                $_SESSION['mensajeImagen'] = '¡Complete todos los campos!';
                $_SESSION['mensajeColorImagen'] = 'warning'; 
            }
            /*
            $nombre = $_POST['nombre'];
            $tamanoArchivo = $_FILES['archivo']['size'];
            $imagenSubida= fopen($_FILES['archivo']['tmp_name'], 'r');
            $binariosImagen = fread($imagenSubida, $tamanoArchivo);

            $binariosImagen= mysqli_escape_string($conex, $binariosImagen);
            $query = "INSERT INTO imagenes (nombre, imagen) VALUES ('".$nombre."', '".$binariosImagen."')";

            $resultado = mysqli_query($conex, $query);

            if($resultado){
                ?>
                    <h3>¡Subida con exito¡</h3>
                <?php
            }else{
                ?>
                    <h3>¡Error¡</h3>
                <?php
            }*/
        }
    }

?>