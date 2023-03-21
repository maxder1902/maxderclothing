<?php 
        // Cargamos el archivo que tiene la conexión y la variable $base
        require_once('gest/conexion.php');
        
        // Nombre de la tabla sobre la que vamos a ejecutar la sentencia
        $tabla="usuario";

        // Recogemos las variables de identificación.
        $usuario=$_POST['usuario']; 
        $llave= md5($_POST['llave']); // Encripta la clave nada más llegar
        //$llave= $_POST['llave'];

        //Sentencia SQL para buscar un usuario con esos datos 
        $ssql = "SELECT * FROM $tabla WHERE idUsu='$usuario' and password='$llave'"; 
        //echo "<hr>$ssql<hr>";
	   
        //Ejecuto la sentencia 
        $rs = mysqli_query($c, $ssql); 
		
		// Número de filas del resultado
		$lineas=mysqli_num_rows($rs);
		
        //vemos si el usuario y contraseña son válidos 
        //si la ejecución de la sentencia SQL nos da algún resultado 
        //es que si que existe esa combinación usuario/contraseña 
		
        if ($lineas!=0){ 
		//if (mysqli_num_rows($rs)!=0){ 
                //usuario y contraseña válidos porque ha encontrado registros que cumplen 
                // Selecciona el registro en la tabla y recoge datos
                $registro = mysqli_fetch_row($rs);
                $nombre=$registro[3]; // el nombre completo del usuario
				$nivel=$registro[9]; // nivel del usuario
                $nick=$registro[1]; // identificador
                $id=$registro[0]; // identificador
                //defino una sesion y guardo datos 
                session_start(); 
                $_SESSION["autent"]= "SI"; 
                $_SESSION['LOGIN']=$nick;
                $_SESSION['username']=$usuario;
                $_SESSION['nombre']=$nombre;
                $_SESSION['nivel']=$nivel;
                $_SESSION['id']=$id;
                $autentificado = "SI"; 
				// Mostramos los resultados de las variables de sesión
				/*echo "- - - - - - - - - - -";
				echo "<br>autent =". $_SESSION["autent"];
				echo "<br>LOGIN =". $_SESSION["autent"];
				echo "<br>username =". $_SESSION["username"];
				echo "<br>nombre =". $_SESSION["nombre"];
				echo "<br>nivel =". $_SESSION["nivel"];
				echo "<br>id =". $_SESSION["id"];
				echo "<br>- - - - - - - - - - -";
				*/
                // Redirecciona a la página del Backend
                header ("Location: index-B.php");
        }else { 
                //si no existe le mando otra vez a la portada 
                header("Location: loginUsuario.php?errorusuario=si"); 
                //echo "- ERROR - - - - - - - - - -";
        } 
        mysqli_free_result($rs); 
        mysqli_close($c); 
?>