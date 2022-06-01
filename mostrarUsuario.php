<?php 
    
    require("con_db.php");

    //$consulta = $conex->query("SELECT * FROM registro");

    if(isset($_POST['iniciarSesion'])){
        ?>
            <p class="text-dark fw-bold mb-0 p-0 fs-1 d-flex flex-wrap justify-content-center col-9">BIENVENIDO:<?php session_start();$_SESSION['bar']['usuario']; ?></p>        
        <?php
       
    }

?>