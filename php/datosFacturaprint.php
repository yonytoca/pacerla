  <table >
                    <tr>						            
		                        <?php 	//echo $idF;	                        
		                            $sql2="select f.comprobante, c.nombre from factura as f, ncf as c where f.id_comprobante = c.id and f.id=".$idF;
		                            $resul2=mysqli_query($conexion,$sql2);
		                            while($ver2=mysqli_fetch_row($resul2)){ 
		                            		                         ?>   
		              	<td colspan="4">
		                        Factura de:  		             
		               	</td>
		            </tr> 
		            <tr>
			            <td colspan="4">
			            	<?php echo $ver2[1] ?>
			            </td>	
		            </tr>

		            <tr>
		            	<td colspan="4">
		            		 <?php echo "NCF:".$ver2[0] ?>  
		            	</td>
		                   <?php } ?>                                    			
					</tr>
					<tr>
						<td colspan="4">
							V: 8/10/2018
						</td>
					</tr>
  <?php       
  		@$fecha = date("d/m/Y");
  		@$hora = date("g:i a");
        $sql="select * from factura where id=".$idF;
        $resul=mysqli_query($conexion,$sql);
        while($ver1=mysqli_fetch_row($resul)){            
            $fechaprint= $ver1[2];
            $horaprint=$ver1[4];
            $id1= $ver1[0];  } 
            function formato($id1) { 
                printf("%011d",  $id1);                  
  ?>
  		<?php //echo// "fecha". @$ver1[2]; ?>
  		<?php //echo// @$ver1[4]; ?>				
	<?php } ?>
					<tr>
						
						<td colspan="4">NIF: 
							 <?php echo formato($id1) ?>	
						</td>		
	
					</tr>
					<tr>
						<td colspan="4">                  
		                        <?php 		                        
		                            $sql1="select * from factura_condicion_pago where id=".$idTp;
		                            $resul1=mysqli_query($conexion,$sql1);
		                            while($ver1=mysqli_fetch_row($resul1)){ 
		                         
		                          echo $ver1[1];
		                           } 
		                        ?>		              
                   		 </td>
                    </tr>                    	
                    <tr>                    	                   	
                    	<td colspan="2"> Fecha: <?php echo " ". $fechaprint ?>  </td>	
                    </tr>
                    	
                    <tr>					
						<td colspan="2"> Hora: <?php echo " ". $horaprint ?> <!-- <div id="conReloj"></div> --></td>
                    </tr>  
				</table>
			