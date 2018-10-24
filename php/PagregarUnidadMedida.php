<?php

	require_once "conexion.php";

	$conexion=conexion();

	$v1=$_POST['nombre'];
	$v5=$_POST['nota'];

	if($v1 !=""){		

			$sql="INSERT INTO unidadmedida (nombre, nota) VALUES ('$v1', '$v5' );";	
			echo $resul=mysqli_query($conexion,$sql);
		}	

?>