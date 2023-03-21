<?php
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('gest/conexion.php');


    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $sexo = $_POST['sexo'];
    $ventas = $_POST['ventas'];

    if (!preg_match("/[a-zA-Z]/", $nombre)) {
        $Error = "Solo letras";
    }

    if (!preg_match("/[a-zA-Z]/", $apellido)) {
        $Error = "Solo letras";
    }

    if (!preg_match("/[0-9]/", $ventas)) {
        $Error = "Solo numeros";
    }

    $sentencia="UPDATE vendedor SET 
    nombre='$nombre', 
    apellidos='$apellido', 
    sexo='$sexo',
    cantidadVendida = $ventas
    WHERE idVend = $id";

    if (mysqli_query($c, $sentencia)) {

        echo "<br /><h2 style='padding: 4rem' >Datos modificados correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaVendedor.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }

    else {
        die('Consulta no valida: ' .mysqli_error($c));
    }



    
}


include_once('marcoinf.php');



?>