<?php //session_start(); ?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	
<title>Inicio</title>
       <?php 
        require_once "../configuracion.php";                
   ?>
    
	<link rel="stylesheet" href="css/estilos.css">	   
    
</head>

<body>
    
             
   <div class="container" >
       <div class="logo">       
       <div id="logo"><img src="img/logovtd.png" width="155" height="94" alt=""/>
            </div>
           <h1>Si lo puedes soñar nosotros lo podemos  crear</h1>
           
  </div>
    </div>
            
<div class="container" >
       
  <?php 
        require_once "menu/menu.php";               
   ?>
</div>
    <div class="container">
        <div class="container">
    <div id="tabla"></div>
  </div>
    
            <!--  <h1 class="bienvenidos">Bienvenidos a nuestra web</h1> -->
    
    </div>
  <div class="container">
  <footer class="pies">Derechos reservados por VTD Software</footer>
</div>
</body>	
		
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#tabla').load('componentes/tfacturaLista.php');     
  });
</script>