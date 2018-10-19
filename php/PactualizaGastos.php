<?php 
	require_once "conexion.php";
		$conexion=conexion();

		$id=$_POST['idgasto'];
		$v1=$_POST['detalle'];
		$v6=$_POST['cantidad'];
		$v5=$_POST['idparcela'];

	$sql="UPDATE gastos set detalle='$v1',
			     			   cantidad='$v6',
			     			   id_parcela='$v5'			                    
			             where id='$id'";
	echo $resul=mysqli_query($conexion,$sql);		             
		                   	
?>	