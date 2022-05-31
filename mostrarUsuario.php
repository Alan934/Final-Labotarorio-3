<?php 
    
    require("con_db.php");

    //$consulta = $conex->query("SELECT * FROM registro");

    if(isset($_POST['iniciarSesion'])){
        /*foreach($consulta as $usuario){

        }*/
        ?>
            <p class="text-dark fw-bold mb-0 p-0 fs-1 d-flex flex-wrap justify-content-center col-9"><?php session_start(); echo "Bienvenido: ", $_SESSION['bar']['usuario']; ?></p>        
        <?php
       
    }

?>