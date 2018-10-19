<?php
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];	
	
	$sql="update producto set activo ='1' where id = $id ";
	echo $resul=mysqli_query($conexion,$sql);

?>