<?php

	require_once "conexion.php";

	$conexion=conexion();



	$id=$_POST['id'];

	$sql="delete from orden_detalle where id_orden = $id";

	echo $resul=mysqli_query($conexion,$sql);



?>