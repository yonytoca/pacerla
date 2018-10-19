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
              <h4>Listado de comprobante</h4>       
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
                        Comprovante Fiscal
                        <span class="glyphicon glyphicon-plus"></span>
                    </button> 
                  </div>
            </div>   

	<div class="table-resposive">
		<table class="table table-hover table-condensed table-bordered" class="table table-striped">
		
			

				<div class="input-group"> 
                    <span class="input-group-addon">Buscar</span>
   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar Comprobante">
   					 
				</div>
			
		
			<tr class="warning">
				<th>Tipo comprobante</th>
				<th>Secuencia inicio</th>
				<th>Secuencia Final</th>
				<th>Usuario</th>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Editar</th>
			</tr>
	
		<tbody class="contenidobusqueda">
			<?php
				$sql="select n.id, 
								n.numero_inicial, 
								n.numero_final, 
								u.nombre,
								nc.nombre,
								n.fecha,
								n.hora  
						from ncfmantenimiento as n, usuario as u, ncf as nc
						where n.id_comprobante = nc.id and n.id_usuario = u.id";
				$resul=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $ver[5]."||".
							   $ver[6];				
			?>
		
			<tr>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>				

				<td align="center">
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformComprobanteM('<?php echo $datos ?>')" ></button>
				</td>
			</tr>			
			<?php
				} 
			?>
		</tbody>
		</table>
    </div>
</div>