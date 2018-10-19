<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['nombre'];
	$v2=$_POST['privilegio'];

	if($v1){
			$sql="insert into permiso(nombre,privilegio) 
							  values('$v1','$v2')";
			echo $resul=mysqli_query($conexion,$sql);
		 }?>