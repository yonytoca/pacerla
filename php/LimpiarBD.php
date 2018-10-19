<?php 

	require_once "conexion.php";
		$conexion=conexion();

	$sql="TRUNCATE table categoria";
	echo $resul=mysqli_query($conexion,$sql);	

		$sql="TRUNCATE table cliente";
	echo $resul=mysqli_query($conexion,$sql);		             
		                   	
//		$sql="TRUNCATE table empresa";
//	echo $resul=mysqli_query($conexion,$sql);	

		$sql="TRUNCATE table factura";
	echo $resul=mysqli_query($conexion,$sql);	

//		$sql="TRUNCATE table factura_condicion_pago";
//	echo $resul=mysqli_query($conexion,$sql);			                   	

		$sql="TRUNCATE table factura_detalle";
	echo $resul=mysqli_query($conexion,$sql);	

//		$sql="TRUNCATE table itbis";
//	echo $resul=mysqli_query($conexion,$sql);

//		$sql="TRUNCATE table ncf";
//	echo $resul=mysqli_query($conexion,$sql);	

		$sql="TRUNCATE table producto";
	echo $resul=mysqli_query($conexion,$sql);	

			$sql="TRUNCATE table proveedor";
	echo $resul=mysqli_query($conexion,$sql);		
?>	
