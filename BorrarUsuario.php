<?php
         
// Cargamos el marco superior de páginas
   //require_once('marcosup.php');
        
// Cargamos el archivo que tiene la conexión y la variable $base
    require_once('gest/conexion.php');
	
// Recoge el identificador del socio y la imagen
$id=$_POST['reg'];
$foto=$_POST['imagen'];

// Nombre de la tabla sobre la que vamos a ejecutar la sentencia
$tabla="USUARIOS";

// Ejecuta la sentencia SQL de borrado
$sentencia="DELETE FROM $tabla WHERE NUMUSUARIO=".$id."";
//echo "<hr>$sentencia<hr>";
if (mysqli_query($c,$sentencia))
      {
            //echo"<h3>Registro borrado correctamente.</h3>";
            // Elimina la imagen del socio de la carpeta FOTOS
            unlink($foto);
			header("Location: GestionUsuarios.php?codigoaviso=20");
      } 
      else
      {
            //echo "<h3>NO borrado. Se han producido errores.</h3>"; 
			header("Location: GestionUsuarios.php?codigoaviso=21&sentencia=$sentencia");
      }

// Cargamos el marco inferior de páginas
   //require_once('marcoinf.php');
?>