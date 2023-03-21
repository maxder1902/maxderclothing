<?php
include_once('gest/conexion.php');
include_once('marcosupAdmin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $talla = $_POST['talla'];
    $precio = $_POST['precio'];
    $composicion = $_POST['composicion'];
    $cuidados = $_POST['cuidados'];
    $imagen = $_POST['imagen'];
    $prenda = $_POST['prenda'];

        
    $sentencia = "INSERT INTO producto VALUES ('$id', '$nombre', '$talla', $precio, '$composicion', '$cuidados', '$imagen', '$prenda' );";
    
    if (mysqli_query($c, $sentencia)){
        echo "<br /><h2 style='padding: 4rem' >Datos dados de alta correctamente.</h2>";
        echo "<a href='T-PlantillaConsulta_TablaProducto.php'><h1 style='padding: 5rem'>Volver</h1></a>";

    }
    else {
        die('Consulta no valida: ' .mysqli_error($c));
    }
    
    }
?>
<?php
include_once('marcoinf.php');
?>