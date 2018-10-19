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
      <?php  require_once"./php/PbuscarEmpresaF.php"; ?>
     </div > 

<table class="table table-condensed">
    <thead>
      <tr class="warning"><font></font>
        <th>Descripcion</th>        
        <th>Cantidad</th>
        <th>Precio</th>
        <th>Descuento</th>
        <th>Importe</th>
      </tr>
    </thead>
    <tbody>

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
                               $ver[8]; 
                  
                  $itb = $itb + $ver[5];
                  $subtotal=$subtotal + $ver[6];
                  $desc = $desc + $ver[8];
                  $total = ($subtotal-$desc)+$itb;
            ?>      

            <tr>             

                <td ><?php echo $ver[2] ?></td>
                <td ><?php echo $ver[4] ?></td>
                <td ><?php echo $ver[3] ?></td>
                <td ><?php echo $ver[8] ?></td>
                <td ><?php echo $ver[7] ?></td>

            </tr>

            <?php }  ?> 
           <tr>
             <td colspan="5">
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
           <tr>
             <td colspan="5">
              <p class="centrado"> ¡GRACIAS POR SU COMPRA! 
               
             </td>
           </tr>       
    </tbody>
  </table>
  </div>

</body>

</html>