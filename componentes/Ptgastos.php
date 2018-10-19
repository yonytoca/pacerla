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

      <h4>Lista de Gastos Por Parcela </h4>       

			

          </div>

    </div>

  



		<table class="table table-hover table-condensed table-bordered" class="table table-striped">                     

			

				<div class="input-group"> 

                    <span class="input-group-addon">Buscar</span>

   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar">

   					 

				</div>			

		

			<tr class="warning">

				<th>Parcela </th>				

				<th>Monto gastado a la fecha </th>				

				<th>Detalles</th>



				<!-- <th>Eliminar</th> -->

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select g.id, g.detalle, sum(g.cantidad), g.fecha, g.hora, p.nombre, g.estado, p.id  from gastos as g, parcela as p where g.id_parcela=p.id

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
							   $ver[7];				

			?>

		

			<tr>				

				<td><a href="./Pgastos1.php?Rver=<?php echo $ver[7] ?>">

				<?php echo $ver[5] ?></a></td>

				<td><?php echo $ver[2] ?></td>

				<td><a href="./Pgastos1.php?Rver=<?php echo $ver[7] ?>">

				Ver detalles </a> </td>







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

