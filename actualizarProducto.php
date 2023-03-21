<?php
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('gest/conexion.php');


    $idProd = $_POST['idProd'];
    $nombre = $_POST['nombreProducto'];
    $talla = $_POST['talla'];
    $precio = $_POST['precio'];
    $composicion = $_POST['composicion'];
    $cuidados = $_POST['cuidados'];
    $imagen = $_POST['imagen'];
    $prenda = $_POST['prenda'];

    
    if (!preg_match("/[a-zA-Z]/", $nombre)) {
        $nombreErr = "Solo letras";
    }

    if (!preg_match("/[A-Z]/", $talla)) {
        $tallaErr = "Solo mayusculas";
    }

    if (!preg_match("/[0-9]/", $precio)) {
        $precioErr = "Solo numeros";
    }

    if (!preg_match("/[a-zA-Z]/", $composicion)) {
        $nombreErr = "Solo letras";
    }

    if (!preg_match("/[a-zA-Z]/", $cuidados)) {
        $tallaErr = "Solo mayusculas";
    }

    if (!preg_match("/^.*\.(jpg|jpeg|png|gif)$/i", $imagen)) {
        $imagenErr = "Formato no valido";
    }

    if (!preg_match("/[a-z]/", $prenda)) {
        $tallaErr = "Entrada no valida";
    }

    $sentencia="UPDATE producto SET 
    nombre='$nombre', 
    talla='$talla', 
    precio='$precio',
    composicion = '$composicion',
    cuidados = '$cuidados',
    imagen = '$imagen',
    prenda = '$prenda'
    WHERE idProd = $idProd";

    if (mysqli_query($c, $sentencia)) {

        echo "<br /><h2 style='padding: 4rem' >Datos modificados correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaProducto.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }

    else {
        die('Consulta no valida: ' .mysqli_error($c));
    }



    
}


include_once('marcoinf.php');



?>