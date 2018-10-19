<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['fecha'];
	$v2=$_POST['hora'];
	$v3=$_POST['idrecibo'];
	$v4=$_POST['idcliente'];
	$v5=$_POST['idusuario'];
	$v7=$_POST['total'];
//	$v8=$_POST['direccionentrega'];

	if($v7!=0){
				$sql="insert into ingreso( 	
											id_usuario,
											fecha,
											hora,
											monto_pagado,
											id_cliente) 
							  				values('$v5',
							  						'$v1',
							  						'$v2',
							  						'$v7',
							  						'$v4')";
				echo $resul=mysqli_query($conexion,$sql);
}	
?>