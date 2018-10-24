<?php //session_start(); ?>

<!doctype html>

<html>

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

<title> Sistema De Control De Parcelas </title>

       <?php 

        require_once "php/conexion.php";

        $conexion=conexion()

    ?>

    <?php @$fecha = date("d/m/Y");

          @$hora = date("g:i a"); ?> 

       <?php 

        require_once "configuracion.php";                

   ?>

    

	<link rel="stylesheet" href="css/estilos.css">	   

    

</head>



<body>

    

             

   <div class="container" >

     <?php 

        require_once "header.php";        

   ?>  



  <input type="text" id="idparcela" hidden="" value="<?php echo $_GET['Rver'] ?>" >

 

    <div class="container" id="tabla"></div>    

           <?php 
              require_once "footer.php";       

           ?>      

    </div>		

</html>

<script type="text/javascript">

 GastosParcela();

       

</script>