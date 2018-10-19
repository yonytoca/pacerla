<?php

	require_once "../php/conexion.php";

	$conexion=conexion()

?>



<div class="row">

	<div class="col-sm-12" >

		<table class="table table-hover table-condensed table-bordered " class="table table-striped">



			<tr class="warning">

				<th>Linea N.</th>

				<!-- <th>Codigo</th> -->

				<th>Descripcion</th>				

				<th>Precio</th>

				<th>Cantidad</th>

				<th>Desc. % </th>

				<th>Desc. Can.</th>

				<th>ITBIS</th>

				<th>Importe</th>

				<th>Total</th>

				<th>Edi./Elim.</th>

				

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



				$sql="select p.id,

								p.codigo_barra, 

								p.descripcion,

								f.precio,

								f.cantidad,

								f.itb,

								f.importe,

								f.total,

								f.descuento,

								f.id_factura,

								f.id,

								f.descuento_can

						from factura_detalle as f, producto as p where p.id=f.id_producto and f.id_factura=".$id." group by f.id";

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

							   $ver[10]."||".

							   $ver[11]."||". 

							   $upd=1;	



						$itb = $itb + $ver[5];

						$subtotal=$subtotal + $ver[6];

						$desc = $desc + $ver[8];

						$desc_can = $desc_can + $ver[11];

						$total = ($subtotal-($desc + $desc_can))+$itb;





			?>

		

			<tr>

				<td><?php echo $cont++ ?></td>

				<!-- <td><?php //echo $ver[1] ?></td> -->

				<td><?php echo $ver[2] ?></td>

				<td><?php echo $ver[3] ?></td>

				<td><?php echo $ver[4] ?></td>

				<td><?php echo $ver[8] ?></td>

				<td><?php echo $ver[11] ?></td>

				<td><?php echo $ver[5] ?></td>

				<td><?php echo $ver[6] ?></td>

				<td><?php echo $ver[7] ?></td>

				<td>

					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformFacturaDetalle('<?php echo $datos ?>')" ></button>

				

					<button class="btn btn-danger glyphicon glyphicon-remove btn-xs" id="eliminar"							onclick="eliminarProductoF(<?php echo $ideliminar = $ver[10] ?>)">				

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

					<table align="right" class="table table-hover table-condensed table-bordered" class="table table-striped">

						<tr><td colspan="8"></td></tr>

						<tr>						 

							<td>Descuento</td>

							<td><label><?php echo $desc + $desc_can; ?></label></td>

							<td>ITB</td>

							<td><label id="itbi"><?php echo $itb; ?></label></td>

							<td>Sub-Total</td>

							<td><label><?php echo $subtotal; ?></label></td>

							<td>Total a Pagar</td>							

							<td>

								<input type="hidden" id="total" value="<?php echo $total ?>">

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

											<button id="cancelar" class="btn btn-xs" onclick="eliminarFactura()">

				Cancelar

				

				</button>

										</td>

										<td>



											<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalPagos" onclick="agregaformPago('<?php echo $datos1 ?>')">

				Facturar

				
<!-- 
 				</button>

											

											<button id="imprimir" class="btn btn-success" onclick="F_imprimir()" >

				Imprimir

				

				</button>  -->

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