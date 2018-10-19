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

      <h4>Listado de Cultivos</h4>       

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">

				Agregar Nuevo

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

				<th>Codigo</th>

<!-- 				<th>Codigo barra</th> -->

				<th>Descripción</th>

<!-- 				<th>Costo</th>

				<th>Venta</th>

				<th>Existencia</th>

				<th>Ubicacion</th> -->

				<th>Editar</th>

				<th>Eliminar</th>

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select p.id, p.codigo_barra, p.descripcion, p.costo, p.venta, sum(b.cantidad_entrada)-sum(b.cantidad) as exite, p.activo, ubicacion, p.id_itebis 

						from producto as p

						left join factura_detalle as b on b.id_producto = p.id

						left join itbis as i on p.id_itebis = i.id

						group by p.id";

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

							   $ver[8];		

							   if ($ver[6]==0){		

			?>

				

			<tr>

				<td><?php echo $ver[0] ?></td>

				<!-- <td><?php //echo $ver[1] ?></td> -->

				<td><?php echo $ver[2] ?></td>

<!-- 				<td><?php // echo $ver[3] ?></td> -->

<!-- 				<td><?php// echo $ver[4] ?></td>

				<td><?php// echo $ver[5] ?></td>

				<td><?php //echo $ver[7] ?></td>

				<td><?php// echo $ver[6] ?></td> -->



				<td >

					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformProducto('<?php echo $datos ?>')" ></button>

				</td>

				<td >

					<button class="btn btn-danger glyphicon glyphicon-remove btn-xs" id="eliminar"							onclick="eliminarProducto(<?php echo $idp = $ver[0] ?>)">				

					</button>

				</td>

			</tr>

			

			<?php

				}} 

			?>

		</tbody>

		</table>

</div>