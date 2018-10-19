<!DOCTYPE html>
<html>
     <?php 
        require_once "configuracion.php";     ?>
<head>
<link rel="stylesheet" type="text/css" href="css/stiloImpresion.css">
</head>
<body onload="imprimir();">
  <div class="ticket">    
    <div >
    <div id ="lateral" >
      <?php  require_once"./php/CXCbuscarEmpresa.php"; ?> 
     </div >
     <div id ="principal">
      <?php  require_once"./php/CXCdatosReciboprint.php"; ?>
      </div ><br> 
      <?php  require_once"./php/CXCbuscarClientePrinRecibo.php"; ?>   
    </div>
<table>
  <tr>
    <th colspan="4">
    --------------------------------------------
    </th>
  </tr>
    
  <tr>
    <th >Fcatura #</th>
    <th >Monto Pagado</th>
  </tr>
  <tr>
    <th colspan="4">
    --------------------------------------------
</th>
  </tr>

            <?php
                $itb =0;
                $subtotal =0;
                $desc = 0;
                $total =0;     

                $sql="select * from ingreso_detalle as i, factura as f where f.id=i.id_factura and i.id_ingreso=".$idR." group by i.id";
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

                    //    $itb = $itb + $ver[5];
                        $subtotal=$subtotal + $ver[4];
                    //    $desc = $desc + $ver[8];
                        $total = $subtotal;


            ?>
        
            <tr>
              <td ><?php echo $ver[2] ?></td>
              <td ><?php echo $ver[4] ?></td>
            </tr>
            <?php }  ?>

            <tr>
             <th colspan="4">
    --------------------------------------------
          </th>
            </tr>

            <?php
                          
                    // $datos1=$itb."||".
                    //        $desc."||".
                    //        $total;
            ?>
            <tr>
                <td colspan="4"  >        
                    <table align="right">                        
        
                        <tr>
                            <td align="right">Total ==> </td>  
                            <td >&nbsp;</td>                        
                            <td>                                
                                <?php echo number_format($total,2); ?>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">Monto Pagado ==> </td>  
                            <td >&nbsp;</td>                        
                            <td>                                
                                <?php echo number_format($m,2); ?>
                            </td>
                        </tr>
                                                <tr>
                            <td align="right">Devuelta ====> </td>  
                            <td >&nbsp;</td>                        
                            <td>                                
                                <?php echo number_format($devuelta,2); ?>
                            </td>
                        </tr>
                  </table>
                </td>
            </tr>
    </table> <br>
    <p class="centrado"> "Comprobante de pago"    
  </div>
</body>
</html>

<!-- <script type="text/javascript">
  $(document).ready(function(){  

          // precionar escape para volver a la factura luego de imprimir 
    $(document).keyup(function(event){
        if(event.which==27)
        {
           window.location.href="rfactura.php"            
        }
    }); 
    </script> -->