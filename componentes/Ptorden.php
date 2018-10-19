<?php
	require_once "../php/conexion.php";
	$conexion=conexion()
?>

<div class="row">

	<div class="col-sm-12" >

		<table class="table table-hover table-condensed table-bordered " class="table table-striped">

			<tr bgcolor="#2ECCFA">

				<th>Linea N.</th>

				<th>Descripcion</th>

				<th>Cantidad</th>				

				<th>Nota</th>

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



				$sql="select *	from orden_detalle  where id_orden=".$id;

				$resul=mysqli_query($conexion,$sql);

				while(@$ver=mysqli_fetch_row($resul)){

						

						$datos=$ver[0]."||".

							   $ver[1]."||".

							   $ver[2]."||".

							   $ver[3]."||".

							   $ver[4]."||".

							   $upd=1;	


			?>

		

			<tr>

				<td><?php echo $cont++ ?></td>				

				<td><?php echo $ver[2] ?></td>

				<td><?php echo $ver[3] ?></td>

				<td><?php echo $ver[4] ?></td>


				<td>

					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformOrdenDetalle('<?php echo $datos ?>')" ></button>

				

					<button class="btn btn-danger glyphicon glyphicon-remove btn-xs" id="eliminar"							onclick="eliminarProductoOrden(<?php echo $ideliminar = $ver[0] ?>)">				

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
				<?php if($cont++ > 1){ ?>
				<td colspan="8" align="right">				

								<table>

									<tr>

										<td>

											

										</td> 

										<td>

											<button id="cancelar" class="btn btn-xs" onclick="eliminarOrden()">

				Cancelar

				

				</button>

										</td>

										<td>



											<button class="btn btn-success btn-xs" id="ordenar" onclick="agregarOrden();">

				Generar Orden

				

 				</button>


										</td>

									</tr>

								</table>

				</td>
				<?php } ?>
			</tr>

		</tbody>

		</table>