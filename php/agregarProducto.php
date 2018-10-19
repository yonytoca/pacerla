<?php

	require_once "conexion.php";

	$conexion=conexion();



	$v1=$_POST['descripcion']; 

//	$v2=$_POST['costo'];

//	$v3=$_POST['venta'];

//	$v4=$_POST['cantidad'];

//	$v5=$_POST['ubicacion'];

//	$v6=$_POST['categoria'];   
//
//	$v7=$_POST['codigo_barra'];

	$v8=$_POST['iditebis'];

//	$v9=$_POST['venta2'];

//	$v10=$_POST['venta3'];



				 $sql="SELECT * FROM producto WHERE descripcion='$v1'";

				 $resul=mysqli_query($conexion,$sql);

				 $ver=mysqli_num_rows($resul);	
if ($ver ==0){
if ($v1){



	$sql="INSERT INTO producto (descripcion,						

								id_itebis) 

					VALUES ('$v1',

							 '$v8')";

	echo $resul=mysqli_query($conexion,$sql);	

}
}

?>