<?php
	//Iniciamos código PHP
	//Cargar el marco superior
	require_once('marcosup.php');
      
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
			// Comprueba si viene (por el método GET) un valor para mostrar ventana de mensaje
			if (isset($_GET['errorusuario'])) 
			{						
				//Cargamos la ventana modal por si hay que mostrar mensajes.							
				$texto="NO es correcto. Por favor, compruebe nombre de usuario y contraseña.";
				include ("gest/ModalMensajes.php");
			?>
				<script>
					$(document).ready(function()
					{
						$("#Mensaje").modal("show");
					});
				</script>
			<?php
			}
			// --- --- --- --- --- --- --- --- --- --- --- --- --- --- ---
?>
// ----------Script para mostrar u ocultar texto------------
<script type="text/javascript">
function mostrarPassword(){
		var cambio = document.getElementById("llave");
		if(cambio.type == "password"){
			cambio.type = "text";
			$('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
		}else{
			cambio.type = "password";
			$('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
		}
	} 
	
	$(document).ready(function () {
	//CheckBox mostrar contraseña
	$('#ShowPassword').click(function () {
		$('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
	});
});
</script>
// ----------------------------------------------------------


  <div class="py-5 bg-info" style="height:100%; width:100%; position:absolute; right:0px; bottom:0px;	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-primary">Acceso al sistema como usuario registrado</h1>
        </div>
      </div>
      <div class="text-center row">
        <div class="col-md-3">          
        </div>   
        <div class="col-md-6  text-primary">
            <form action="1control.php" method="POST">   
                <hr>
                <h3 class="display-5 text-center">
                    <i class="bi bi-person-bounding-box"> Usuario</i><br>
                    <input type="Text" name="usuario" value="admin" size="30" maxlength="50">
                </h3>
                <hr>
                
                
                    <!--<input type="password" Class="form-control" name="llave" value="iesturaniana2023" size="30" maxlength="50">
-->
                    <!--<div class="input-group">-->
                      <h3 class="display-5 text-center">
                        <i class="bi bi-upc-scan"> Contraseña</i><br>
                        <input ID="llave" type="Password" name="llave" value="iesturaniana2023" size="25" maxlength="50">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                     
                      </h3>
                      <!--
                      <div class="input-group-append">
                        <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                      </div>
                    </div>
-->
             <!--
                  <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                          <p>Click en el ojo para mostrar / ocultar</p>
                          <label>Ingrese Contraseña</label>
                          <div class="input-group">
                            <input ID="txtPassword" type="Password" Class="form-control" name="llave" value="iesturaniana2023" >
                            <div class="input-group-append">
                              <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword()"> <span class="fa fa-eye-slash icon"></span> </button>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  -->
                <hr>
                <input type="Submit" class="btn btn-success" value="ENTRAR"> - 
                <input type="reset"  class="btn btn-warning" value="BORRAR">
            </form>
        </div>
        <div class="col-md-3">          
        </div>   
      </div>
    </div>
  </div>


  
