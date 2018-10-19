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

      <h4>Listado de clientes</h4>       

            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">

				Agregar nuevo Cliente

				<span class="glyphicon glyphicon-plus"></span>

			</button> 

          </div>

    </div>        

       

		<table class="table  table-condensed table-bordered table table-hover" >



				<div class="input-group">

                    <span class="input-group-addon glyphicon glyphicon-search "  > Buscar</span>

   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar cliente por nombre">

                   

   					 

				</div>

			

		

			<tr class="warning">

				<th>Nombre</th>

				<th>Apellido</th>

				<th>Teléfono</th>

				<th>Dirección</th>

				<th>RNC o Cedúla</th>

				<th>Editar</th>

			<!-- 	<th>Eliminar</th> -->

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select * from cliente where id !=1";

				$resul=mysqli_query($conexion,$sql);

				while($ver=mysqli_fetch_row($resul)){

						

						$datos=$ver[0]."||".

							   $ver[1]."||".

							   $ver[2]."||".

							   $ver[3]."||".

							   $ver[4]."||".

							   $ver[5]."||".

							   $ver[6]."||".

							   $ver[9]."||".

							   $ver[10]."||".

							   $ver[11];				

			?>

		

			<tr>

				<td><?php echo $ver[1] ?></td>

				<td><?php echo $ver[2] ?></td>

				<td><?php echo $ver[4] ?></td>

				<td><?php echo $ver[3] ?></td>

				<td><?php echo $ver[9] ?></td>

				<td align="center">

					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')"></button>

				</td>

<!-- 				<td align="center">

					<button class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"	onclick="eliminarCliente(<?php echo $idp = $ver[0] ?>)"></button>

				</td> -->

			</tr>

			

			<?php 

				} 

			?>

		</tbody>

		</table>

      

</div>