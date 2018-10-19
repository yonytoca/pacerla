<?php
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];

// capturar el id de la factura y el usuario fecha y hora y guardar el registro
	
//	echo $id;	
	$sql="delete from factura_detalle where id_factura = $id";
	echo $resul=mysqli_query($conexion,$sql);

?>