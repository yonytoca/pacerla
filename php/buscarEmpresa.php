<table>
  <?php
		$sqle="SELECT * FROM empresa WHERE id=1";
		$resule=mysqli_query($conexion,$sqle);	 ?>			
			<?php  while($vere=mysqli_fetch_row($resule)){ ?>				
				<input type="hidden" id="idempresa" value="<?php echo $vere[0] ?>">
     <tr>
       <td>
         <?php echo $vere[1] ?> 
       </td>
     </tr>
          <tr>
       <td>
         Sucursal Constanza
       </td>
     </tr>
          <tr>
       <td>
         <?php echo $vere[3] ?>
       </td>
     </tr>
          <tr>
       <td>
         <?php echo "Tel.: ". $vere[4] ?>
       </td>
     </tr>
          <tr>
       <td>
         <?php echo "Tel.: ". $vere[5] ?>
       </td>
     </tr>
        <tr>
       <td>
        <?php echo "RNC: ". $vere[2] ?>         
       </td>
     </tr>
        <tr>
       <td>
         <?php echo "Correo:". $vere[8] ?>
       </td>
     </tr>
        <tr>
       <td>
         
       </td>
     </tr>
      			<?php } ?>
          
                  <?php
                  $sql="SELECT id_usuario FROM factura  WHERE id=".$idF;
                  $resul=mysqli_query($conexion,$sql);      
                  while($ver=mysqli_fetch_row($resul)){
                  $sql1="SELECT nombre FROM usuario  WHERE id=".$ver[0];
                  $resul1=mysqli_query($conexion,$sql1);        
                  while($ver1=mysqli_fetch_row($resul1)){
            ?>     
        <tr>
          <td>
            Usuario <?php echo $ver1[0]; }}?>
          </td>
        </tr>
</table>