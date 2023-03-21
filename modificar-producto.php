<?php
    require_once('gest/conexion.php');
    require_once('marcosupAdmin.php');

        $nombreProducto = $_POST['nombreProd'];
        $idProducto = $_POST['idProd'];

        $sentenciaSql = "SELECT * FROM producto WHERE idProd = $idProducto AND nombre = '$nombreProducto';";
        $resultado = mysqli_query($c, $sentenciaSql);
        $registro = mysqli_fetch_row($resultado);


    
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Editar Datos de Producto</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <br /><h1 style="text-align:center;" >Editar Datos de <?php echo "$registro[0]"; ?></h1>

        <div class="formBox" >
         
            <form action="actualizarProducto.php" method="post">
                <label for="idProd">ID del Producto: <?php echo "$registro[1]"; ?> </label>
                <input type="hidden" name="idProd" value="<?php echo "$registro[1]"; ?>" ><br>
                <!--<input type="text" id="idCliente" name="idCliente" value= ><br />
                <span class="error" ><?php //echo $idErr; ?></span>-->

                <label for="nombreCliente">Nombre: </label>
                <input type="text" id="nombreProducto" name="nombreProducto" value="<?php echo "$registro[0]"; ?>" ><br />
                <span class="error" ><?php //echo $nombreErr; ?></span>

                <label for="talla">Talla: </label>
                <select name="talla" id="talla">
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
                    <option value="XXXL">XXXL</option>
                </select>
                <span class="error" ></span>

                <label for="precio">Precio: </label>
                <input type="text" id="precio" name="precio" value="<?php echo "$registro[3]"; ?>" ><br />
                <span class="error" ><?php //echo $direccionErr; ?></span>

                <label for="composicion">Composición: </label>
                <input type="text" id="composicion" name="composicion" value="<?php echo "$registro[4]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="cuidados">Cuidados: </label>
                <input type="text" id="cuidados" name="cuidados" value="<?php echo "$registro[5]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="imagen">Imagen: </label>
                <input type="text" id="imagen" name="imagen" value="<?php echo "$registro[6]"; ?>" ><br />
                <span class="error" ><?php //echo $apellidoErr; ?></span>

                <label for="prenda">Tipo de prenda: </label>
                <select name="prenda" id="prenda">
                    <option value="pantalones">Pantalones</option>
                    <option value="camisetas">Camisetas</option>
                    <option value="sudaderas">Sudaderas</option>
                </select>

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