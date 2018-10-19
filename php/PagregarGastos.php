<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['detalle'];
	$v2=$_POST['cantidad'];
	$v3=$_POST['fecha'];
	$v4=$_POST['idparcela'];
	$v5=$_POST['hora'];
	$v6="SI";
	
	if($v1 !=""){
		
			$sql="insert into gastos(detalle, cantidad, fecha, id_parcela, hora, estado) 
					  values('$v1','$v2','$v3','$v4', '$v5','$v6')";		
			echo $resul=mysqli_query($conexion,$sql);
		}	
?>