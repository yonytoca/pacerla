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

      <h4 align="left"> <strong> Listado de Productos</strong></h4>            

          </div>

    </div>    





	

		<table class="table table-hover table-condensed table-bordered" class="table table-striped">

		

			<tr class="warning">

				<th>Codigo</th>

				<th>Descripcion</th>

				<!-- <th>Venta</th> -->

				<!-- <th>Existencia</th> -->

				

				<th>Agregar</th>

				

			</tr >

	

		<tbody class="contenidobusqueda" align="left">

			<?php

				$sql="select p.id, p.codigo_barra, p.descripcion, p.costo, p.venta, sum(b.cantidad_entrada)-sum(b.cantidad) as exite, ubicacion, p.id_itebis,i.monto 

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

			?>

		

			<tr>

				<td><?php echo $ver[0] ?></td>

				<td><?php echo $ver[2] ?></td>

<!-- 				<td><?php //echo $ver[4] ?></td>

			

				<td><?php //echo $ver[6] ?></td> -->

				

				

				<td >

					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformProductoDetalle('<?php echo $datos ?>')" ></button>

				</td>

			</tr>

			

			<?php

				} 

			?>

		</tbody>

		</table>

</div>