<?php 

	require_once "conexion.php";

		$conexion=conexion();

		$v4=$_POST['idparcela'];
		$id=$_POST['idsocio'];

if($v4){
			$sql="insert into r_parcela_socio(id_parcela, id_socio) 
					  values('$v4','$id')";		
			echo $resul=mysqli_query($conexion,$sql);		             
}
		                   	

?>	