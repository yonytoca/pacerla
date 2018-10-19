<?php 



	require_once "conexion.php";

		$conexion=conexion(); 



		$id=$_POST['id'];

		$v1=$_POST['descripcion'];

	//	$v2=$_POST['costo'];

	//	$v3=$_POST['venta'];

	//	$v4=$_POST['venta2'];

	//	$v5=$_POST['venta3'];

		$v6=$_POST['iditebis'];

	//	$v7=$_POST['cantidad'];

//		$v8=$_POST['ubicacion'];

	//	$v9=$_POST['categoria'];

	//	$v10=$_POST['codigo_barra'];



		



	$sql="UPDATE producto SET descripcion ='$v1',

								id_itebis='$v6' 

						WHERE id =$id";

	echo $resul=mysqli_query($conexion,$sql);		             

		                   	

?>	