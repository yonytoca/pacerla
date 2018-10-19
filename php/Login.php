<?php
	require_once "conexion.php";
	$conexion=conexion();

	$user=$_POST['user'];
	$pass=$_POST['pass'];	
				$sql="select * from usuario where nombre = '$user' and clave = '$pass'";
				$resul=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1];	

			}
?>