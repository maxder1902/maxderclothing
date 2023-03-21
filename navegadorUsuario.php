<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <header>
            <nav>
                <a href="indexUsuario.php"><img src="imagenes/MaxderIconoLight.png" alt="Logo Maxder" class="logo" /></a>
                <ul class="menu" >
                    <li class="item" class="dropdown" ><a class="link" href="camisetas.php">Camisetas</a></li>
                    <li class="item" class="dropdown" ><a class="link" href="pantalones.php">Pantalones</a></li>
                    <li class="item" class="dropdown" ><a class="link" href="sudaderas.php">Sudaderas</a></li>
                </ul>
                <div class="dropdown" style="padding-right: 5rem;">
                    <img class="usuario" src="estilos/usuarioIcono.png" alt="Icono del Usuario" />
                    <div class="dropdown-content">
                        <?php
                            require_once('gest/conexion.php');
                        ?>
                        <p><?php
                                if(!isset($_SESSION)) 
                                { 
                                    session_start(); 
                                } 
                                if ($_SESSION["autent"]== "SI") {echo "<a href='usuario.php'>Ver perfil</a>";}
                                else {echo "Sin conexion";}?></p>
                        <a href="logout.php" class="button">Salir</a>
                    </div>
                </div>
                <div class="burger" >
                    <span class="bar" ></span>
                    <span class="bar" ></span>
                    <span class="bar" ></span>
                </div>
            </nav>
        </header>
        
        <script>
            const burger = document.querySelector(".burger");
            const menu = document.querySelector(".menu");
            const link = document.querySelectorAll(".link");

            burger.addEventListener("click", menuMovil)

            function menuMovil() {

                burger.classList.toggle("active");
                menu.classList.toggle("active");

                
            }

            link.forEach(n => n.addEventListener("click", cerrarMenu));
            function cerrarMenu () {
                burger.classList.remove("active");
                menu.classList.remove("active");

            }
        </script>
    </body>
    
</html>