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
      <h4>Listado de Usuario</h4>       
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
				Agregar nuevo Usuario
				<span class="glyphicon glyphicon-plus"></span>
			</button> 
          </div>
    </div>        
          
		<table class="table table-hover table-condensed table-bordered" class="table table-striped">			

				<div class="input-group">
                    <span class="input-group-addon">Buscar</span>
   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar usuario">
   					 
				</div>			
		
			<tr class="warning">
				<th>Nombre</th>
				<th>Correo</th>
				<th>Nota</th>
				<th>Editar</th>
				<th>Eliminar</th>
			</tr>
	
		<tbody class="contenidobusqueda">
			<?php
				$sql="select * from usuario where id !=1";
				$resul=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".							
							   $ver[4];				
			?>
		
			<tr>				
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>

				<td>
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformUsuario('<?php echo $datos ?>')"></button>
				</td>
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"							onclick="eliminardatosUsuario(<?php echo $idp = $ver[0] ?>)">				
					</button>
				</td>
			</tr>
			
			<?php
				} 
			?>
		</tbody>
		</table>
    </div>