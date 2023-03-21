<?php
    require_once('gest/conexion.php');
    require_once('marcosupAdmin.php');

        $numero = $_POST['id'];
        $calle = $_POST['calle'];

        $sentenciaSql = "SELECT * FROM tienda WHERE numero = $numero AND calle = '$calle';";
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
         
            <form action="actualizarTienda.php" method="post">
                <label for="numero">Número de la tienda: <?php echo "$registro[0]"; ?> </label>
                <input type="hidden" name="numero" value="<?php echo "$registro[0]"; ?>" ><br>
                <!--<input type="text" id="idCliente" name="idCliente" value= ><br />
                <span class="error" ><?php //echo $idErr; ?></span>-->

                <label for="nombreCliente">calle <?php echo "$registro[1]"; ?>: </label>
                <input type="hidden" id="calle" name="calle" value="<?php echo "$registro[1]"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="provincia">Provincia: </label>
                <input type="text" id="provincia" name="provincia" value="<?php echo "$registro[2]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="producto">Cantidad de Producto: </label>
                <input type="text" id="producto" name="producto" value="<?php echo "$registro[3]"; ?>" ><br />
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