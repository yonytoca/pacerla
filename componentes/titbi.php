<?php
	require_once "../php/conexion.php";
	$conexion=conexion()
?>
	
</script>

        
        
  <div class="panel panel-default">    
     <div class="panel-heading">
       <div class="panel-tabla">
          <h4>Listado de ITBIS</h4>       
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar ITBIS
				<span class="glyphicon glyphicon-plus"></span>
			</button> 
          </div>
    </div>  
        
	
		<table class="table table-hover table-condensed table-bordered" class="table table-striped">
			
		
			<tr class="warning">
				<th>Descripcion</th>
				<th>monto</th>
                <th>Editar</th>
<!-- 				<th>Eliminar</th> -->
			</tr>
	
		<tbody class="contenidobusqueda">
			<?php
				$sql="select * from itbis";
				$resul=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2];			
			?>
		
			<tr>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[1] ?></td>

				<td align="center">
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformItbi('<?php echo $datos ?>')" ></button>
				</td>
<!-- 				<td align="center">
					<button class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"							onclick="eliminardatos(<?php// echo $idp = $ver[0] ?>)">				
					</button>
				</td> -->
			</tr>
			
			<?php
				} 
			?>
		</tbody>
		</table>
</div>