<?php        
// Recoge el identificador de la NOTICIA seleccionada y enviada mediante método POST
$id=$_POST['idTienda'];
$llave = $_POST['llave'];
// Invocamos el archivo con la conexión a la base de datos
require_once('gest/conexion.php');
if (mysqli_query($c, "DELETE FROM `usuario` WHERE `usuario`.`idUsu` = '$id' AND `usuario`.`password` = '$llave';"))
              {
               //si ejecuta correctamente la sentencia de borrado recarga la página de Gestión
               //header("Location: GNoticias-B.php?borrada='$noticia'");
               header("Location: T-PlantillaConsulta_TablaUsuario.php");  
              }
              else {
                die('Consulta no valida: ' .mysqli_error($c));
              }
              
?>