<?php 
	require_once "conexion.php";

		$conexion=conexion(); 

		$id=$_POST['idproductou'];
		$v1=$_POST['descripcionu'];
		$v2=$_POST['cantidadu'];
		$v3=$_POST['notaAu'];
		$v4=$_POST['idunidadu'];

	$sql="UPDATE orden_detalle SET descripcion ='$v1',
								cantidad ='$v2',
								nota ='$v3',
								id_unidad_medida='$v4'
						WHERE id =$id";

	echo $resul=mysqli_query($conexion,$sql);		             

		                   	

?>	