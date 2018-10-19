<!DOCTYPE html>

<html>

    <head>

        <meta charset="UTF-8">

        <title></title>

       <script type="text/javascript">



//Microsoft XPS Document Writer

            // function imprimir() {

            //     if (window.print) {

            //         window.print();

            //     } else {

            //         alert("La función de impresion no esta soportada por su navegador.");

            //     }

            // }

         //  comprobante_F();

        </script> 

    </head>

    <body id="idimprimir" onload="imprimir();">

        

    <?php 

             @$idF = $_GET['idF'];

             @$idC = $_GET['idC'];

             @$idTp = $_GET['idTp']; 

             @$idTComp = $_GET['idTComp'];

          //   @$idUsuario $_GET['idUsuario'];



            // echo "tipopago". @$idTc = $_GET['idTc'];



          //   echo "Empresa". @$idE = $_GET['idE'];



        require_once "configuracion.php";   

        require_once "php/conexion.php";

          $conexion=conexion();             

          require_once "Pfacturaprint.php"

        //require_once "rempresa.php"; 

        //require_once "componentes/timprimir.php" 
        

        // impresion de ticke          
        //  require_once "ejemploprint.php"

    ?>

    </body>

    <meta http-equiv="Refresh" content="5;url=rfactura.php">

</html>



