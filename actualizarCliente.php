<?php
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('gest/conexion.php');


    $idCliente = $_POST['idCliente'];
    $nombreClienteEditado = $_POST['nombreCliente'];
    $apellidoCliente = $_POST['apellidoCliente'];
    $sexo = $_POST['sexo'];
    $numeroVisitas = $_POST['numeroVisitas'];

    if (!preg_match("/[a-zA-Z]/", $nombreClienteEditado)) {
        $nombreErr = "Solo letras";
    }

    if (!preg_match("/[a-zA-Z]/", $apellidoCliente)) {
        $apellidoErr = "Solo letras";
    }

    if (!preg_match("/[0-9]/", $numeroVisitas)) {
        $numeroVisitasErr = "Solo numeros";
    }

    $sentencia="UPDATE cliente SET 
    nombre='$nombreClienteEditado', 
    apellidos='$apellidoCliente', 
    sexo='$sexo',
    numeroVisitas = $numeroVisitas
    WHERE idcliente = $idCliente";

    if (mysqli_query($c, $sentencia)) {

        echo "<br /><h2 style='padding: 4rem' >Datos modificados correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaClientes.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }

    else {
        die('Consulta no valida: ' .mysqli_error($c));
    }



    
}


include_once('marcoinf.php');



?>