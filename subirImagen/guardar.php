<?php 
    require("../con_db.php");

    if(isset($_POST['aceptar'])){
        if(isset($_FILES['archivo']['name'])){
            if(file_exists($_FILES['archivo']['tmp_name']) && strlen($_POST['nombre']) >= 1){
                $url = '../imagenes/subidas/'.$_FILES['archivo']['name'];
                $nombreimg = $_POST['nombre'];
                if(move_uploaded_file($_FILES['archivo']['tmp_name'], '../imagenes/subidas/'.$_FILES['archivo']['name'])){
                    $query = $conex->query("INSERT INTO imagenes(nombre, url) VALUES ('".$nombreimg."', '".$url."')");
                    ?>
                        <h3 class="text-success">¡Subida con exito¡</h3>
                    <?php
                }
            }else{
                ?>
                    <h3 class="text-danger">¡Complete los Campos¡</h3>
                <?php
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