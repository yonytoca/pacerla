<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<body onload="HoraActual()"> 
  
       <?php 

        require_once "php/conexion.php";

        $conexion=conexion()

    ?>

   
  
 <link rel="stylesheet" href="libreria/bootstrap-3.3.7/dist/css/bootstrap.min.css"> 



  <link rel="stylesheet" type="text/css" href="libreria/alertifyjs/css/alertify.css">

  <link rel="stylesheet" type="text/css" href="libreria/alertifyjs/css/themes/default.css"> 

  

  <!-- usar los tipos de impreion en cascada -->

  <link rel="stylesheet" href="style.css" type="text/css" media="screen" />



  <link rel="stylesheet" href="print.css" type="text/css" media="print" />
  
 

  <!-- <link rel="stylesheet" type="text/css" href="css/stiloImpresion.css"> -->

 <!--  <link rel="stylesheet" type="text/css" href="css/stilo.css">  --> 



  <script src="libreria/jquery-3.2.1.min.js"></script>

  <script src="libreria/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>

  <script src="libreria/alertifyjs/alertify.js"></script> 

  

  <script src="js/funciones.js"></script>

   <script src="js/funcionesparcela.js"></script>

  <script src="js/login.js"></script>

  <script src="js/validacionCampos.js"></script>

  <script src="js/limpiarModales.js"></script>

  <script src="js/imprimir.js"></script>





  <script>

      alertify.set('notifier','position', 'top-left');

  </script>





