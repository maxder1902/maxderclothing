<?php
    if (isset($_GET['errorusuario'])) 
    {						
        //Cargamos la ventana modal por si hay que mostrar mensajes.							
        $texto="NO es correcto. Por favor, compruebe nombre de usuario y contraseña.";
        include ("gest/ModalMensajes.php");
    ?>
        <script>
            $(document).ready(function()
            {
                $("#Mensaje").modal("show");
            });
        </script>
    <?php
    }
?>

<?php
    require_once('marcosup.php');
    include('gest/conexion.php');
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $nombreUsuario = $_POST['username'];
        $clave = $_POST['llave'];
        $tabla = "usuario";
        //$columnas = "idUsu, password, nombre, nivel";

        $sentenciaSql = "SELECT idUsu, password, nombre, apellidos, pais, nivel FROM $tabla WHERE idUsu='$nombreUsuario' and password='$clave';";
        $resultado = mysqli_query($c, $sentenciaSql);
        //$fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
        $conteo = mysqli_num_rows($resultado);
        //$activa = $fila['active'];

        if ($conteo != 0) {
            $registro = mysqli_fetch_row($resultado);
            $apellidos=$registro[3]; // el nombre completo del usuario
            $pais = $registro[4];
            $nivel=$registro[5]; // nivel del usuario
            $pw=$registro[1]; // identificador
            $id=$registro[0]; // identificador
            $usuarioNombre=$registro[2]; // nombre de usuario
            //defino una sesion y guardo datos 
            session_start(); 
            $_SESSION["autent"]= "SI"; 
            $_SESSION['LOGIN']=$pw;
            $_SESSION['pais'] = $pais;
            $_SESSION['username']=$usuarioNombre;
            $_SESSION['apellidos']=$apellidos;
            $_SESSION['nivel']=$nivel;
            $_SESSION['id']=$id;
            $autentificado = "SI";
            if ($nivel == 2) {
                header ("Location: indexAdmin.php");
            }
            else { 
                header ("Location: indexUsuario.php");
            }
        }
        else {
            header("Location: loginUsuario.php?errorusuario=si"); 
        }
    }
?>

<html>
    <head>
        <meta charset="utf-8" />
        <title>Inicio de sesión</title>
    </head>
    <body>
        <h1>Inicio de sesión</h1><hr /><br />
        <div class="formBox" >
        <form action="" method="POST" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>

            <label>Usuario: </label>
            <input type="text" name="username" /><br />
            <label>Contraseña: </label>
            <input type="password" name="llave" /><br />

            <input type="Submit" value="ENTRAR" />
            <input type="reset"  class="button" value="BORRAR" />
        </form>
        </div>
        <p style = 'text-align:center'>¿No tienes cuenta? <a href="crearUsuario.php" style="color: #a000a0">Créate una cuenta ahora</a></p>
    </body>

    <script type="text/javascript">

        
        var identidadUsuario = document.f1.username.value;
        var clave = document.f1.llave.value;
        
        if ( identidadUsuario.length == "" && clave == "" ) {

            alert ("Los campos de Usuario y Contraseña están vacíos.");

            return false;
        }
        
        if( identidadUsuario.length =="" ) {

            alert ("El campo de usuario esta vacio.");

            return false;
        }

        if ( clave.length =="" ) {

            alert ("El campo de Contraseña esta vacio.");

            return false;
        }

    </script>
</html>