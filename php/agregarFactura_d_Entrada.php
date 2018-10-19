<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['idfactura'];
	$v2=$_POST['idproducto'];	
	$v4=$_POST['cantidadu'];

				            $sql1="select id_producto from factura_detalle where id_producto=$v2 and id_factura_entrada=$v1";
                            $resul1=mysqli_query($conexion,$sql1);
                            $ver1=mysqli_fetch_row($resul1); 

	if($ver1){
				
$sql="UPDATE factura_entrada_detalle set 
										id_factura_entrada='$v1',
										id_producto='$v2',
										cantidad_entrada='$v4'								
					             where id_producto=$v2 and id_factura_entrada=$v1 ";
			echo $resul=mysqli_query($conexion,$sql);
		
}else{
						$sql="insert into factura_detalle(	id_factura_entrada,
													id_producto, 
													cantidad_entrada													
													) 
							  				values( '$v1',
							  						'$v2',
							  						'$v4') ";							  					
				echo $resul=mysqli_query($conexion,$sql);
}
	 	
?>