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
      <h4>Listado de Facturas </h4>       
          </div>
    </div>    


		<table class="table table-hover table-condensed table-bordered " class="table table-striped">

				<div class="input-group">
                    <span class="input-group-addon">Buscar</span>
   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar cliente por nombre">    					 
				</div>

			<tr bgcolor="#2ECCFA">
				<th>Linea N.</th>
				<th>Factura</th>
				<th>Fecha</th>				
				<th>Hora</th>				
				<th>Total</th>
				<th>Pago</th>
				<th>Cliente</th>
				<th>Usuario</th>				
				<th>Edi./Elim.</th>				
			</tr>
	
		<tbody class="contenidobusqueda">
			<?php

				$cont = 1;

				$sql="select f.id, 
							f.fecha, 
							f.hora, 
							f.total,							 							
							fc.descripcion,							
							c.nombre,
							u.nombre						
							 	from factura as f, cliente as c, usuario as u, factura_condicion_pago as fc 
							 	where f.id_cliente = c.id and f.id_usuario = u.id and f.id_tipo_pago=fc.id 
							 	group by f.id order by f.id desc limit 0,25";

				$resul=mysqli_query($conexion,$sql);
				while(@$ver=mysqli_fetch_row($resul)){
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $ver[5]."||".							  
							   $ver[6];
			?>
		
			<tr>
				<td><?php echo $cont++ ?></td>
				<td><a href="./Refactura.php?Rver=<?php echo $ver[0] ?>">
					<?php echo $ver[0] ?></a></td>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td><?php echo $ver[5] ?></td>
				<td><?php echo $ver[6] ?></td>

			</tr>
			
			<?php
				} 			
			?>
		</tbody>
		</table>
</div>