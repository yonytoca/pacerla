<?php

	require_once "conexion.php";

	$conexion=conexion();


	$v1=$_POST['nombre'];
	$v2=$_POST['numero'];
	$v3=$_POST['zona'];
	$v4=$_POST['nota'];
	$v5=$_POST['psocio'];

	



	if($v1 !=""){

		

			$sql="insert into parcela(nombre,numero,zona,nota,id_socio) 

					  values('$v1','$v2','$v3','$v4','$v5')";		

			echo $resul=mysqli_query($conexion,$sql);

		}	

?>