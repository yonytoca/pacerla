<?php
	require_once "../php/conexion.php";
	$conexion=conexion()
?>

<div class="row">
	<div class="col-sm-12" >
		<table class="table table-hover table-condensed table-bordered " class="table table-striped">

			<tr bgcolor="#2ECCFA">
				<th>Linea N.</th>
				<th>Cliente</th>
				<th>Factura</th>				
				<th>Fecha</th>
				<th>Total</th>	
				<th>Monto pagado</th>
				<th>Balance</th>		
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

				$sql="SELECT c.id, c.nombre, f.id, f.total, c.apellido, f.fecha, f.monto_pagado
							FROM factura AS f, cliente AS c, factura_condicion_pago AS fc
							WHERE fc.id = f.id_tipo_pago
							AND f.id_tipo_pago =2
							AND f.id_cliente = c.id
							and f.total - f.monto_pagado > 0
							AND f.id_cliente=$id
							LIMIT 0 , 30";

				$resul=mysqli_query($conexion,$sql);
				while(@$ver=mysqli_fetch_row($resul)){
						
						$balance = $ver[3] - $ver[6];
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $ver[5]."||".
							   $ver[6]."||". 
							   $ver[7]=$balance."||".							    
							   $upd=1;	

						 $balance = $ver[3] - $ver[6];
						// $subtotal=$subtotal + $ver[6];
						// $desc = $desc + $ver[8];
						// $desc_can = $desc_can + $ver[11];
						// $total = ($subtotal-($desc + $desc_can))+$itb;


			?>
		
			<tr>
				<td><?php echo $cont++ ?></td>
				<td><?php echo $ver[1]." ".$ver[4] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[5] ?></td>
				<th><?php echo $ver[3] ?></th>
				<th class="text-primary"><?php echo $ver[6] ?></th>
				<th class="text-danger"><?php echo number_format($ver[3]-$ver[6],2) ?></th>
				

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="CXCagregaformReciboDetalle('<?php echo $datos ?>')" ></button>
				
				</td>
			</tr>
			
			<?php
				} 			
					// $datos1=$itb."||".
					// 	   $desc."||".
					// 	   $total;
			?>

		</tbody>
		</table>