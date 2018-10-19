<!DOCTYPE html>

<html>

     <?php 

        require_once "configuracion.php";     ?>

<head>

<link rel="stylesheet" type="text/css" href="css/stiloImpresion.css">

</head>

<body onload="imprimir();">

  <div >   

    <div class="panel-tabla" >

      <?php  require_once"./php/PbuscarEmpresa.php"; ?>

     </div > 

<table class="table table-condensed">
    <thead>
      <tr class="warning"><font></font>
        <th>Descripcion</th>
        <th>Cantidad</th>
        <th>Nota</th>
      </tr>
    </thead>
    <tbody>



            <?php


                $sql="select * from orden_detalle where id_orden =".$idO;

                $resul=mysqli_query($conexion,$sql);

                while(@$ver=mysqli_fetch_row($resul)){                        

                        $datos=$ver[0]."||".

                               $ver[1]."||".

                               $ver[2]."||".

                               $ver[3]."||".

                               $ver[4]; 

            ?>       

            <tr>             

                <td ><?php echo $ver[2] ?></td>

                <td ><?php echo $ver[3] ?></td>        

                <td ><?php echo $ver[4] ?></td>

            </tr>

            <?php }  ?>        
    </tbody>
  </table>

    <p class="centrado">Autorisado por: ___________________          Recibido por: _________________________   

  </div>

</body>

</html>