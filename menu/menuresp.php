<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="fonts.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="js/menu.js"></script>
</head>

<header>
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
		</div>
 
		<nav>
			<ul>
				<li class="dropdown"><a href="./Porden.php" class="glyphicon glyphicon-home" > Inicio</a></li>      
				
				<li class="submenu">
					<li class="dropdown "><a class="dropdown-toggle glyphicon glyphicon-cog" data-toggle="dropdown" href="#"> Registros </a>
					<ul class="children">					

          <li><a href="./Psocio.php"><div id="">Socio</div></a></li>
          <li><a href="./Pparcela.php"><div id="">Parcela</div></a></li>
          <li><a href="./Pagroquimica.php"><div id="">Agroquimica</div></a></li>
          
          <li><a href="./rempresa.php">Crear Empresa</a></li>
          <li><a href="./rcliente.php">Crear Cliente</a></li>
          <li><a href="./rproducto.php">Crear Cultivo</a></li>
          <li><a href="./rtipopago.php">Crear Tipo de pago</a></li>
          <li><a href="./punidadMedida.php">Crear Unidad de Medida</a></li>
          <li><a href="./rusuario.php">Crear Usuario</a></li>
          <!--  <li><a href="./ritbi.php">Itebis </a></li> -->

         <!--  <li><a href="./ritbi.php">ITBIS</a></li> -->

          <!-- <li><a href="./rtipopago.php">Crear tipo de pago</a></li> -->

<!--           <li><a href="./rimprimir.php">Imprimir</a></li> -->

<!--           <li><a href="./php_printer/index.php">Imprimir nuevo</a></li> -->

         <!--  <li><a href="./rcomprobante.php">Comprobante</a></li> -->

         <!--  <li><a href="./rcomprobanteMant.php">Comprobante Mantenimiento</a></li> -->

          
					</ul>
				</li>
				<li class="submenu">
				 <li class="dropdown "><a class="glyphicon glyphicon-list-alt" data-toggle="dropdown" href="#"> Reportes </a>
				 	<ul class="children">          
					    <li><a href="./Pgastos.php"><div id="">Gastos Por Parcela</div></a></li> 
					    <li><a href="./PRsocio.php"><div id="">Socios</div></a></li> 
					</ul> 
				 <li><a href="./Psiembra.php"><div id="">Siembra</div></a></li>	

	            <li><a href="./PgastosDiario.php" class="glyphicon glyphicon-usd"> Gastos </a></li>
				<li><a href="./Porden.php" class="glyphicon glyphicon-bullhorn"> Orden </a></li>
				<li><a href="./rfactura.php" class="glyphicon glyphicon-shopping-cart"> Factura </a></li>
				<li><a href="#" class="glyphicon glyphicon-envelope"> Contacto </a></li>
				<li class="dropdown"><a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#">  <?php echo $_SESSION['usuario'];?> </a>

				 	 <ul class="dropdown-menu dropdown-divider dropdown-menu">

          <li><a href="#">Usuario..:  <?php echo $_SESSION['usuario']; $idusario = $_SESSION['id']; ?></a></li>

                <li><a href="./php/salir.php" class="glyphicon glyphicon-off"> <?php

                                                   
                                                     ?>                                                     

                                                      Salir

                                                     <?php

                                                      if(!isset($_SESSION['usuario'])) 

                                                     {

                                                       header('Location: index.php'); 

                                                       exit();

                                                     }



                                                    ?></a>
                </li>
        </ul>
	</ul>
		</nav>
	</header>