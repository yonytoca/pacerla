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
      <h4>Listado de Productos Entrada</h4>            
          </div>
    </div>    


	
		<table class="table table-hover table-condensed table-bordered" class="table table-striped">
		
			<tr class="warning">
				<th>Codigo</th>
				<th>Descripcion</th>
				<th>Costo</th>
				<th>Venta</th>
				<th>Cantidad</th>
				<th>Ubicacion</th>
				<th>Agregar</th>
				
			</tr>
	
		<tbody class="contenidobusqueda">
			<?php
				$sql="select * from producto as p, itbis as i where p.id_itebis = i.id group by p.id";
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
							   $ver[10]."||".
							   $ver[11]."||".							  
							   $ver[12];

			?>
		
			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>
				<td align="center">
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformProductoDetalleEntrada('<?php echo $datos ?>')" ></button>
				</td>
			</tr>
			
			<?php
				} 
			?>
		</tbody>
		</table>
</div>