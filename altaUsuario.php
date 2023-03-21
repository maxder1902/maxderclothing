<?php
    include_once('gest/conexion.php');
    $id = $_POST['idUsuario'];
    $nombre = $_POST['nombreUsuario'];
    $apellido = $_POST['apellidoUsuario'];
    $llave = $_POST['llave'];
    $llave2 = $_POST['llave2'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $email = $_POST['emailUsuario'];
    $sexo = $_POST['sexo'];
    $pais = $_POST['paisUsuario'];
    $direccion = $_POST['direccionUsuario'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($id)){
            $idErr = "Introduzca un ID de usuario con el formato apropiado.";
        }
        else {
            $id = test($id);
            if(!preg_match("/^[a-zA-Z0-9]*$/", $id)){
                $idErr = "Solo números y letras";
            }
        }

        if (empty($nombre)){
            $nameErr = "Necesitamos su nombre.";
        }
        else {
            $nombre = test($nombre);
            if (!preg_match("/^[a-zA-Z]*$/", $nombre)){
                $nameErr = "Solo letras";
            }
        }

        if (empty($llave) || empty($llave2)){
            $llaveErr = "Introduzca la contraseña";
        }
        else{
            if ($llave == $llave2) {
                $mayuscula = preg_match("/^[A-Z]*$/", $llave);
                $minuscula = preg_match("/^[a-z]*$/", $llave);
                $numero = preg_match("/^[0-9]*$/", $llave);
                $caracterEspecial = preg_match("/[^\w]/", $llave);

                if (!$mayuscula || !$minuscula || !$numero || !$caracterEspecial || strlen($llave)<8){
                    $llaveErr = "La contraseña debe de tener al menos una longitud de 8 caracteres y debe de tener al menos
                    una mayúscula, minúscula, y un caracter especial.";
                }
            }
        }

        if (empty($apellido)){
            $apellidoErr = "Necesitamos su apellido.";
        }
        else {
            $apellido = test($apellido);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $apellido)){
                $apellidoErr = "Solo letras";
            }
        }

        if (empty($email)){
            $emailErr = "Necesitamos su correo electrónico.";
        }
        else {
            $email = test($email);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailErr = "Formato de correo electrónico no válido";
            }
        }

        if (empty($dni)){
            $dniErr = "Introduzca su DNI.";
        }
        else{
            if (!validarDni($dni)){
                $dniErr = "El formato del DNI no es válido.";
            }
        }

        if (empty($telefono)) {
            $telefonoErr = "Introduzca su número de teléfono.";
        }
        else {
            if (!preg_match("/[0-9]/", $telefono) || !strlen($telefono)<9){
                $telefonoErr = "No ha introducido el formato de teléfono correcto.";
            }
        }

        if (empty($sexo)) {
            $sexoErr = "El sexo es obligatorio.";
        }
        else {
            $sexo = test($sexo);
        }

        if (empty($pais)) {
            $paisErr = "Introduzca su país";
        }
        else {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $pais)){
                $paisErr = "Solo letras.";
            }
        }

        if (empty($direccion)) {
            $direccionErr = "Introduzca la dirección de su domicilio.";
        }
        else {
            if (!preg_match("/^[a-zA-Z0-9\s\-\/]+$/", $direccion)) {
                $direccionErr = "La dirección no es válida";
            }
        }
    }


    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validarDni($dni) {
        
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);

        if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen($numeros) == 8){
            return true;
        }
        else {
            return false;
        }
    }
    

    $sentenciaSql = "INSERT INTO usuario (`idUsu`, `password`, `nombre`, `apellidos`, `dni`, `telefono`, `email`, `sexo`, `pais`, `direccion`, `nivel`)
    VALUES ('$id', '$llave', '$nombre', '$apellido', '$dni', '$telefono', '$email', '$sexo', '$pais', '$direccion', 1);";

    if (mysqli_query($c, $sentenciaSql)) {

        echo '<p>Usuario registrado correctamente.</p>';

    }
    else {
        echo '<p>Usuario no registrado correctamente.</p>';
        header('Location: crearUsuario.php');
    }

?>
