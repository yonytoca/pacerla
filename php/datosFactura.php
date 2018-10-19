<body onload="HoraActual()"> 

</body> 



  <?php       

  		@$fecha = date("d/m/Y");

  		@$hora = date("g:i a");



        $sql="select max(id) from factura ";

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

                        <span class="input-group-addon" ><strong>Factura #:</strong> <input type="text" id="idfactura" value="<?php formato($id1) ?>" name="" maxlength="30" onkeyup="return soloNumeros(event)">	<br>  <strong>Fecha:</strong> <?php echo $fecha ?> <strong id="contenedor_reloj">Hora:</strong> </span>                      

                    </div>

                </div>

           <div class="form-group" id="r-factura" >

                    <div class="input-group col-xs-12">

                            <span class="input-group-addon " >

                                <strong>Tipo de pago:</strong>

                                <select id="tipo_pago" >

    								<!-- <option value="" > Tipo Pago </option>   -->                    

    		                        <?php 		                        

    		                            $sql1="select * from factura_condicion_pago";

    		                            $resul1=mysqli_query($conexion,$sql1);

    		                            while($ver1=mysqli_fetch_row($resul1)){ 

    		                         ?>     

    		                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]; ?></option> 

    		                         <?php } ?>

    		                    </select>

                      <div class="form-group" id="r-factura" >

                        <div class="input-group col-xs-12">

<!--                           <span class="input-group-addon" ><strong>Comprobante:</strong> -->

  <!--                           <select id="tipo_comprobante">

                                 <option value="" > Tipo Comprobante </option>                      

                                <?php                             

                                  //  $sql2="select * from ncf";

                                   // $resul2=mysqli_query($conexion,$sql2);

                                  //  while($ver2=mysqli_fetch_row($resul2)){ 

                                 ?>     

                                 <option value="<?php// echo $ver2[0]; ?>"><?php// echo $ver2[1]; ?></option> 

                                 <?php// } ?>

                            </select> -->

                            <div><div id="resultadoControl"></div><div id="resultadoC"></div> </div>

                         <!--  </span> -->

                        </div>

                      </div>

                    </div>

                </div>  

          </div>

      </div>













			