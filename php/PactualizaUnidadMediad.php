<?php 

	require_once "conexion.php";

		$conexion=conexion();	

		$v1=$_POST['nombre'];
		$v2=$_POST['idunidad'];
		$v5=$_POST['notau'];

	$sql="UPDATE unidadmedida set nombre ='$v1',
			     			   nota='$v5'                 			                    

			             where id='$v2'";

	echo $resul=mysqli_query($conexion,$sql);		             

		                   	

?>	