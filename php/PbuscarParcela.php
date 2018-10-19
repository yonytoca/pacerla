	<?php

		require_once "conexion.php";

		$conexion=conexion();



	 	@$v1=$_POST['socio'];        		

		if($v1){
            ?>
                <div class="input-group"><span class="input-group-addon">Parcela</span>               
                <select  id="idparcela" class="form-control"> 
               <?php                        


				$sql="SELECT p.id, p.nombre FROM socio as s 
                     left inner join parcela as p on s.id_parcela = p.id WHERE s.id=$v1";
				$resul=mysqli_query($conexion,$sql);

	                    while($ver=mysqli_fetch_row($resul)){ ?>	

                         <option value="<?php echo $ver[0]; ?>"><?php echo $ver[1]; ?></option> 

                         <?php } ?>

                    </select>  
                <!-- busqueda de parcela en el select y mostrado en el div resultado -->
          </div>