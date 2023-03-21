<?php        
// Recoge el identificador de la NOTICIA seleccionada y enviada mediante método POST
$id=$_POST['idProd'];
$nombre = $_POST['nombreProd'];
// Invocamos el archivo con la conexión a la base de datos
echo "$nombre";
require_once('gest/conexion.php');
if (mysqli_query($c, "DELETE FROM `producto` WHERE `producto`.`nombre` = '$nombre' AND `producto`.`idProd` =$id ;"))
              {
               //si ejecuta correctamente la sentencia de borrado recarga la página de Gestión
               //header("Location: GNoticias-B.php?borrada='$noticia'");
               header("Location: T-PlantillaConsulta_TablaProducto.php");  
              }
              else {
                die('Consulta no valida: ' .mysqli_error($c));
              }
              
?>