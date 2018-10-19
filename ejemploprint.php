<!DOCTYPE html>

<html>

     <?php 

        require_once "configuracion.php";     ?>

<head>

<link rel="stylesheet" type="text/css" href="css/stiloImpresion.css">

</head>

<body onload="imprimir();">

  <div class="ticket" >    

    <div >

    <div id ="lateral" >

      <?php  require_once"./php/buscarEmpresa.php"; ?>

     </div >

     <div id ="principal">

      <?php  require_once"./php/datosFacturaprint.php"; ?>

      </div ><br> 

      <?php  require_once"./php/buscarClientePrin.php"; ?>   

    </div>

<div class="container">  

<table>

  <tr>

    <th colspan="4">

    -----------------------------------------

    </th>

  </tr>

    <tr>

    <th >Cant.</th>

    <th colspan="3">Nombre</th>       

   

  </tr>

  <tr>

    <th >Precio</th>

    <th >Itbis</th>

    <th >Des.</th>

    <th >Total</th>

    <th > </th>

  </tr>

  <tr>

    <th colspan="4">

    -----------------------------------------

</th>

  </tr>



            <?php

                $itb =0;

                $subtotal =0;

                $desc = 0;

                $total =0;     



                $sql="select p.id,

                                p.codigo_barra, 

                                p.descripcion,

                                f.precio,

                                f.cantidad,

                                f.itb,

                                f.importe,

                                f.total,

                                f.descuento,

                                f.id_factura

                        from factura_detalle as f, producto as p where p.id=f.id_producto and f.id_factura=".$idF." group by f.id";

                $resul=mysqli_query($conexion,$sql);

                while(@$ver=mysqli_fetch_row($resul)){

                        

                        $datos=$ver[0]."||".

                               $ver[1]."||".

                               $ver[2]."||".

                               $ver[3]."||".

                               $ver[4]."||".

                               $ver[5]."||".

                               $ver[6]."||".

                               $ver[7]."||". 

                               $ver[8]."||".                          

                               $ver[9]."||".

                               $upd=1;  



                        $itb = $itb + $ver[5];

                        $subtotal=$subtotal + $ver[6];

                        $desc = $desc + $ver[8];

                        $total = ($subtotal-$desc)+$itb;





            ?>

        

            <tr>             

                <td ><?php echo $ver[4] ?></td>

                <td colspan="3" class="producto"><?php echo $ver[2] ?></td>        

                



            </tr>

            <tr>

              <td ><?php echo $ver[3] ?></td>

              <td ><?php echo $itb ?> </td>

              <td ><?php echo $desc ?> </td>

              <td ><?php echo $ver[3]*$ver[4] ?></td>

              <td > <?php if ($itb==0){echo "E" ;} ?> </td>

            </tr>

            <?php }  ?>



            <tr>

             <th colspan="4">

   -----------------------------------------

          </th>

            </tr>



            <?php

                          

                    $datos1=$itb."||".

                           $desc."||".

                           $total;

            ?>

            <tr>

                <td colspan="4"  >        

                    <table align="right">                        

                        <tr>

                            <td align="right">Sub-T..:</td>

                            <td >&nbsp;</td>

                            <td ><?php echo number_format($subtotal,2); ?></td>                    

                        </tr>          

                        <tr>                         

                            <td align="right">Desc..:</td>

                            <td >&nbsp;</td>

                            <td><?php echo  number_format($desc,2); ?></td>

                        </tr>

                        <tr>

                            <td align="right">ITB..:</td>

                            <td >&nbsp;</td>

                            <td><?php echo number_format($itb,2); ?></td>

                        </tr>

                        <tr>

                            <td align="right">Total..:</td>  

                            <td >&nbsp;</td>                        

                            <td>                                

                                <?php echo number_format($total,2); ?>

                            </td>

                        </tr>

                  </table>

                </td>

            </tr>

    </table>
    </div>
     <br>

    <p class="centrado">¡GRACIAS POR SU COMPRA!    

  </div>

</body>

</html>