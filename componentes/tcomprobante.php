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
				<th>Nombre</th>
				<th>Comprobante</th>
				<th>Editar</th>
			<!-- 	<th>Eliminar</th> -->
			</tr>
	
		<tbody class="contenidobusqueda">
			<?php
				$sql="select * from ncf";
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
							   $ver[8];				
			?>
		
			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2].$ver[3] ?></td>

				<td align="center">
					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaformComprobante('<?php echo $datos ?>')" ></button>
				</td>
<!-- 				<td align="center">
					<button class="btn btn-danger glyphicon glyphicon-remove" id="eliminar"							onclick="eliminardatos(<?php //echo $idp = $ver[0] ?>)">				
					</button>
				</td> -->
			</tr>
			
			<?php
				} 
			?>
		</tbody>
		</table>
    </div>
</div>