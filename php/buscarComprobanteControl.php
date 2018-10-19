<?php
		require_once "conexion.php";
		$conexion=conexion();		
		@$v1=$_POST['bus'];		
			if($v1){$sql="select nc.nombre  
						from cliente as c, ncf as nc
						where c.id_comprobante = nc.id and c.id = $v1"; 
						$resul=mysqli_query($conexion,$sql);					
	  						while($ver=mysqli_fetch_row($resul)){echo "Factura validad para: ".$ver[0];
	  					}
   			}else{ $sql="select nc.nombre  
						from cliente as c, ncf as nc
						where c.id_comprobante = nc.id and c.id = 1"; 
						$resul=mysqli_query($conexion,$sql);					
	  						while($ver=mysqli_fetch_row($resul)){echo "Factura validad para: ".$ver[0];
	  					}}
	  					?>