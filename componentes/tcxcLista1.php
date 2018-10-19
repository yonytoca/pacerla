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
      <h4>Listado de Clientes con deuda pendiente </h4>       
          </div>
    </div>    


		<table class="table table-hover table-condensed table-bordered " class="table table-striped">

				<div class="input-group">
                    <span class="input-group-addon">Cliente</span>
   					 <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Buscar cliente por nombre">    					 
				</div>

			<tr bgcolor="#2ECCFA">
			
				<th>ID Cliente</th>
				<th>Nombre</th>								
				<th>Balence</th>
				<th>Ver detalle</th>		
			</tr>
	
		<tbody class="contenidobusqueda">
			<?php
				// SELECT c.id, c.nombre, c.apellido, f.id, f.id_tipo_pago, if(count(*) < 1, count(*), f.total), id.id_factura, if(f.id=id.id_factura,i.monto_pagado,0) FROM factura as f

				//  left join cliente as c on f.id_cliente = c.id 
				//  inner join ingreso_detalle as id 
				//  inner join ingreso as i
				//  where f.id_tipo_pago = 2
				//  group by f.id_cliente

				$cont = 1;

				$sql="SELECT c.id, c.nombre, f.id, SUM( f.total ), c.apellido, f.fecha, f.hora,  fc.descripcion, SUM( f.monto_pagado )
						FROM factura AS f, cliente AS c, factura_condicion_pago AS fc
						WHERE fc.id = f.id_tipo_pago 
							and f.id_tipo_pago=2 
							and f.id_cliente = c.id		 
						GROUP BY f.id_cliente
						LIMIT 0 , 30";
				
				$resul=mysqli_query($conexion,$sql);
				while(@$ver=mysqli_fetch_row($resul)){
						
						
						$datos=$ver[0]."||".
							   $ver[1]."||".
							   $ver[2]."||".
							   $ver[3]."||".
							   $ver[4]."||".
							   $ver[5]."||".
							   $ver[6]."||".
							   $ver[7]."||".							  
							   $ver[8];
						if($ver[3]-$ver[8] > 0){	   
							   
			?>
		
			<tr>
				
				<td><a href="./lcxccliente1.php?Rver=<?php echo $ver[0] ?>">
				<?php echo $ver[0] ?></a></td>
				<td><a href="./lcxccliente1.php?Rver=<?php echo $ver[0] ?>">
					<?php echo $ver[1]." ".$ver[4] ?></a></td>
				
				<td><?php echo $ver[3]-$ver[8] ?></td>
				<td><a href="./lcxccliente1.php?Rver=<?php echo $ver[0] ?>">
				Ver detalles</a></td>

			</tr>
			
			<?php
				}} 			
			?>
		</tbody>
		</table>
