<?php
	require_once "../php/conexion.php";
	$conexion=conexion()
?>

<div class="row">
	<div class="col-sm-12" >
	

		<table class="table table-hover table-condensed table-bordered " class="table table-striped">

			<tr bgcolor="#2ECCFA">
				<th>Linea N.</th>
				<th>Codigo</th>
				<th>Descripcion</th>				
				<th>Precio</th>
				<th>Cantidad</th>
				<th>Edi./Elim.</th>
				
			</tr>
	
		<tbody >
			<?php
				 @$id = $_POST['id'];
				$cont = 1;

				$sql="select p.id,
								p.codigo_barra, 
								p.descripcion,								
								f.cantidad_entrada,								
								f.id_factura_entrada,
								f.id,
								p.costo								
						from factura_detalle as f, producto as p where p.id=f.id_producto and f.id_factura_entrada=".$id." group by f.id_producto";
				$resul=mysqli_query($conexion,$sql);
				while(@$ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $ver[5]."||".
							   $ver[6]."||".							   
							   $upd=1;	
			?>
		
			<tr>
				<td><?php echo $cont++ ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformFacturaDetalle('<?php echo $datos ?>')" ></button>
				
					<button class="btn btn-danger glyphicon glyphicon-remove btn-xs" id="eliminar"							onclick="eliminarProductoF(<?php echo $ideliminar = $ver[4] ?>)">				
					</button>
				</td>
			</tr>
			
			<?php
				} 			
				//	$datos1=$itb."||".
				//		   $desc."||".
				//		   $total;
			?>
			<tr>
				<td colspan="8">				
					<table align="right" class="table table-hover table-condensed table-bordered" class="table table-striped">
						<tr><td colspan="8"></td></tr>
						<tr>						 
							<td>Descuento</td>
							<td><label><?php //echo  $desc; ?></label></td>
							<td>ITB</td>
							<td><label id="itbi"><?php //echo //$itb; ?></label></td>
							<td>Sub-Total</td>
							<td><label><?php //echo //$subtotal; ?></label></td>
							<td>Total a Pagar</td>							
							<td>
								<input type="hidden" id="total" value="<?php //echo // $total ?>">
								<label id="total"><?php //echo //$total; ?></label>
							</td>
						</tr>
						<tr>
							<td colspan="8" align="right">
								<table>
									<tr>
										<td>
											
										</td>
										<td>
											<button id="cancelar" class="btn btn-warning" onclick="eliminarFactura()">
				Cancelar
				
				</button>
										</td>
										<td>
											<button class="btn btn-success" data-toggle="modal" data-target="#modalPagos" onclick="agregaformPago('<?php //echo // $datos1 ?>')">
				Guardar
				
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