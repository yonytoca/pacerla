<body onload="HoraActual()"> 
</body> 

  <?php       
  		@$fecha = date("d/m/Y");
  		@$hora = date("g:i a");

        $sql="select max(id) from ingreso ";
        $resul=mysqli_query($conexion,$sql);
        while($ver1=mysqli_fetch_row($resul)){
            
            $id1= 1+ $ver1[0];  } 

            function formato($id1) {  
                printf("%011d",  $id1); 
                } 
  ?>
  		<input type="text" hidden="" id="fecha" value="<?php echo $fecha ?>" name="">
  		<input type="text" hidden="" id="hora1" value="<?php echo $hora ?>" name="">
    <div class="row" >
         <div class="col-sm-12">
        <div class="form-group" id="r-factura" >
                    <div class="input-group">
                        <span class="input-group-addon" ><strong>Recibo #:</strong> <input type="text" id="idrecibo" value="<?php formato($id1) ?>" name="" maxlength="30" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">	 <br><br> <strong>Fecha:</strong> <?php echo $fecha ?> <strong id="contenedor_reloj">Hora:</strong> </span>                      
                    </div>
                </div>
           <div class="form-group" id="r-factura" >

                </div>  
          </div>
      </div>






			