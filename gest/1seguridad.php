<?php 
//Inicio la sesión 
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
/*if ($_SESSION["autent"] != "SI") { 
   	//si no existe, envio a la página de autentificacion 
   	header("Location: 1denegacion.php"); 
   	//ademas salgo de este script 
   	exit(); 
        }	 */

if (!isset($_SESSION['username'])) {
	header("Location: 1denegacion.php");
	exit();
}
?>