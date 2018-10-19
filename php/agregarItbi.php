<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['monto']; 
	$v2=$_POST['descripcion'];

	$sql="INSERT INTO itbis (monto, 
							descripcion) 
					VALUES ($v1,
							 '$v2' )";
	echo $resul=mysqli_query($conexion,$sql);	 	
?>