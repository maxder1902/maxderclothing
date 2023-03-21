<?php
include_once('gest/conexion.php');
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    
    $idCliente = $_POST['idCliente'];
    $nombreCliente = $_POST['nombreCliente'];
    $apellidoCliente = $_POST['apellidoCliente'];
    $sexo = $_POST['sexo'];
    $numeroVisitas = $_POST['numeroVisitas'];
    
    if (!preg_match("/[0-9]/", $idCliente)) {
        $idErr = "Solo numeros";
    }
    
    if (!preg_match("/[a-zA-Z]/", $nombreCliente)) {
        $nombreErr = "Solo letras";
    }
    
    if (!preg_match("/[a-zA-Z]/", $apellidoCliente)) {
        $apellidoErr = "Solo letras";
    }
    
    if (!preg_match("/[0-9]/", $numeroVisitas)) {
        $direccionErr = "La direccion no es valida";
    }
        
    $sentencia = "INSERT INTO cliente VALUES ('$idCliente', '$nombreCliente', '$apellidoCliente', '$sexo', $numeroVisitas );";
    
    if (mysqli_query($c, $sentencia)){
        echo "<br /><h2 style='padding: 4rem' >Datos dados de alta correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaClientes.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }
    else {
        echo '<p>Cliente no registrado correctamente.</p>';
    }
    
    }
?>
<?php
include_once('marcoinf.php');
?>