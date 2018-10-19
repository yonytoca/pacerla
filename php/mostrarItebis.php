<?php
	require_once "conexion.php";
	$conexion=conexion();
?>
	     <select id="iditebis">
              <!--  <option value="" > Tipo Comprobante </option>   -->                    
                            <?php                             
                                $sql2="select * from ncf";
                                $resul2=mysqli_query($conexion,$sql2);
                                while($ver2=mysqli_fetch_row($resul2)){ 
                             ?>     
                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 
                             <?php } ?>
         </select>

