<?php 

	require_once "conexion.php";

		$conexion=conexion();

		$id=$_POST['idgasto'];
		$v1=$_POST['detalle'];
		$v6=$_POST['cantidad'];
		$v5=$_POST['idparcela'];
		$v6=$_POST['factura'];
		$v7=$_POST['orden'];
		$v8=$_POST['fecha1'];

if($v5 !=""){
	$sql="UPDATE gastos set detalle='$v1',
			     			   cantidad='$v6',
			     			   id_parcela='$v5',
			     			   id_factura='$v6',
			     			   id_orden='$v7',
			     			   fecha_gasto='$v8'

			             where id='$id'";

	echo $resul=mysqli_query($conexion,$sql);		             
}
		                   	

?>	