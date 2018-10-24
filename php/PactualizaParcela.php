<?php 

	require_once "conexion.php";

		$conexion=conexion();



		$id=$_POST['id'];

		$v1=$_POST['nombre'];

		$v2=$_POST['numero'];

		$v3=$_POST['zona'];

		$v4=$_POST['nota'];
		$v5=$_POST['idsocio'];



	$sql="UPDATE parcela set nombre='$v1',

			     			   numero='$v2',

			     			   zona='$v3',

			                   nota='$v4',
			                    id_socio='$v5'				                    

			             where id='$id'";

	echo $resul=mysqli_query($conexion,$sql);		             

		                   	

?>	