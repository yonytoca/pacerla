<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['nombre']; 
	$v2=$_POST['serie'];
	$v3=$_POST['division'];
//	$v4=$_POST['punto'];
//	$v5=$_POST['area'];
//	$v6=$_POST['tipo'];   


	$sql="INSERT INTO ncf (nombre, 
								serie, 
								division_n
								) 
					VALUES ('$v1',
							 '$v2', 
							 '$v3')";
	echo $resul=mysqli_query($conexion,$sql);	 	
?>