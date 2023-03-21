<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Maxder Clothing</title>
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
<?php
    require_once('gest/1seguridad.php');
    require_once('navegadorUsuario.php');
    require_once('galeria.php');
?>

    <body>
        <h1>MAXDER CLOTHING</h1><hr /><br />
        <div class="photo-grid">
            <?php GaleriaRopa(); ?>
        </div>
        
        <div>ASIR Turaniana</div>

    </body>
</html>
<?php
    mysqli_close($c);
    include_once("marcoInferior.php");
?>