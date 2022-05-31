<?php 
    require("../con_db.php");

    $consulta = $conex->query("SELECT * FROM imagenes");

    if(isset($_POST['mostrar'])){
        if(strlen($_POST['nombreMostrar'])){
            $nombreMostrar = $_POST['nombreMostrar'];
            foreach($consulta as $imagenes){
                if($nombreMostrar == $imagenes['nombre']){
                    ?>
                        <img src="<?php echo $imagenes['url'];?>" class="img-fluid" alt="Imagen base datos">
                    <?php
                }
            }
        }else{
            ?>
                <h3 class="text-danger">¡Ingrese Nombre de la imagen a buscar!</h3>
            <?php
        }
    }

    

?>