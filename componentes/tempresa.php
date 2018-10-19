<?php

	require_once "../php/conexion.php";

	$conexion=conexion()

?>

<link rel="stylesheet" href="css/estilos.css">

      



    <div class="panel panel-default">

            <?php 

				$sq="SELECT * FROM empresa";

				$res=mysqli_query($conexion,$sq);

				$verempresa=mysqli_num_rows($res);

			if($verempresa==0){ ?>      	

			

 <!--Cabecera de la tabla-->  

       <div class="panel-heading">

           <div class="panel-tabla">

                <h4>Registrar Empresa</h4>

               

                 <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">

				Agregar Empresa

				<span class="glyphicon glyphicon-plus"></span>

			    </button>

             

         </div>

    </div> 

 <!--Cabecera de la tabla-->

        

       <?php } ?>	    

        

    

    <table class="table table-hover table-condensed table-bordered" class="table table-striped"> 

        	

			



                

			

		

			<tr>

				<th>Nombre</th>

				<th>RNC</th>

				<th>Dirección</th>

				<th>Teléfono</th>				

				<th>Editar</th>				

			</tr>

	

		<tbody class="contenidobusqueda">

			<?php

				$sql="select * from empresa";

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

				<td><?php echo $ver[3] ?></td>

				<td><?php echo $ver[4] ?></td>			

				<td align="center">

                    

					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformEmpresa('<?php echo $datos ?>')" ></button>				

			</tr>

			

			<?php

				} 

			?>

		</tbody>

		</table>

    

    

</div>







<div class="row">

	<div class="col-sm-12">

       

		

       