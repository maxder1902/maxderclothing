<?php        
// Recoge el identificador de la NOTICIA seleccionada y enviada mediante método POST
$id=$_POST['idTienda'];
$calle = $_POST['calleTienda'];
// Invocamos el archivo con la conexión a la base de datos
require_once('gest/conexion.php');
if (mysqli_query($c, "DELETE FROM `tienda` WHERE `tienda`.`numero` = $id AND `tienda`.`calle` = '$calle' ;"))
              {
               //si ejecuta correctamente la sentencia de borrado recarga la página de Gestión
               //header("Location: GNoticias-B.php?borrada='$noticia'");
               header("Location: T-PlantillaConsulta_TablaTienda.php");  
              }
              else {
                die('Consulta no valida: ' .mysqli_error($c));
              }
              
?>