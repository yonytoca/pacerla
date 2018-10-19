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
                                    $sql="SELECT o.id, s.nombre, a.nombre, p.nombre FROM orden as o
                                            left join  socio as s on s.id=o.id_socio
                                            left join  agroquimica as a on a.id=o.id_proveedor
                                            left join  parcela as p on p.id=o.id_parcela
                                            where o.id =".$idO;
                                    $resul=mysqli_query($conexion,$sql);
                                    while($ver1=mysqli_fetch_row($resul)){
                              ?>  
                              <tr>
                              <td>                             
                              Agroquimica:                                                     
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[2]; ?> 
                            </td>
                            </tr>
                              <tr>
                              <td>                            
                          
                               Socio:         
                    
                            </td>
                            <td align="left" >
                              <?php echo $ver1[1]; ?>
                            </td>
                            </tr>
                              <tr>
                              <td>                              
                          
                              Parcela:                      
                    
                            </td>
                            <td align="left" >
                               <?php echo $ver1[3]; ?>  
                            </td>
                            </tr>                                                        
                    <?php  }?>

                </table>

  </div>
  <div class="caja2">
                        <table>
                                  
                               <?php
                                    $sql="SELECT * FROM orden 
                                            where id =".$idO;
                                    $resul=mysqli_query($conexion,$sql);
                                    while($ver1=mysqli_fetch_row($resul)){
                              ?>  
                              <tr>
                              <td>                             
                              
                              Orden #:                        
                    
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
                              <?php echo $ver1[1]; ?>
                            </td>
                            </tr>
                              <tr>
                              <td>                              
                          
                              Hora:                      
                    
                            </td>
                            <td align="left" >
                               <?php echo $ver1[2]; ?>  
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
                                    $sql="SELECT u.nombre FROM orden as o
                                            left join  usuario as u on u.id=o.id_usuario
                                            where o.id =".$idO;
                                    $resul=mysqli_query($conexion,$sql); 

                                    while($ver=mysqli_fetch_row($resul)){

                              ?>                            
                           
                              Usuario <?php echo $ver[0]; }?>                        
                    
                    </td>
                  </tr>
                </table>
  </div>
 
</div>


