<?php 
    require("../con_db.php");

    $consulta = $conex->query("SELECT * FROM imagenes");

    if(isset($_POST['mostrar'])){
        if(strlen($_POST['nombreMostrar'])){
            $nombreMostrar = $_POST['nombreMostrar'];
            foreach($consulta as $imagenes){
                if($nombreMostrar == $imagenes['nombre']){
                    ?>
                        <img src="<?php echo $imagenes['url'];?>" class="img-fluid" alt="Imagen <?php echo $imagenes['nombre'];?>">
                    <?php
                }
            }
        }else{
            $_SESSION['mensajeImagen'] = '¡Ingrese Nombre de la imagen a buscar!';
            $_SESSION['mensajeColorImagen'] = 'info'; 
        }
    }

    

?>