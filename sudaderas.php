<?php
    require_once('navegadorUsuario.php');
    require_once('galeria.php');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sudaderas MAXDER CLOTHING</title>
    </head>
    <body>
       <div class="photo-grid" >
       <?php
            sudaderas(); 
        ?>
       </div>
    </body>
</html>