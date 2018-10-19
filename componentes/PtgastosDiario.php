<?php

	require_once "../php/conexion.php";

	$conexion=conexion()

?>



<script>

	$(document).ready(function () {

   $('#entradafilter').keyup(function () {

      var rex = new RegExp($(this).val(), 'i');

        $('.contenidobusqueda tr').hide();

        $('.contenidobusqueda tr').filter(function () {

            return rex.test($(this).text());

        }).show();



        })

   FocusMfiltros(); 



});	 

</script>



<div class="panel panel-default">    

  <div class="panel-heading">

      <div class="panel-tabla">

      <h4>Lista de Gastos</h4>       

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">

				Agregar Gasto

				<span class="glyphicon glyphicon-plus"></span>

			</button> 

          </div>

    </div>

  



		<table class="table table-hover table-condensed table-bordered" class="table table-striped">                     

			

				<div class="input-group"> 

                    <span class="input-group-addon">Buscar</span>

   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar">

   					 

				</div>			

		

			<tr class="warning">

				<th>Detalle</th>
				<th>Cantidad</th>
				<th>Parcela</th>
				<th>Fecha</th>				
				<th>Factura #</th>
				<th>Orden #</th>
				<th>Editar</th>

				<!-- <th>Eliminar</th> -->

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select g.id, g.detalle, g.cantidad, g.fecha, g.hora, p.nombre, g.estado, p.id, g.id_factura, g.id_orden, g.fecha_gasto  from gastos as g, parcela as p where g.id_parcela=p.id";

				$resul=mysqli_query($conexion,$sql);

				while($ver=mysqli_fetch_row($resul)){


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
							   $ver[10];								  			

			?>		

			<tr>	

				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[10] ?></td>				
				<td><?php echo $ver[8] ?></td>
				<td><?php echo $ver[9] ?></td>
				

			<td align="left">
 
					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformGastos('<?php echo $datos ?>')"></button>

                   

                    

				</td>



<!-- 				<td align="center">

					<button class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"							onclick="eliminarProveedor(<?php // echo $idp = $ver[0] ?>)">				

					</button>

				</td> -->

			</tr>

			

			<?php

				} 

			?>

		</tbody>

		</table>

    </div>

