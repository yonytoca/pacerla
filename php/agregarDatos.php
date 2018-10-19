<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['nombre'];
	$v2=$_POST['apellido'];
	$v3=$_POST['direccion'];
	$v4=$_POST['telefono'];
	$v5=$_POST['tel_movil'];
	$v6=$_POST['correo'];
	$v7=$_POST['rnc'];
	$v8=$_POST['nota'];
 			$sql="SELECT nombre FROM cliente WHERE nombre='$v1'";
				$resul=mysqli_query($conexion,$sql);
				$ver=mysqli_num_rows($resul);	

	if($ver==0){
	$sql="insert into cliente(nombre,apellido,direccion,telefono,tel_movil,correo,rnc,nota) 
					  values('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8')";
	echo $resul=mysqli_query($conexion,$sql);
	}	 	
?>