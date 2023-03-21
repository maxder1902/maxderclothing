<?php
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('gest/conexion.php');

    $numero = $_POST['numero'];
    $calle = $_POST['calle'];
    $provincia = $_POST['provincia'];
    $producto = $_POST['producto'];

    if (!preg_match("/^[a-zA-Z0-9\s\-\/]+$/", $calle)) {
        $direccionErr = "La dirección no es válida";
    }

    if (!preg_match("/[a-zA-Z]/", $provincia)) {
        $provinciaErr = "Solo letras";
    }

    if (!preg_match("/[0-9]/", $producto)) {
        $productoErr = "Solo numeros";
    }

    $sentencia="UPDATE tienda SET 
    calle='$calle', 
    provincia='$provincia',
    productoStock = $producto
    WHERE numero = $numero";

    if (mysqli_query($c, $sentencia)) {

        echo "<br /><h2 style='padding: 4rem' >Datos modificados correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaTienda.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }

    else {
        die('Consulta no valida: ' .mysqli_error($c));
    }



    
}


include_once('marcoinf.php');



?>