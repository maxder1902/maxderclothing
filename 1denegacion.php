<?php
    // Cargar el marco superior de todas las páginas
    require_once('marcosup.php');
    

?>
<div class="py-5 bg-none" style="height:600px; right:0px; bottom:0px; background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.8));	background-position: top left;	background-size: 100%;	background-repeat: repeat;"> 
    <div class="container">
      <div class="row">
        <div class="bg-none text-danger col-12 col-sm-12 col-md-9 col-lg-9">	
            <h2>Lo lamentamos, esta opción tiene acceso restringido</h2>
            <h3>Para entrar debe identificarse como usuario del sistema</h3>
            <a href="index.php">Volver a la pagina de inicio.</a>
        </div>
      </div>
    </div>
</div>    
<?php
    // Cargar el marco inferior de todas las páginas
    require_once('marcoinf.php');
?>