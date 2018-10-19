<?php 
	require_once "conexion.php";

		$conexion=conexion(); 

		$id=$_POST['idproductou'];
		$v1=$_POST['descripcionu'];
		$v2=$_POST['cantidadu'];
		$v3=$_POST['notaAu'];

	$sql="UPDATE orden_detalle SET descripcion ='$v1',
								cantidad ='$v2',
								nota ='$v3'
						WHERE id =$id";

	echo $resul=mysqli_query($conexion,$sql);		             

		                   	

?>	