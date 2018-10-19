<table border="0">

  <?php
		$sqle="SELECT * FROM empresa WHERE id=1";
		$resule=mysqli_query($conexion,$sqle);	 ?>			

			<?php  while($vere=mysqli_fetch_row($resule)){ ?>				

				<input type="hidden" id="idempresa" value="<?php echo $vere[0] ?>">

     <tr >
       <td >
         <img src="img/logojimenez.png" width="155" height="94" alt=""/> 
       </td>
                 
              <td align="center" >
              <font size="6">
               <?php echo $vere[1] ?>
              </font><br>
               <?php echo $vere[3] ?> 
               <?php echo "RNC: ". $vere[2] ?>
               <?php echo "Tel.: ". $vere[4] ?> <?php echo " ". $vere[5] ?>
               <?php echo "Correo:". $vere[8] ?> <br>
              </td>
    </tr>
          <?php } ?> 

    </table>
<!-- css de la impresion  -->
          <style type="text/css">
                  .tabla{
                   width: 100%;

                  }
                  .caja1{
                    width: 50%;
                    float: left;
                  }
                  .caja2{
                    width: 30%;
                    float: left;
                  }
                  .caja3{
                    width: 20%;
                    float: left;
                  }
          </style>
<br>
<div class="tabla"> 
  <div class="caja1">
    
                    <table> 
                                  
                               <?php
                                    $sql="SELECT f.id, c.nombre, c.apellido, c.direccion, c.telefono, c.correo, c.rnc
                                     FROM factura as f
                                            left join  cliente as c on c.id=f.id_cliente                                                                            
                                            where f.id =".$idF;
                                    $resul=mysqli_query($conexion,$sql);
                                    while($ver1=mysqli_fetch_row($resul)){
                              ?>  
                              <tr>
                              <td>                             
                             Cliente:                                                    
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[1]; ?> 
                            </td>
                            </tr>
                              <tr>
                              <td>                             
                             Apellido:                                                    
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[2]; ?> 
                            </td>
                            </tr>

                              <tr>
                              <td>                             
                             Direccion:                                                    
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[3]; ?> 
                            </td>
                            </tr>

                              <tr>
                              <td>                             
                             Telefono:                                                    
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[4]; ?> 
                            </td>
                            </tr>
                               <tr>
                              <td>                             
                             Correo:                                                    
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[5]; ?> 
                            </td>
                            </tr>

                    <?php  }?>

                </table>

  </div>
  <div class="caja2">
                        <table>
                                  
                               <?php
                                    $sql="SELECT * FROM factura
                                            where id =".$idF;
                                    $resul=mysqli_query($conexion,$sql);
                                    while($ver1=mysqli_fetch_row($resul)){
                              ?>  
                              <tr>
                              <td>                             
                              
                              Factura #:                        
                    
                            </td>                            
                            <td align="left" >
                              <?php echo $ver1[0]; ?> 
                            </td>
                            </tr>
                              <tr>
                              <td>                             
                          
                              Fecha:         
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[2]; ?>
                            </td>
                            </tr>
                              <tr>
                              <td>                              
                          
                              Hora:                      
                    
                            </td>
                            <td align="left" >
                               <?php echo $ver1[4]; ?>  
                            </td>
                            </tr>                                                        
                    <?php  }?>
                </table>
  </div>
  <div class="caja3">
                    <table>
                  <tr>
                    <td>                    
                               <?php
                                    $sql="SELECT u.nombre FROM factura as f
                                            left join  usuario as u on u.id=f.id_usuario
                                            where f.id =".$idF;
                                    $resul=mysqli_query($conexion,$sql); 

                                    while($ver=mysqli_fetch_row($resul)){

                              ?>                            
                           
                              Usuario <?php echo $ver[0]; }?>                        
                    
                    </td>
                  </tr>
                </table>
  </div>
 
</div>


