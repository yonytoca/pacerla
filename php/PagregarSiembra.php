<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['idproducto'];

	$v2=$_POST['idparcela'];

	$v3=$_POST['cantidad'];

	$v4=$_POST['fechasiembra'];
	$v5=$_POST['nota'];
	$v6=$_POST['idunidad'];





	if($v1 !=""){

		

			$sql="INSERT INTO siembra (id_producto, cantidad, id_parcela, fecha_siembra, nota,id_unidad_medida) VALUES ('$v1', '$v3', '$v2', '$v4', '$v5','$v6' );";		

			echo $resul=mysqli_query($conexion,$sql);

		}	

?>