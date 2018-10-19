<?php
	require_once "../php/conexion.php";
	$conexion=conexion()
?>

<div class="row">
	<div class="col-sm-12" >
		<table class="table table-hover table-condensed table-bordered " class="table table-striped">

			<tr bgcolor="#2ECCFA">
				<th>Linea N.</th>
				<th>Factura</th>								
				<th>Balance pendiente</th>	
				<th>Monto a pagado</th>
				<th>Balance despues del pago </th>		
				<th>Elim.</th>				
			</tr>
	
		<tbody align="left" >
			<?php
				$itb =0;
				$subtotal =0;
				$desc = 0;
				$desc_can =0;
				$total =0;
				@$id = $_POST['id']; 
				$cont = 1;
			//	$id_factura=$_POST['idfactura'];

				$sql="SELECT * 	FROM ingreso_detalle 
												WHERE id_ingreso = $id 
								";

				$resul=mysqli_query($conexion,$sql);
				while(@$ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $upd=1;	

						// $itb = $itb + $ver[5];
						   $total=$total + $ver[4];
						// $desc = $desc + $ver[8];
						// $desc_can = $desc_can + $ver[11];
						// $total = ($subtotal-($desc + $desc_can))+$itb;


			?>
		
			<tr>
				<td><?php echo $cont++ ?></td>
			
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<th><?php echo $ver[4] ?></th>
				<th><?php echo $ver[3]-$ver[4] ?></th>

				<td>
						
					<button class="btn btn-danger glyphicon glyphicon-remove btn-xs" id="eliminar"							onclick="eliminarFacturaRecibo('<?php echo $datos ?>')">				
					</button>
				</td>
			</tr>
			
			<?php
				} 			
					 $datos1=$itb."||".
					 	   $desc."||".
					 	   $total;
			?>
			<tr>
				<td colspan="8">				
					<table align="right" class="table table-hover table-condensed  class="table table-striped">
						<tr><td colspan="8"></td></tr>
						<tr>						 
							<td></td>
							<td><label><?php //echo $desc + $desc_can; ?></label></td>
							<td></td>
							<td><label id="itbi"><?php //echo $itb; ?></label></td>
							<td></td>
							<td><label><?php // echo $subtotal; ?></label></td>
							<td align="right">Total a Pagar..:</td>							
							<td>
								<input type="hidden" id="total" value="<?php //echo $total ?>">
								<label id="total"><?php echo $total; ?></label>
							</td>
						</tr>
						<tr>
							<td colspan="8" align="right">
								<table>
									<tr>
										<td>
											
										</td>
										<!-- <td>
											<button id="cancelar" class="btn btn-warning" onclick="CancelarRecibo()">
				Cancelar
				
				</button>
										</td> -->
										<td>

											<button class="btn btn-success" data-toggle="modal" data-target="#modalPagos" onclick="CXCagregaformPago('<?php echo $datos1 ?>')">
				Pagar
				
 				</button>
											
											<button id="imprimir" class="btn btn-success" onclick="F_imprimir()" >
				Imprimir
				
				</button> 
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