<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['fecha'];
	$v2=$_POST['hora'];
	$v3=$_POST['idfactura'];
	$v4=$_POST['idproveedor'];
	$v5=$_POST['idusuario'];
	$v6=$_POST['idempresa'];

				            $sql1="select * from factura_detalle where id_factura_entrada=$v3";
                            $resul1=mysqli_query($conexion,$sql1);
                            $ver1=mysqli_fetch_row($resul1); 

	if($ver1 != 0){
				$sql="insert into factura_entrada(id_proveedor, 
											id_usuario,											
											fecha,
											hora) 
							  				values('$v4',
							  						'$v5',
							  						'$v1',
							  						'$v2')";
				echo $resul=mysqli_query($conexion,$sql);
	}
?>