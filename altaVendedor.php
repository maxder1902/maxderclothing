<?php
include_once('gest/conexion.php');
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $sexo = $_POST['sexo'];
    $venta = $_POST['venta'];
        
    $sentencia = "INSERT INTO vendedor VALUES ('$id', '$nombre', '$sexo', $venta, NULL, NULL);";
    
    if (mysqli_query($c, $sentencia)){
        echo "<br /><h2 style='padding: 4rem' >Datos dados de alta correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaVendedor.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }
    else {
        die('Consulta no valida: ' .mysqli_error($c));
    }
    
    }
?>
<?php
include_once('marcoinf.php');
?>