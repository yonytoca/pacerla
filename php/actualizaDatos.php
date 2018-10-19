<?php 

	require_once "conexion.php";
		$conexion=conexion();

		$id=$_POST['id'];
		$v1=$_POST['nombre'];
		$v2=$_POST['apellido'];
		$v3=$_POST['direccion'];
		$v4=$_POST['telefono'];
		$v5=$_POST['tel_movil'];
		$v6=$_POST['correo'];
		$v7=$_POST['rnc']; //comprobar la varible para no dejar vacio 
		$v8=$_POST['nota']; 
		$v9=$_POST['rncNull'];
		$v10=$_POST['idcomprobante']; 


				if ($v7 !=""){

							$sql="UPDATE cliente set nombre='$v1',
									     			   apellido='$v2',
									     			   direccion='$v3',
									                   telefono='$v4',
									                   tel_movil='$v5',
									                   correo='$v6',
									                   rnc='$v7',
									                   nota='$v8',
									                   id_comprobante='$v10' 
									             where id='$id'";
							echo $resul=mysqli_query($conexion,$sql);		             		    
					} else {
						
							$sql="UPDATE cliente set nombre='$v1',
									     			   apellido='$v2',
									     			   direccion='$v3',
									                   telefono='$v4',
									                   tel_movil='$v5',
									                   correo='$v6',
									                   rnc='$v9',
									                   nota='$v8',
									                   id_comprobante='$v10' 
									             where id='$id'";
							echo $resul=mysqli_query($conexion,$sql);
				} 
		           	
?>	