<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v0=$_POST['nombre'];
	$v1=$_POST['rnc']; 
	$v2=$_POST['direccion'];
	$v3=$_POST['telefono1'];
	$v4=$_POST['telefono2'];
	$v5=$_POST['tel_movil'];
	$v6=$_POST['pagina_web'];   
	$v7=$_POST['correo'];
	$v8=$_POST['codigo_postal'];
	$v9=$_POST['pais'];

	$sql="INSERT INTO empresa(nombre, 
							   rnc,
							   direccion,
							   telefono1,
							   telefono2,
							   tel_movil,
							   pagina_web,
							   correo,
							   codigo_postal,
							   pais) 
					VALUES ( '$v0', 
							 '$v1',
							 '$v2', 
							 '$v3', 
							 '$v4', 
							 '$v5', 
							 '$v6',
							 '$v7',
							 '$v8',
							 '$v9' )";
	echo $resul=mysqli_query($conexion,$sql);	 	
?>