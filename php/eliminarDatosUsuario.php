<?php
	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['id'];	
	
	if($id != 1){
		$sql="delete from usuario where id = $id";
		echo $resul=mysqli_query($conexion,$sql);	
	} 	


?>