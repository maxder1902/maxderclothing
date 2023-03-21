<?php
    require_once('gest/conexion.php');
    require_once('marcosupAdmin.php');

?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Alta Tienda</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <br /><h1 style="text-align:center;" >Alta Tienda</h1>

        <div class="formBox" >
         
            <form action="altaTienda.php" method="post">
                <label for="id">Número Tienda: </label>
                <input type="text" id="id" name="id" value="<?php //echo "$idCliente"; ?>" ><br />
                <span class="error" ><?php //echo $idErr; ?></span>

                <label for="calle">Calle: </label>
                <input type="text" id="calle" name="calle" value="<?php //echo "$nombreCliente"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="provincia">Provincia: </label>
                <input type="text" id="provincia" name="provincia" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                </select>
                <span class="error" ></span>

                <label for="stock">Stock Actual: </label>
                <input type="text" id="stock" name="stock" value="<?php //echo $numeroVisitas; ?>" ><br />
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

    //Declaramos variables.
?>