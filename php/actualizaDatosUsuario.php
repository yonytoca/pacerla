<?php 

	require_once "conexion.php";
		$conexion=conexion();

		$id=$_POST['id'];
		$v1=$_POST['nombre'];
		$v2=$_POST['clave'];		
		$v3=$_POST['correo'];		
		$v4=$_POST['nota'];

		// 		$sql="SELECT id,nombre FROM usuario WHERE nombre='$v1'";
		// 		$resul=mysqli_query($conexion,$sql);
		// 		$ver=mysqli_num_rows($resul);
		// if($ver==0){					
			$sql="UPDATE usuario SET nombre = '$v1', clave='$v2',correo='$v3',nota='$v4' WHERE id =$id";
			echo $resul=mysqli_query($conexion,$sql);		             		                   	
	//	}	
?>			