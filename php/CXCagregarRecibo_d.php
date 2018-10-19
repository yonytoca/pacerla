<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['idrecibo'];
	$v2=$_POST['idfactura'];		
	$v3=$_POST['fechau'];
	$v4=$_POST['montou'];
	$v5=$_POST['monto_a_pagaru'];
	$v6=$_POST['monto_pagado'];
	$nuevo_monto = $v5 + $v6;


				            $sql1="select id_factura from ingreso_detalle where id_factura=$v2 and id_ingreso=$v1";
                            $resul1=mysqli_query($conexion,$sql1);
                            $ver1=mysqli_fetch_row($resul1); 

	if($ver1){
	
// 	// Agregar las facturas a pagar en el recibo detalle			
// $sql="UPDATE ingreso_detalle set 
// 										id_factura='$v2',
// 										id_ingreso='$v1',
// 										monto_factura='$v4',
// 										monto_pagado='$v5'

// 					             where id_ingreso=$v1 and id_factura=$v2 ";
// 			echo $resul=mysqli_query($conexion,$sql);
	
// 	// actualizar las facturas en el monto pagado 				
// $sql1="UPDATE factura set 						
// 						monto_pagado='$nuevo_monto'
// 					 where id=$v2";
// 			echo $resul1=mysqli_query($conexion,$sql1);
		

}else{
						$sql="insert into ingreso_detalle( id_factura, 
													id_ingreso, 
													monto_factura, 
													monto_pagado ) 
							  				values( '$v2',
							  						'$v1',
							  						'$v4',
							  						'$v5')";
				echo $resul=mysqli_query($conexion,$sql);

	// actualizar las facturas en el monto pagado 				
$sql1="UPDATE factura set 						
						monto_pagado='$nuevo_monto'
					 where id=$v2";
			echo $resul1=mysqli_query($conexion,$sql1);			
}
?>