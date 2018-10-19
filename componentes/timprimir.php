<?php	
//	require_once "../php/conexion.php";
//	$conexion=conexion()
?>

<div class="row">
	<div class="col-sm-12" >
      <table class="table table-hover table-condensed table-bordered" class="table table-striped">
      <tr>
        <td width=" 30%" id="busCliente">
        		    <?php  require_once"./php/buscarClientePrin.php"; ?>   
        </td>
         <td>
               		<?php  require_once"./php/datosFacturaprint.php"; ?>  
         </td>               
         <td width="30%">
                    <?php  require_once"./php/buscarEmpresa.php"; ?> 
        </td>
      </tr>
      </table> 			

		<table class="table table-hover table-condensed " class="table table-striped">


			<tr>
				<td>Codigo</td>
				<td>Descripcion</td>				
				<td>Precio</td>
				<td>Cantidad</td>
				<td>Desc</td>
				<td>ITB</td>
				<td>Importe</td>
				<td>Total</td>
				
			</tr>
	
		<tbody >
			<?php
				$itb =0;
				$subtotal =0;
				$desc = 0;
				$total =0;
		 // 	echo "Eduardo". @$idF = $_POST['idfactura'];

			//	@$id = $_POST['id'];
			//	$id_factura=$_POST['idfactura'];

				$sql="select p.id,
								p.codigo_barra, 
								p.descripcion,
								f.precio,
								f.cantidad,
								f.itb,
								f.importe,
								f.total,
								f.descuento,
								f.id_factura
						from factura_detalle as f, producto as p where p.id=f.id_producto and f.id_factura=".$idF." group by f.id";
				$resul=mysqli_query($conexion,$sql);
				while(@$ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $ver[5]."||".
							   $ver[6]."||".
							   $ver[7]."||". 
							   $ver[8]."||".						  
							   $ver[9]."||".
							   $upd=1;	

						$itb = $itb + $ver[5];
						$subtotal=$subtotal + $ver[6];
						$desc = $desc + $ver[8];
						$total = ($subtotal-$desc)+$itb;


			?>
		
			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[7] ?></td>
				
			</tr>
			
			<?php
				} 			
					$datos1=$itb."||".
						   $desc."||".
						   $total;
			?>
			<tr>
				<td colspan="8">				
					<table align="right" class="table table-hover table-condensed table-bordered" class="table table-striped">
						<tr><td colspan="8"></td></tr>
						<tr>						 
							<td>Descuento</td>
							<td><label><?php echo $desc; ?></label></td>
							<td>ITB</td>
							<td><label id="itbi"><?php echo $itb; ?></label></td>
							<td>Sub-Total</td>
							<td><label><?php echo $subtotal; ?></label></td>
							<td>Total a Pagar</td>							
							<td>
								
								<label id="total"><?php echo $total; ?></label>
							</td>
						</tr>
						<tr>
							<td colspan="8" align="right">
								<table>
									<tr>
										<td>
											
										</td>
										<td>
							
										</td>
										<td>

										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</tbody>
		</table>
	</div>
</div>