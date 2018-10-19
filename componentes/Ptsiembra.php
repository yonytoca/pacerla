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

      <h4>Lista Siembra</h4>       

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">

				Agregar 

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
				<th>Cultivo</th>				

				<th>Cantidad</th>

				<th>Parcela</th>

				<th>Fecha</th>
				<th>Nota</th>

				<th>Editar</th>

				<!-- <th>Eliminar</th> -->

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select s.id, p1.descripcion, s.cantidad, p.nombre, s.fecha_siembra, s.id_producto, s.id_parcela, s.nota  from siembra as s, parcela as p,  producto as p1 where s.id_producto=p1.id and s.id_parcela=p.id";

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
				<td><?php echo $ver[0] ?></td>

				<td><?php echo $ver[1] ?></td>

				<td><?php echo $ver[2] ?></td>

				<td><?php echo $ver[3] ?></td>

				<td><?php echo $ver[4] ?></td>

				<td><?php echo $ver[7] ?></td>

		



				<td align="left">

					<button class="btn btn-warning glyphicon glyphicon-pencil btn-xs" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformSiembra('<?php echo $datos ?>')"></button>

                   

                    

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

