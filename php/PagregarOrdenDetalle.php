<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['descripcionA'];

	$v2=$_POST['cantidadA'];

	$v3=$_POST['notaA'];
	$v4=$_POST['idorden'];
	$v5=$_POST['idunidad'];

	if($v1 !=""){		

			$sql="insert into orden_detalle(descripcion,cantidad,nota,id_orden, id_unidad_medida) 

					  values('$v1','$v2','$v3',$v4, $v5)";		

			echo $resul=mysqli_query($conexion,$sql);

		}	

?>