<?php 

	require_once "conexion.php";
		$conexion=conexion(); 

		$id=$_POST['idncfM'];
		$v1=$_POST['numeroinicio'];
		$v2=$_POST['numerofinal'];
	//	$v3=$_POST['fechau'];
	//	$v4=$_POST['hora1u'];
	//	$v5=$_POST['idusuariou'];


	$sql="UPDATE ncfmantenimiento SET numero_inicial = '$v1',
								numero_final ='$v2' 
						WHERE id =$id";
	echo $resul=mysqli_query($conexion,$sql);		             
		                   	
?>	