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

      <h4>Lista de Socios</h4>       

<!--             <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">

				Agregar Socio

				<span class="glyphicon glyphicon-plus"></span>

			</button>  -->

          </div>

    </div>



  



		<table class="table table-hover table-condensed table-bordered" class="table table-striped">                     

			

				<div class="input-group"> 

                    <span class="input-group-addon">Buscar</span>

   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar">

   					 

				</div>

			

		

			<tr class="warning">

				<th>Nombre</th>				

				<th>Apellido</th>

				<th>Cedúla</th>

				<th>Telefono</th>
				<th>Dirección</th>				

				<th>Parcelas</th>

				<!-- <th>Eliminar</th> -->

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select * 
						from socio 
						";

				$resul=mysqli_query($conexion,$sql);

				while($ver=mysqli_fetch_row($resul)){


						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $ver[5];				

			?>
		

			<tr>				

				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[5] ?></td>			
				<td><?php echo $ver[4] ?></td>

				<td align="left">
							    <?php 
									$sql1="select * from parcela where id_socio=$ver[0]";
									$resul1=mysqli_query($conexion,$sql1);
									while($ver1=mysqli_fetch_row($resul1)){
								?>
										<table>
											<tr>
												<td>
													<?php echo $ver1[1]; ?>
												</td>
											</tr>
										</table>
                   
								<?php } ?>                   

				</td>

<!-- 				<td align="center">

					<button class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"							onclick="eliminarProveedor(<?php// echo $idp = $ver[0] ?>)">				

					</button>

				</td> -->

			</tr>

			

			<?php

				} 

			?>

		</tbody>

		</table>

    </div>

