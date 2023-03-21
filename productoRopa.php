<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Maxder Clothing</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <?php
        require_once('navegadorUsuario.php');
        require_once('galeria.php');
    ?>
    <body>
        <?php
        $id=$_GET['id'];
        $prendaRopa = "SELECT nombre, talla, precio, composicion, cuidados, imagen from producto where idProd=$id;";
        $prendaResultado = mysqli_query($c, $prendaRopa);
        $registro = mysqli_fetch_row($prendaResultado);
        ?>

        <img class="imagenDatosRopa" src="<?php echo $registro[5]?>" alt="Prenda de vestir" />

        <div class="datosRopa" >
            <p>Nombre: <?php echo $registro[0]; ?></p>
            <p>Talla: <?php echo $registro[1]; ?></p>
            <p>Precio: <?php echo $registro[2]; ?>€</p>
            <p>Composicion: <?php echo $registro[3]; ?></p>
            <p>Cuidados: <?php echo $registro[4]; ?></p>
            <hr />
        </div>
        
        <form method="post" action="usuario.php">
            <button onclick="comprarProducto()" class="comprar" id='comprar'>COMPRAR</button>
            <input type="hidden" name="xd" value="<?php echo $id ?>">
        </form>
        <br />
        
        <script>
            const comprar = document.getElementById('comprar');
            const id = <?php echo json_encode($id); ?>

            comprarProducto() {
                alert("Has comprado el producto.");
            }
        </script>

    </body>
    <?php
        mysqli_close($c);
        include_once("marcoInferior.php");
    ?>
</html>