<?php
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];
	$idfactura=$_POST['Ridfactura'];
	$balanceM=$_POST['balance'];

		// actualizar las facturas en el monto pagado 	

				$sql2="SELECT monto_pagado
							FROM factura 
							WHERE id = $idfactura
							LIMIT 0 , 30";

				$resul2=mysqli_query($conexion,$sql2);
				while(@$ver=mysqli_fetch_row($resul2)){
						
						$balance = $ver[0] - $balanceM;
		// actualizar las facturas en el monto pagado 				
		$sql1="UPDATE factura set 						
						monto_pagado='$balance'
					 where id = $idfactura ";
			echo $resul1=mysqli_query($conexion,$sql1);
		}

	
// eliminar el registro de la tabla detalle 			
	$sql="delete from ingreso_detalle where id = $id ";
	echo $resul=mysqli_query($conexion,$sql);

?>