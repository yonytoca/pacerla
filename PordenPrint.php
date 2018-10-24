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

             

                $sql=" select o.id, o.id_orden, o.descripcion, o.cantidad, o.nota, o.id_unidad_medida, u.nombre
               from orden_detalle as o, unidadmedida as u  where o.id_unidad_medida = u.id and id_orden=".$idO;

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

                <td ><?php echo $ver[3]." ".$ver[6] ?></td>        

                <td ><?php echo $ver[4] ?></td>

            </tr>

            <?php }  ?>        
    </tbody>
  </table>

    <p class="centrado">Autorisado por: ___________________          Recibido por: _________________________   

  </div>

</body>

</html>