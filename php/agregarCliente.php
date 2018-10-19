<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['nombre'];
	$v2=$_POST['apellido'];
	$v3=$_POST['direccion'];
	$v4=$_POST['telefono'];
	$v5=$_POST['tel_movil'];
	$v6=$_POST['correo'];
	$v7=$_POST['rnc']; //comprobar la varible para no dejar vacio 
	$v8=$_POST['nota'];
	$v9=$_POST['rncNull'];
	$v10=$_POST['idcomprobante'];

 			$sql="SELECT rnc FROM cliente WHERE rnc='$v7'";
				$resul=mysqli_query($conexion,$sql);
				$ver=mysqli_num_rows($resul);	

	if($ver==0){
		if ($v7 != ""){
			$sql="insert into cliente(nombre,apellido,direccion,telefono,tel_movil,correo,rnc,nota,id_comprobante) 
					  values('$v1','$v2','$v3','$v4','$v5','$v6','$v7','$v8','$v10')";
		
			echo $resul=mysqli_query($conexion,$sql);
		}else{
			$sql="insert into cliente(nombre,apellido,direccion,telefono,tel_movil,correo,rnc,nota,id_comprobante) 
					  values('$v1','$v2','$v3','$v4','$v5','$v6','$v9','$v8','$v10')";
		
			echo $resul=mysqli_query($conexion,$sql);
		}
	}	 	
?>