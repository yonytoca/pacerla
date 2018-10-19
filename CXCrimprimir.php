<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
       <script type="text/javascript">

        </script> 
    </head>
    <body id="idimprimir" onload="imprimir();">        
    <?php 
             @$idR = $_GET['idR'];
             @$idC = $_GET['idC'];
             @$mp = $_GET['mp'];
             @$m = $_GET['m'];
             @$devuelta = $_GET['devuelta'];
             


        require_once "configuracion.php";   
        require_once "php/conexion.php";
          $conexion=conexion();             
        
        // preparando el archivo para imprimir 
          require_once "CXCimprimirRecibo.php"
    ?>
    </body> 
  <!-- devolver a la pagina del recivo y hacerle un refresh  -->
    <meta http-equiv="Refresh" content="5;url=lcxc1.php">
</html>

