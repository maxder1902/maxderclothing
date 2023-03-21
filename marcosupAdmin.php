<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="estilos/ProyectoASIR.css">
  <link rel="icon" href="estilos/logoIESTuraniana.jpg">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="	background-image: linear-gradient(to bottom, rgba(0, 70, 30, 0.2), rgb(0, 70, 30, 0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;" id="1">
    <div class="container"> <a class="navbar-brand text-secondary" href="indexAdmin.php">
        <i class="fa d-inline fa-lg">
          <img src="estilos/MaxderClothingLogo.png" height="65" title="Logo de Maxder Clothing">
        </i>
        <!-- <b> IES Turaniana</b> -->
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar5">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar5">
<?php
	// Invocamos el archivo con la conexión a la base de datos
	require_once('gest/conexion.php');
	// Invocamos el archivo menu.inc con la función que contiene las opciones de menú
	require_once('gest/menu.inc');
	// Ejecutamos la función que incluye el menú
	principal();

?>
      </div>
    </div>
  </nav>
  <!-- ---------------------------- -->
  <nav class="navbar py-3 navbar-light text-left bg-warning" id="2" style="	background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <span class="navbar-text text-left text-dark"><b>Zona de Notificaciones</b></span>
  </nav>