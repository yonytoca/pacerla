<?php 

	require_once "conexion.php";
		$conexion=conexion(); 

		$id=$_POST['id'];
		$v1=$_POST['nombre'];
		$v2=$_POST['serie'];
		$v3=$_POST['division'];
//		$v4=$_POST['punto'];
//		$v5=$_POST['area'];
//		$v6=$_POST['tipo'];


	$sql="UPDATE ncf SET nombre =  '$v1',
								serie ='$v2',
								division_n =$v3
						WHERE id =$id";
	echo $resul=mysqli_query($conexion,$sql);		             
		                   	
?>	