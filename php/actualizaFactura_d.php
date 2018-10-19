<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['idfactura'];
	$v2=$_POST['idproducto'];		
	$v3=$_POST['ventau'];
	$v4=$_POST['cantidadu'];
	$v5=$_POST['desc'];
	
	$itb = (($v3*18) / 100) * $v4;
	$importe = $v3*$v4;
	$total = ($itb+$importe)-$v5;
				
$sql="UPDATE factura_detalle set 
										id_factura='$v1',
										id_producto='$v2',
										cantidad='$v4',
										precio='$v3',
										itb='$itb',
										importe='$importe',
										total='$total',
										descuento='$v5'								
					             where id_producto='$v2'";
			echo $resul=mysqli_query($conexion,$sql);
		
?>