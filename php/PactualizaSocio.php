<?php 
	require_once "conexion.php";
		$conexion=conexion();

		$nombre=$_POST['nombre'];
		$v1=$_POST['apellido'];
		$v2=$_POST['cedula'];
		$v3=$_POST['direccion'];
		$v4=$_POST['idparcela'];
		$id=$_POST['idsocio'];

	$sql="UPDATE socio set nombre='$nombre',
			     			   apellido='$v1',
			     			   cedula='$v2',
			                   direccion='$v3',	
			                   id_parcela='$v4'			                    
			             where id='$id'";
	echo $resul=mysqli_query($conexion,$sql);		             
		                   	
?>	