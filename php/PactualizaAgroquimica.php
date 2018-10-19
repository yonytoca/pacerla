<?php 

	require_once "conexion.php";

		$conexion=conexion();



		$id=$_POST['id'];

		$v1=$_POST['nombre'];

		$v2=$_POST['nota'];

		



	$sql="UPDATE agroquimica set nombre='$v1',

			     			   nota='$v2'	     			  		                    

			             where id='$id'";

	echo $resul=mysqli_query($conexion,$sql);		             

		                   	

?>	