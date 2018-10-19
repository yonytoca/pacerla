<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['detalle'];
	$v2=$_POST['cantidad'];
	$v3=$_POST['fecha'];
	$v4=$_POST['idparcela'];
	$v5=$_POST['hora'];
	$v7=$_POST['factura'];
	$v8=$_POST['orden'];
	$v9=$_POST['fecha1'];
	$v6="SI";	

	if($v1 !=""){		
// nota el id_factura es de la factura agroquimica para relacionarla con el numero de orden
			$sql="insert into gastos(detalle, cantidad, fecha, id_parcela, hora, estado, id_factura, id_orden, fecha_gasto) 
					  values('$v1','$v2','$v3','$v4', '$v5','$v6', '$v7', '$v8', '$v9')";		

			echo $resul=mysqli_query($conexion,$sql);

		}	

?>