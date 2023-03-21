<?php
    require_once('gest/conexion.php');
    require_once('marcosupAdmin.php');

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];

        $sentenciaSql = "SELECT * FROM vendedor WHERE idVend = $id AND nombre = '$nombre';";
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
         
            <form action="actualizarVendedor.php" method="post">
                <label for="idCliente">ID del Vendedor: <?php echo "$registro[1]"; ?> </label>
                <input type="hidden" name="id" value="<?php echo "$registro[1]"; ?>" ><br>
                <!--<input type="text" id="idCliente" name="idCliente" value= ><br />
                <span class="error" ><?php //echo $idErr; ?></span>-->

                <label for="nombre+">Nombre: </label>
                <input type="text" id="nombre+" name="nombre" value="<?php echo "$registro[0]"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="apellido">Apellidos: </label>
                <input type="text" id="apellido+" name="apellido" value="<?php echo "$registro[2]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="hombre">hombre</option>
                    <option value="mujer">mujer</option>
                    <option value="otro">otro</option>
                </select>
                <span class="error" ></span>

                <label for="direccionCliente">Cantidad Vendida: </label>
                <input type="text" id="ventas" name="ventas" value="<?php echo "$registro[4]"; ?>" ><br />
                <span class="error" ><?php //echo $direccionErr; ?></span>


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