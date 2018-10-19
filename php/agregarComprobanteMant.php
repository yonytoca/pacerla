<?php
	require_once "conexion.php";
	$conexion=conexion();


	$v1=$_POST['ncfM']; 
	$v2=$_POST['numeroinicio'];
	$v3=$_POST['numerofinal'];
	$v4=$_POST['fecha'];
	$v5=$_POST['hora1'];
	$v6=$_POST['idusuario'];

	$sql="INSERT INTO ncfmantenimiento (id_comprobante,
								numero_inicial, 
								numero_final,
								fecha,
								hora,
								id_usuario) 
					VALUES ('$v1',
							 '$v2', 
							 '$v3',
							 '$v4',
							 '$v5',
							 $v6)";
	echo $resul=mysqli_query($conexion,$sql);	 	
?>