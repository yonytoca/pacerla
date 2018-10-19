<?php

	require_once "conexion.php";

	$conexion=conexion();

	$v1=$_POST['fecha'];
	$v2=$_POST['hora'];
	$v3=$_POST['idorden'];
	$v4=$_POST['idsocio'];
	$v5=$_POST['idparcela'];
	$v6=$_POST['idagroquimica'];
	$v7=$_POST['idusuario'];

			$sql="SELECT id FROM orden WHERE id=$v3";
				$resul=mysqli_query($conexion,$sql);
				$ver=mysqli_num_rows($resul);

	if($ver==0){			

				$sql="insert into orden(id_socio, 
											id_proveedor,
											id_parcela,
											fecha,
											hora,
											id_usuario) 

							  				values('$v4',
							  						'$v6',
							  						'$v5',
							  						'$v1',
							  						'$v2',
							  						'$v7')";

				echo $resul=mysqli_query($conexion,$sql);



}else{

		$sql="UPDATE factura_detalle set 

										id_factura='$v2',

										id_producto='$v1',

										cantidad='$v5',

										precio='$v4',

										itb='$itb',

										importe='$importe',

										total='$total',

										descuento ='$desc'								

					             where id_producto='$v1'";

			echo $resul=mysqli_query($conexion,$sql);



}

	 	

?>