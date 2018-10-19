<?php 

	require_once "conexion.php";
		$conexion=conexion(); 

	$id=$_POST['idempresa'];

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
		
	
	$sql="UPDATE empresa set nombre='$v0',
			     			   rnc='$v1',
			     			   direccion='$v2',
			                   telefono1='$v3',
			                   telefono2='$v4',
			                   tel_movil='$v5',
							   pagina_web='$v6',
							   correo='$v7',
							   pais='$v9',
			                   codigo_postal='$v8'
			             where id='$id'";
	echo $resul=mysqli_query($conexion,$sql);		             
		                   	
?>	