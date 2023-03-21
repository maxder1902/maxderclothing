<?php
    require_once('gest/conexion.php');
    require_once('marcosupAdmin.php');

        $id = $_POST['idUsu'];
        $llave = $_POST['llave'];

        $sentenciaSql = "SELECT * FROM usuario WHERE idUsu = '$id' AND password = '$llave';";
        $resultado = mysqli_query($c, $sentenciaSql);
        $registro = mysqli_fetch_row($resultado);


    
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Editar Datos de Clientes</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <br /><h1 style="text-align:center;" >Editar Datos de <?php echo "$registro[0]"; ?></h1>

        <div class="formBox" >
         
            <form action="actualizarUsuario.php" method="post">
                <label for="idCliente">Nombre de Usuario: <?php echo "$registro[0]"; ?> </label>
                <input type="hidden" name="idUsu" value="<?php echo "$registro[0]"; ?>" ><br>
                <!--<input type="text" id="idCliente" name="idCliente" value= ><br />
                <span class="error" ><?php //echo $idErr; ?></span>-->

                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value="<?php echo "$registro[2]"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="apellido">Apellidos: </label>
                <input type="text" id="apellido" name="apellido" value="<?php echo "$registro[3]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="dni">DNI: </label>
                <input type="text" id="dni" name="dni" value="<?php echo "$registro[4]"; ?>" ><br />
                <span class="error" ><?php //echo $direccionErr; ?></span>

                <label for="telefono">Teléfono: </label>
                <input type="text" id="telefono" name="telefono" value="<?php echo "$registro[5]"; ?>" ><br />
                <span class="error" ><?php //echo $direccionErr; ?></span>

                <label for="email">Correo Electrónico: </label>
                <input type="text" id="email" name="email" value="<?php echo "$registro[6]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="hombre">hombre</option>
                    <option value="mujer">mujer</option>
                    <option value="otro">otro</option>
                </select>
                <span class="error" ></span>

                <label for="pais">País: </label>
                <input type="text" id="pais" name="pais" value="<?php echo "$registro[8]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="direccion">Dirección: </label>
                <input type="text" id="direccion" name="direccion" value="<?php echo "$registro[9]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>


                


                <input class="button" type="Submit" value="Enviar">
                <?php
                ?>
            </form>
        </div><br />
    </body>
</html>

<?php
    require_once('marcoinf.php');

?>