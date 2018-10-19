<?php
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];
	
	echo $id;	
	$sql="delete from t_persona where id = '$id'";
	echo $resul=mysqli_query($conexion,$sql);

?>