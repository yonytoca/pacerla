<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['idfactura'];
	$v2=$_POST['idproducto'];		
	$v3=$_POST['ventau'];
	$v4=$_POST['cantidadu'];
	$v5=$_POST['desc'];
	$v6=$_POST['upd'];
	$v7=$_POST['itb'];
	$v8=$_POST['desc_can'];
	
	$itbis = (($v3*$v7) * $v4);
	$importe = $v3*$v4;
	$total = ($itbis+$importe)-($v5+$v8);

				            $sql1="select id_producto from factura_detalle where id_producto=$v2 and id_factura=$v1";
                            $resul1=mysqli_query($conexion,$sql1);
                            $ver1=mysqli_fetch_row($resul1); 

	if($ver1){
				
$sql="UPDATE factura_detalle set 
										id_factura='$v1',
										id_producto='$v2',
										cantidad='$v4',
										precio='$v3',
										itb='$itbis',
										importe='$importe',
										total='$total',
										descuento='$v5',
										descuento_can='$v8'								
					             where id_producto=$v2 and id_factura=$v1 ";
			echo $resul=mysqli_query($conexion,$sql);
		
}else{
						$sql="insert into factura_detalle(	id_factura,													id_producto, 
													cantidad,
													precio,						
													itb,
													importe,
													total,
													descuento,
													descuento_can) 
							  				values( '$v1',
							  						'$v2',
							  						'$v4',
							  						'$v3',
							  						'$itbis',
							  						'$importe',
							  						'$total',
							  						'$v5',
							  						'$v8')";
				echo $resul=mysqli_query($conexion,$sql);
}
	 	
?>