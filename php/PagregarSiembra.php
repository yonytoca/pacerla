<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['idproducto'];

	$v2=$_POST['idparcela'];

	$v3=$_POST['cantidad'];

	$v4=$_POST['fechasiembra'];
	$v5=$_POST['nota'];





	if($v1 !=""){

		

			$sql="INSERT INTO siembra (id_producto, cantidad, id_parcela, fecha_siembra, nota) VALUES ('$v1', '$v3', '$v2', '$v4', '$v5' );";		

			echo $resul=mysqli_query($conexion,$sql);

		}	

?>