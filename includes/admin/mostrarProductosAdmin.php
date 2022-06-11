<?php 
    if($_SESSION['cargo'] == 1){

        $queryVinos = "SELECT * FROM vinos";
        $resultadoVinos = mysqli_query($conex, $queryVinos);
        tablaVinos($resultadoVinos);
        
        $queryWhiskys = "SELECT * FROM whiskys";
        $resultadoWhiskys = mysqli_query($conex, $queryWhiskys);
        tablaWhiskys($resultadoWhiskys);

        $queryCervezas = "SELECT * FROM cerveza";
        $resultadoCervezas = mysqli_query($conex, $queryCervezas);
        tablaCervezas($resultadoCervezas);

        $queryEspumantes = "SELECT * FROM espumantes";
        $resultadoEspumantes = mysqli_query($conex, $queryEspumantes);
        tablaEspumantes($resultadoEspumantes);
    }
?>