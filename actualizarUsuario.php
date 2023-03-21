<?php
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    include_once('gest/conexion.php');

    $id = $_POST['idUsu'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $sexo = $_POST['sexo'];
    $pais = $_POST['pais'];
    $direccion = $_POST['direccion'];


    if (!preg_match("/[a-zA-Z]/", $nombre)) {
        $nombreErr = "Solo letras";
    }

    if (!preg_match("/[a-zA-Z]/", $apellido)) {
        $apellidoErr = "Solo letras";
    }

    if (!preg_match("/[0-9]/", $dni)) {
        $numeroVisitasErr = "Solo numeros";
    }

    $sentencia="UPDATE usuario SET 
    nombre='$nombre', 
    apellidos='$apellido',
    dni = '$dni', 
    sexo='$sexo',
    telefono = '$telefono',
    email = '$email',
    sexo = '$sexo',
    pais = '$pais',
    direccion = '$direccion'
    WHERE idUsu = '$id'";

    if (mysqli_query($c, $sentencia)) {

        echo "<br /><h2 style='padding: 4rem' >Datos modificados correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaUsuario.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }

    else {
        die('Consulta no valida: ' .mysqli_error($c));
    }



    
}


include_once('marcoinf.php');



?>