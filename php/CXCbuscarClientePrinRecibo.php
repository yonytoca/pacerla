<table>
	<?php
		require_once "conexion.php";
		$conexion=conexion();	
				$sql="SELECT * FROM cliente WHERE id=".$idC;
				$resul=mysqli_query($conexion,$sql);					
	?>
	<?php  while($ver=mysqli_fetch_row($resul)){ ?>		
	<tr> 
		<td colspan="3"> RNC Cliente </td> 
		<td><?php echo $ver[9] ?> </td>		
	</tr>
	<tr>
		<td colspan="4">Nombre o razon social </td>
	</tr>
	<tr>
		<td colspan="4"> <?php echo $ver[1] ?> </td>
	</tr>

	<?php }// }else{echo "Cliente no existe.";}?>		
</table>