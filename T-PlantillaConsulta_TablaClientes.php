<?php
	require_once('marcosupAdmin.php');
   require_once('gest/conexion.php');

   mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


   mysqli_select_db($c, $base);
	
?>
<div class="py-4 bg-dark text-info">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-9 col-lg-9">			
		  <div class="bg-dark-opaque" >				
                <h1>Gestión de la tabla Clientes</h1>
		  </div>
		  <div class="text-center mx-auto col-12">		
            <?php
            
            // Seleccionamos la tabla con la que vamos a trabajar
            $tabla="cliente";// Escribir entre comillas el nombre de la tabla a listar
            
            // Establecemos la sentencia SQL de la Consulta a realizar
            $sentencia="select * from $tabla";
            
            // Dibujamos una tabla HTML para mostrar los valores almacenados
            echo '<table class="table table-bordered text-info">';
            
            // Recopilar los nombres de las columnas de la tabla seleccionada
            $cabeceras=mysqli_query($c,"SHOW FIELDS FROM $tabla");
            
            // Construye la fila de cabeceras
            echo "<tr bgcolor='teal'>";
            while ($cab=mysqli_fetch_row($cabeceras)){
				echo "<th>$cab[0]</th>";
			}				
			echo "<th></th>";				
			echo "<th>";
			// Formulario para enviar los datos
				echo '<form name="alta" method="POST" action="AUsuarios-B.php">';
				//echo '<input type="hidden" name="codigo" value="'.$registro[0].'">';
				//echo '<input type="image" src="estilos/mas.jpg" height="20px" title="Edición de clientes.">';
				echo '</form>';
			echo "</th>";
			echo "<th></th>";
            echo "</tr>";
            
            // Recopilar las filas almacenadas en la tabla
            $resultado=mysqli_query($c,$sentencia);
            
            // Recorremos $resultado mostrando cada fila de la tabla
            while ($registro = mysqli_fetch_row($resultado)){
				
				// Iniciamos la fila
				echo "<tr>";
				
				// Iniciar un contador de columnas
				$i=0;
				
				// Recorremos y mostramos el valor de cada columna
				foreach ($registro as $fila){
					
					// Mostramos el valor de cada celda
					echo "<td> $registro[$i]</td>";
					
					// Incrementamos el contador de columnas
					$i++;
				}								
		
					echo "</td><td align='center'>";	
				//if (($registro[1]!=$_SESSION['LOGIN']) and ($_SESSION['nivel']==1))	{			
					// Para borrar un registro.
					// Formulario para enviar los datos
						echo '<form name="borraruno" method="POST" action="borrar-cliente.php">';
						echo '<input type="hidden" name="id" value="'.$registro[0].'">';
						echo '<input type="hidden" name="nombre" value="'.$registro[1].'">';
						echo '<input type="image" onclick="mensaje()" src="estilos/Borrar.jpg" title="Borrar a... '.$registro[1].'">';
						echo '</form>';
					//}						
					echo "</td><td align='center'>";	
				//if (($registro[1]==$_SESSION['LOGIN']) or ($_SESSION['nivel']==1))	{		
					// Para modificar un registro.
					// Formulario para enviar los datos
						echo '<form name="editaruno" method="POST" action="modificar-cliente.php">';
						echo '<input type="hidden" name="id" value="'.$registro[0].'">';
						echo '<input type="hidden" name="nombre" value="'.$registro[1].'">';
						echo '<input type="image" src="estilos/Editar.jpg" title="Cambiar datos de... '.$registro[1].'">';
						echo '</form>';	
					//}
									
                echo "</td>";   	
				
				// Fin de la fila
				echo "</tr>";				
			}
            
             // Fin de la tabla HTML
            echo "</table>";

			echo //"<h3><b>ADVERTENCIA: </b>Si se va a proceder a eliminar una columna de la tabla CLIENTE 
				 //se eliminara tambien la columna correspondiente en la tabla VENTA</h3>";
            
            // Cerramos la conexión con la base de datos
            mysqli_close($c);
            
            ?>
          </div>    
        </div>
      </div>
	  <center><a href="crearCliente.php"><h2>Alta cliente</h2></a></center>
    </div>
    <script>
		function mensaje() {
			alert ('Si vas a eliminar una columna de la tabla Clientes, se eliminara la correspondiente columna de la tabla Venta.');
		}
	</script>
<?php
	require_once('marcoinf.php');
?>	
