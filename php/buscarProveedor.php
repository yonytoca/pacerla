	<?php
		require_once "conexion.php";
		$conexion=conexion();

	 	@$v1=$_POST['busP'];
        		
		if($v1){ 
				$sql="SELECT * FROM proveedor  WHERE id=$v1 limit 1";
				$resul=mysqli_query($conexion,$sql);
					
	?>
	<?php  while($ver=mysqli_fetch_row($resul)){ ?>	
    
    <input type="text" id="id_comprobanteP" hidden=""  value="<?php echo $ver[0] ?>" >     
    <div class="row">              
    
     <div class="form-group col-sm-4" id="r-factura" >
                    <div class="input-group">
                        <span class="input-group-addon"><strong>Nombre:</strong> <?php echo $ver[1] ?> <?php echo $ver[3] ?> </span>
                      
                    </div>
                </div>        
    
     <div class="form-group col-sm-2" id="r-factura" >
                    <div class="input-group">
                        <span class="input-group-addon" ><strong>Dirección:</strong> <?php echo $ver[2] ?> </span>
                      
                    </div>
                </div> 
        <div class="row">
            <div class="col-sm-12">
     <div class="form-group col-sm-12" id="r-factura" >
                    <div class="input-group">
                        <span class="input-group-addon" ><strong>Contacto:</strong> <?php echo $ver[7] ?> </span>
                      </div>
                    </div>
                </div>
         </div>
    </div>          
	
    
	<?php } }else{
				$sql="SELECT * FROM proveedor WHERE id=1 limit 1";
				$resul=mysqli_query($conexion,$sql);
					
	?>
	<?php  while($ver=mysqli_fetch_row($resul)){ ?>		
    	<input type="text" id="id_comprobanteP" hidden=""  value="<?php echo $ver[0] ?>" >       
       <div class="row"> 
        
     <div class="form-group col-sm-4" id="r-factura" >
                    <div class="input-group">
                        <span class="input-group-addon"><strong>Nombre:</strong> <?php echo $ver[1] ?> <?php echo $ver[3] ?> </span>
                      
                    </div>
                </div>        
    
     <div class="form-group col-sm-2" id="r-factura" >
                    <div class="input-group">
                        <span class="input-group-addon" ><strong>Dirección:</strong> <?php echo $ver[2] ?> </span>
                      
                    </div>
                </div> 
        <div class="row">
            <div class="col-sm-12">
     <div class="form-group col-sm-12" id="r-factura" >
                    <div class="input-group">
                        <span class="input-group-addon" ><strong>Contacto:</strong> <?php echo $ver[7] ?> </span>
                      </div>
                    </div>
                </div>
         </div>
         </div>
  
	<?php }}?>
