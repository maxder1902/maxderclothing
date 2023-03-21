<?php
    require_once('gest/conexion.php');
    //require_once('gest/1seguridad.php');
    //Galeria de fotos para mostrar las prendas de vestir de la BD de MAXDER CLOTHING.
    //Variables para la pagina de entrada.

    $tabla = "galeriaropa";
    $imagen = "SELECT imagen from galeriaropa";
    $resultadoImagen = mysqli_query($c, $imagen);

    //Variables para cuando se busca por prenda
    $camisetas = "SELECT imagen FROM `camisetas`;";
    $pantalones= "SELECT imagen FROM `pantalones`;";
    $sudaderas = "SELECT imagen FROM `sudadera`;";
    $resultadoCamisetas = mysqli_query($c, $camisetas);
    $resultadoPantalones = mysqli_query($c, $pantalones);
    $resultadoSudaderas = mysqli_query($c, $sudaderas);

    function GaleriaRopa () {
        //Bucle que muestra toda la ropa que existe en la BD.
        $i = 1;
            while ($registro = mysqli_fetch_row($GLOBALS["resultadoImagen"])) {

                
                echo "<a href='productoRopa.php?id=$i'><img class='ropa' src='$registro[0]' alt='ropa'></a>";
                $i++;
                
                
            }
            
                

    }

    function sudaderas(){
        $i = 1;
        $patron = "/sudadera/i";
            while ($registro = mysqli_fetch_row($GLOBALS["resultadoImagen"] ?? null)) {
                if ( preg_match($patron, $registro[0])) {
                    echo "<a href='productoRopa.php?id=$i'><img class='ropa' src='$registro[0]' alt='ropa'></a>";
                }
                $i++;
            }

    }

    function pantalones(){
        $i = 1;
        $patron = "/pantalones/i";
            while ($registro = mysqli_fetch_row($GLOBALS["resultadoImagen"] ?? null)) {
                if ( preg_match($patron, $registro[0])) {
                    echo "<a href='productoRopa.php?id=$i'><img class='ropa' src='$registro[0]' alt='ropa'></a>";
                }
                $i++;
            }

    }

    
    function camisetas(){
        $i = 1;
        $patron = "/camiseta/i";
            while ($registro = mysqli_fetch_row($GLOBALS["resultadoImagen"] ?? null)) {
                if ( preg_match($patron, $registro[0])) {
                    echo "<a href='productoRopa.php?id=$i'><img class='ropa' src='$registro[0]' alt='ropa'></a>";
                }
                $i++;
            }

    }
?>


