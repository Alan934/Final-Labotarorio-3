<?php 
    include("con_db.php");
    include("includes/productos/vinos.php");
    include("includes/productos/espumantes.php");
    include("includes/productos/whiskys.php");
    include("includes/productos/cervezas.php");
    if(isset($_POST['descendentePrecio']) || (!isset($_POST['descendentePrecio']) && !isset($_POST['ascendentePrecio']) && !isset($_POST['descendenteCapacidad']) && !isset($_POST['ascendenteCapacidad']) && !isset($_POST['descendenteNombre']))){
        $descendenteVinos = mysqli_query($conex, "SELECT * FROM vinos ORDER BY precio ASC");
        $descendenteEspumantes = mysqli_query($conex, "SELECT * FROM whiskys ORDER BY precio ASC");
        $descendenteWhiskys = mysqli_query($conex, "SELECT * FROM espumantes ORDER BY precio ASC");
        $descendenteCervezas = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY precio ASC");
        mostrarVinos($descendenteVinos);
        mostrarEspumantes($descendenteEspumantes);
        mostrarWhiskys($descendenteWhiskys);
        mostrarCerveza($descendenteCervezas);
    }
    if(isset($_POST['ascendentePrecio'])){
        $ascendenteVinos = mysqli_query($conex, "SELECT * FROM vinos ORDER BY precio DESC");
        $ascendenteEspumantes = mysqli_query($conex, "SELECT * FROM whiskys ORDER BY precio DESC");
        $ascendenteWhiskys = mysqli_query($conex, "SELECT * FROM espumantes ORDER BY precio DESC");
        $ascendenteCervezas = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY precio DESC");
        mostrarVinos($ascendenteVinos);
        mostrarEspumantes($ascendenteEspumantes);
        mostrarWhiskys($ascendenteWhiskys);
        mostrarCerveza($ascendenteCervezas);
    }

    if(isset($_POST['descendenteCapacidad'])){
        $descendenteVinos = mysqli_query($conex, "SELECT * FROM vinos ORDER BY capacidad ASC");
        $descendenteEspumantes = mysqli_query($conex, "SELECT * FROM whiskys ORDER BY capacidad ASC");
        $descendenteWhiskys = mysqli_query($conex, "SELECT * FROM espumantes ORDER BY capacidad ASC");
        $descendenteCervezas = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY capacidad ASC");
        mostrarVinos($descendenteVinos);
        mostrarEspumantes($descendenteEspumantes);
        mostrarWhiskys($descendenteWhiskys);
        mostrarCerveza($descendenteCervezas);
    }
    if(isset($_POST['ascendenteCapacidad'])){
        $ascendenteVinos = mysqli_query($conex, "SELECT * FROM vinos ORDER BY capacidad DESC");
        $ascendenteEspumantes = mysqli_query($conex, "SELECT * FROM whiskys ORDER BY capacidad DESC");
        $ascendenteWhiskys = mysqli_query($conex, "SELECT * FROM espumantes ORDER BY capacidad DESC");
        $ascendenteCervezas = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY capacidad DESC");
        mostrarVinos($ascendenteVinos);
        mostrarEspumantes($ascendenteEspumantes);
        mostrarWhiskys($ascendenteWhiskys);
        mostrarCerveza($ascendenteCervezas);
    }

    if(isset($_POST['descendenteNombre'])){
        $descendenteVinos = mysqli_query($conex, "SELECT * FROM vinos ORDER BY nombre ASC");
        $descendenteEspumantes = mysqli_query($conex, "SELECT * FROM whiskys ORDER BY nombre ASC");
        $descendenteWhiskys = mysqli_query($conex, "SELECT * FROM espumantes ORDER BY nombre ASC");
        $descendenteCervezas = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY nombre ASC");
        mostrarVinos($descendenteVinos);
        mostrarEspumantes($descendenteEspumantes);
        mostrarWhiskys($descendenteWhiskys);
        mostrarCerveza($descendenteCervezas);
    }
    if(isset($_POST['ascendenteNombre'])){
        $ascendenteVinos = mysqli_query($conex, "SELECT * FROM vinos ORDER BY nombre DESC");
        $ascendenteEspumantes = mysqli_query($conex, "SELECT * FROM whiskys ORDER BY nombre DESC");
        $ascendenteWhiskys = mysqli_query($conex, "SELECT * FROM espumantes ORDER BY nombre DESC");
        $ascendenteCervezas = mysqli_query($conex, "SELECT * FROM cerveza ORDER BY nombre DESC");
        mostrarVinos($ascendenteVinos);
        mostrarEspumantes($ascendenteEspumantes);
        mostrarWhiskys($ascendenteWhiskys);
        mostrarCerveza($ascendenteCervezas);
    }

    
?>