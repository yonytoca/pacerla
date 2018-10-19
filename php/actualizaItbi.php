<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['monto']; 
	$v2=$_POST['descripcion'];
	$v3=$_POST['id'];


		$sql="UPDATE itbis set monto=$v1,
			     			   descripcion='$v2'
			             where id=$v3";
	echo $resul=mysqli_query($conexion,$sql);

?>