<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['nombre'];

	$v2=$_POST['nota'];

	





	if($v1 !=""){

		

			$sql="INSERT INTO agroquimica (nombre, nota) VALUES ('$v1', '$v2');";		

			echo $resul=mysqli_query($conexion,$sql);

		}	

?>