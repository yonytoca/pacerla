<?php
	require_once "conexion.php";
	$conexion=conexion();


	$v1=$_POST['nombre'];
	$v2=$_POST['clave'];
	$v3=$_POST['correo'];
	$v4=$_POST['nota'];

			$sql="SELECT nombre FROM usuario WHERE nombre='$v1'";
				$resul=mysqli_query($conexion,$sql);
				$ver=mysqli_num_rows($resul);	

	if($ver==0){
			$sql="insert into usuario(nombre,clave,correo,nota) 
							  values('$v1','$v2','$v3','$v4')";
			echo $resul=mysqli_query($conexion,$sql);
		 }?>