<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['fecha'];

	$v2=$_POST['hora'];

	$v3=$_POST['idfactura'];

	$v4=$_POST['idcliente'];

	$v5=$_POST['idusuario'];

	$v6=$_POST['idempresa'];

	$v7=$_POST['total'];

	$v8=$_POST['direccionentrega'];

	$v9=$_POST['tipo_pago'];

	//$v10=$_POST['id_comprobanteF']; 

	//$v11=$_POST['comprobanteF'];



			$sql="SELECT id FROM factura WHERE id=$v3";

				$resul=mysqli_query($conexion,$sql);

				$ver=mysqli_num_rows($resul);	



	if($ver==0){

					

				$sql="insert into factura(id_cliente, 

											id_usuario,

											id_empresa,

											fecha,

											hora,

											total,

											direccionentrega,

											id_tipo_pago) 

							  				values('$v4',

							  						'$v5',

							  						'$v6',

							  						'$v1',

							  						'$v2',

							  						'$v7',

							  						'$v8',

							  						'$v9')";

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