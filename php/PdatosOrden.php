
</body> 

  <?php       

  		@$fecha = date("d/m/Y");
  		@$hora = date("g:i a");

        $sql="select max(id) from orden ";
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

                        <span class="input-group-addon form-control " ><strong>Orden #:</strong> <input type="text" id="idorden" value="<?php formato($id1) ?>" name="" maxlength="30" onkeyup="return soloNumeros(event)">	<br><br>  <strong>Fecha:</strong> <?php echo $fecha ?> <strong id="contenedor_reloj">Hora:</strong> </span>                   

                    </div>

                </div>

          </div>

      </div>













			