<?php

	require_once "../php/conexion.php";

	$conexion=conexion()

?>

	

</script>

  <div class="panel panel-default">    

     <div class="panel-heading">

       <div class="panel-tabla">

          <h4>Listado de Tipo de Pago</h4>       

			<caption align="center">

							<?php 

				$sq="SELECT * FROM factura_condicion_pago ";

				$res=mysqli_query($conexion,$sq);

				$tipopago=mysqli_num_rows($res);



			if($tipopago < 3 ){ ?>

			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">

				Agregar Tipo de Pago

				<span class="glyphicon glyphicon-plus"></span>

				</button>	

			<?php } ?>	



			</caption> 

          </div>

    </div> 

		<table class="table table-hover table-condensed table-bordered" class="table table-striped">

		

			<tr class="warning">

				<td>Descripción</td>

				<td>Nota</td>

				<td>Editar</td>

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select * from factura_condicion_pago";

				$resul=mysqli_query($conexion,$sql);

				while($ver=mysqli_fetch_row($resul)){

						

						$datos=$ver[0]."||".

							   $ver[1]."||".

							   $ver[2];			

			?>

		

			<tr>

				<td><?php echo $ver[1] ?></td>

				<td><?php echo $ver[2] ?></td>



				<td align="center">

					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformTipopago('<?php echo $datos ?>')" ></button>

				</td>

<!-- 				<td align="center">

					<button class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"							onclick="eliminardatos(<?php echo $idp = $ver[0] ?>)">				

					</button>

				</td> -->

			</tr>

			

			<?php

				} 

			?>

		</tbody>

		</table>

	</div>