<table>
<tr>
	<td colspan="4" align="center">
		
	</td>
</tr>
<?php	
		$sqle="SELECT * FROM empresa WHERE id=1";
		$resule=mysqli_query($conexion,$sqle);	 ?>
			
			<?php  while($vere=mysqli_fetch_row($resule)){ ?>
				
				<input type="hidden" id="idempresa" value="<?php echo $vere[0] ?>">
					<tr>
						<td> <?php echo $vere[1] ?> </td>
						<td> <?php echo $vere[2] ?> </td>
						<td> <?php echo $vere[3] ?> </td>
						<td> <?php echo $vere[4] ?></td>	
					</tr>
				
			<?php } ?>
</table>