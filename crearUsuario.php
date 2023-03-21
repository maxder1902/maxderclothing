<?php
    require_once('gest/conexion.php');
    require_once('marcosup.php');
    $id = '';
    $nombre ='';
    $apellido = '';
    $llave = '';
    $llave2 = '';
    $dni = '';
    $telefono = '';
    $email = '';
    $sexo = '';
    $pais = '';
    $direccion = '';
    $idErr = '';
    $nameErr = '';
    $apellidoErr = '';
    $llaveErr = '';
    $dniErr = '';
    $telefonoErr = '';
    $emailErr = '';
    $sexoErr = '';
    $paisErr = '';
    $direccionErr = '';
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>MAXDER CLOTHING Crear Cuenta</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <br /><h1 style="text-align:center;" >Crear cuenta MAXDER CLOTHING</h1>

        <div class="formBox" >
         
            <form action="altaUsuario.php" method="post">
                <label for="idUsuario">ID de Usuario:</label>
                <input type="text" id="idUsuario" name="idUsuario" value="<?php echo $id; ?>" required ><br />
                <span class="error" ><?php echo $idErr; ?></span>

                <label for="nombreUsuario">Nombre:</label>
                <input type="text" id="nombreUsuario" name="nombreUsuario" value="<?php echo $nombre; ?>" required ><br />
                <span class="error" ><?php echo $nameErr; ?></span>

                <label for="apellidoUsuario">Apellidos:</label>
                <input type="text" id="apellidoUsuario" name="apellidoUsuario" value="<?php echo $apellido; ?>" required ><br />
                <span class="error" ><?php echo $apellidoErr; ?></span>

                <label for="llave">Contraseña:</label>
                <input type="password" id="llave" name="llave" required ><br />
                <span class="error" ><?php echo $llaveErr; ?></span>

                <label for="llave2">Repita la contraseña:</label>
                <input type="password" id="llave2" name="llave2" required ><br />


                <label for="dni">DNI:</label>
                <input type="text" id="dni" name="dni" value="<?php echo $dni; ?>" required ><br />
                <span class="error" ><?php echo $dniErr; ?></span>


                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono" value="<?php echo $telefono; ?>" required ><br />
                <span class="error" ><?php echo $telefonoErr; ?></span>


                <label for="emailUsuario">Correo electrónico:</label>
                <input type="text" id="emailUsuario" name="emailUsuario" value="<?php echo $email; ?>" required ><br />
                <span class="error" ><?php echo $emailErr; ?></span>


                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo">
                    <option value="hombre">hombre</option>
                    <option value="mujer">mujer</option>
                    <option value="otro">otro</option>
                </select>
                <span class="error" ><?php echo $sexoErr; ?></span>


                <label for="paisUsuario">País:</label>
                <input type="text" id="paisUsuario" name="paisUsuario" value="<?php echo $pais; ?>" required ><br />
                <span class="error" ><?php echo $paisErr; ?></span>


                <label for="direccionUsuario">Dirección:</label>
                <input type="text" id="direccionUsuario" name="direccionUsuario" value="<?php echo $direccion; ?>" required ><br />
                <span class="error" ><?php echo $direccionErr; ?></span>


                <input class="button" type="Submit" value="Enviar">
            </form>
        </div><br />
    </body>
</html>

<?php
    require_once('marcoinf.php');

    //Declaramos variables.
?>