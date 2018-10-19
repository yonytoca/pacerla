<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['id']; 
	$v2=$_POST['nombre'];
	$v3=$_POST['nota'];


		$sql="UPDATE factura_condicion_pago set descripcion='$v2',
			     			   nota='$v3'
			             where id=$v1";
	echo $resul=mysqli_query($conexion,$sql);

?>