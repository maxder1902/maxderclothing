<?php
    require_once('gest/conexion.php');
    require_once('marcosupAdmin.php');

        $idCliente = $_POST['id'];
        $nombreCliente = $_POST['nombre'];

        $sentenciaSql = "SELECT * FROM cliente WHERE idcliente = $idCliente AND nombre = '$nombreCliente';";
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
        <br /><h1 style="text-align:center;" >Editar Datos de <?php echo "$registro[1]"; ?></h1>

        <div class="formBox" >
         
            <form action="actualizarCliente.php" method="post">
                <label for="idCliente">ID del Cliente: </label>
                <input type="hidden" name="idCliente" value="<?php echo "$registro[0]"; ?>" ><br>
                <!--<input type="text" id="idCliente" name="idCliente" value= ><br />
                <span class="error" ><?php //echo $idErr; ?></span>-->

                <label for="nombreCliente">Nombre: </label>
                <input type="text" id="nombreCliente" name="nombreCliente" value="<?php echo "$registro[1]"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="apellidoCliente">Apellidos: </label>
                <input type="text" id="apellidoCliente" name="apellidoCliente" value="<?php echo "$registro[2]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="hombre">hombre</option>
                    <option value="mujer">mujer</option>
                    <option value="otro">otro</option>
                </select>
                <span class="error" ></span>

                <label for="direccionCliente">numero de Visitas: </label>
                <input type="text" id="numeroVisitas" name="numeroVisitas" value="<?php echo "$registro[4]"; ?>" ><br />
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