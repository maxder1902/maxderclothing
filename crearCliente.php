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
        <title>Alta de Cliente</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <br /><h1 style="text-align:center;" >Alta Cliente</h1>

        <div class="formBox" >
         
            <form action="altaCliente.php" method="post">
                <label for="idCliente">ID del Cliente: </label>
                <input type="text" id="idCliente" name="idCliente" value="<?php // echo "$idCliente"; ?>" ><br />
                <span class="error" ><?php //echo $idErr; ?></span>

                <label for="nombreCliente">Nombre: </label>
                <input type="text" id="nombreCliente" name="nombreCliente" value="<?php // echo "$nombreCliente"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="apellidoCliente">Apellidos: </label>
                <input type="text" id="apellidoCliente" name="apellidoCliente" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="sexo">Sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="hombre">hombre</option>
                    <option value="mujer">mujer</option>
                    <option value="otro">otro</option>
                </select>
                <span class="error" ></span>

                <label for="direccionCliente">numero de Visitas: </label>
                <input type="text" id="numeroVisitas" name="numeroVisitas" value="<?php //echo $numeroVisitas; ?>" ><br />
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