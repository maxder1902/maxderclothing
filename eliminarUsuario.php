<script>
    alert('Vas a eliminar tu cuenta. ¿Estás seguro? Todo lo que hayas almacenado aquí se borrará.');
</script>
<?php
    require_once('gest/1seguridad.php');

    $idUsuario = $_SESSION['LOGIN'];
    $eliminarUsuario = "DELETE FROM usuario WHERE usuario idUsu = '$idUsuario'";
    
    if (mysqli_query($c, $eliminarUsuario)){
        header("Location: index.php");
    }
?>