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
        <title>Alta Vendedor</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <br /><h1 style="text-align:center;" >Alta Vendedor</h1>

        <div class="formBox" >
         
            <form action="altaVendedor.php" method="post">
                <label for="id">ID del Vendedor: </label>
                <input type="text" id="id" name="id" value="<?php //echo "$idCliente"; ?>" ><br />
                <span class="error" ><?php //echo $idErr; ?></span>

                <label for="nombre">Nombre: </label>
                <input type="text" id="nombre" name="nombre" value="<?php //e/cho "$nombreCliente"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="hombre">hombre</option>
                    <option value="mujer">mujer</option>
                    <option value="otro">otro</option>
                </select>
                <span class="error" ></span>

                <label for="venta">Cantidad Vendida: </label>
                <input type="text" id="venta" name="venta" value="<?php //echo $numeroVisitas; ?>" ><br />
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