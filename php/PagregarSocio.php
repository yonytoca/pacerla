<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['nombre'];

	$v2=$_POST['apellido'];

	$v3=$_POST['cedula'];

	$v4=$_POST['telefono'];

	$v5=$_POST['direccion'];	



	if($v1 !=""){

		

			$sql="insert into socio(nombre, apellido, cedula, telefono, direccion) 

					  values('$v1','$v2','$v3','$v4','$v5')";		

			echo $resul=mysqli_query($conexion,$sql);

		}	

?>