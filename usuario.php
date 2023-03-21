<!DOCTYPE HNMTL>
<html>
    <head>
        <title>Perfil de Usuario</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="estilos/maxderStyling.css" />
    </head>
    <body>
        <?php
        include_once('navegadorUsuario.php');
        include_once('gest/conexion.php');
        include_once('gest/1seguridad.php');

        
        if (isset($_POST['xd'])) {
            $idPrendaComprada = $_POST['xd'];
            $prendaRopa = "SELECT nombre from producto where idProd=$idPrendaComprada;";
            $prendaResultado = mysqli_query($c, $prendaRopa);
            $registro = mysqli_fetch_row($prendaResultado);

        }
        else {$registro[0]="CARRITO VACÍO";}
        

        $_SESSION['LOGIN'];
        $_SESSION['pais'];
        $_SESSION['username'];
        $_SESSION['apellidos'];
        $_SESSION['nivel'];
        $_SESSION['id'];
        ?>
        <h1>Datos de: <?php echo $_SESSION['id']; ?></h1><br>

        <div class="userBox" >
            <img style="width:15%;" src="estilos/usuarioIcono.png" alt="Icono del Usuario">
            <p>Id de usuario: <?php echo $_SESSION['id']; ?></p><hr />
            <p>Nombre: <?php echo $_SESSION['username']; ?></p><hr />
            <p>Apellidos: <?php echo $_SESSION['apellidos']; ?></p><hr />
            <p>pais: <?php echo $_SESSION['pais']; ?></p><hr />
            <p>Compras: <?php echo "$registro[0]"; ?> </p>

            <a class="button" href="logout.php.php">SALIR</a>
            <a class="button" href="eliminarUsuario.php">BORRAR CUENTA</a>
        </div> 
    </body>
    <?php 
        include_once('marcoinf.php');
    ?>
</html>