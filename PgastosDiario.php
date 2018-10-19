<!DOCTYPE html>

<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Tabla dinamica </title>

       <?php 

        require_once "php/conexion.php";

        $conexion=conexion()

    ?>

     <?php 



        require_once "configuracion.php";        

   ?>

    <?php @$fecha = date("d/m/Y");
          @$hora = date("g:i a"); ?>  







    <link rel="stylesheet" href="css/estilos.css">

</head>



<body>  


         

<div class="container">

     <?php 

        require_once "header.php";        

   ?>  

  <div hidden="" id="contenedor_reloj"></div>

		<div class="container" id="tabla"></div>


    <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de proveedor  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar Nuevo Gasto</h4>

                </div>

               <!-- Contenido de la proveedor  -->       

               

               

      <div class="modal-body">

           <input type="text" hidden="" value="<?php echo $fecha?>" id="fecha" >           

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Detalle</span>

                      

        <input type="text" name="" id="detalle" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cantidad</span>

                      <input type="text" name="" id="cantidad" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)">                         

                    </div>

                </div>  

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Número de Factura</span>

                      <input type="text" name="" id="idfactura" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)">                         

                    </div>

                </div> 

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Número de Orden</span>

                      <input type="text" name="" id="idorden" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)">                         

                    </div>

                </div>                           

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Fecha</span>

                      <input type="date" name="" id="fecha1" class="form-control" maxlength="10" >                         

                    </div>

                </div>   
<!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Fecha</span>

                        <input type="text" name="" id="scedula" class="form-control" maxlength="10" >                         

                    </div>

                </div>  



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Hora</span>

                      <input type="text" name="" id="sdireccion" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>   -->



                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Selecione Parcela</span>

                    

                      <select id="idparcela" class="form-control" >                                

                            <?php

                               $sql2="select * from parcela";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 

                             <?php } ?>

                               

                       </select> 

                    </div>

                </div>             

          <!-- Footer de la ventana  -->

            <div class="modal-footer" id="oculto">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="guardarnuevo">Gurdar Cambios</button>

            </div>    

          </div>

     </div>

   </div>

  </div>

</div>



 <div class="container">    

       <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de proveedor  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Actualizar Gasto</h4>

                </div>

               <!-- Contenido de la proveedor  -->       

               

               

      <div class="modal-body">

           <input type="text" hidden=""  id="idgasto" >

           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

      

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Detalle</span>

                      

        <input type="text" name="" id="detalleu" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cantidad</span>

                      <input type="text" name="" id="cantidadu" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)">                                              

                    </div>

                </div>  

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Número de Factura </span>

                      <input type="text" name="" id="idfacturau" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)">                                              

                    </div>

                </div>  

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Número de Orden</span>

                      <input type="text" name="" id="idordenu" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)">                                              

                    </div>

                </div>            
           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Fecha</span>

                      <input type="date" name="" id="fecha1u" class="form-control" maxlength="10" >                         

                    </div>

                </div>  
<!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cedula</span>

                        <input type="text" name="" id="scedulau" class="form-control" maxlength="10" >                         

                    </div>

                </div>  



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Direccion</span>

                      <input type="text" name="" id="sdireccionu" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>  --> 



                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Selecione Parcela</span>

                    

                      <select id="idparcelau" class="form-control" >

                      <option value=""> </option>                                

                            <?php

                               $sql2="select * from parcela";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 

                             <?php } ?>

                               

                       </select> 

                    </div>

                </div>             

          <!-- Footer de la ventana  -->

            <div class="modal-footer" id="oculto">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="actualizadatos">Gurdar Cambios</button>

            </div>    

          </div>

     </div>

   </div>

  </div>

</div>

<!-- modal para editar los registros  -->

           <?php 
              require_once "footer.php";       

           ?>    

     </div>    

 </body>

</html>



<script type="text/javascript">

	$(document).ready(function(){

		$('#tabla').load('componentes/PtgastosDiario.php');    

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){



  

    $('#guardarnuevo').click(function(){



        detalle =$('#detalle').val();
        cantidad =$('#cantidad').val();
        fecha =$('#fecha').val();  // fecha de registro del gasto 
        fecha1 =$('#fecha1').val(); // fecha en que se realiso el gasto  
        factura =$('#idfactura').val(); 
        orden =$('#idorden').val();       
       hora = document.getElementById("contenedor_reloj").innerHTML;
      //  hora =$('#hora').val();             

        idparcela =$('#idparcela').val();
      // alert(rncNull);

        if (detalle && cantidad){                    

            agregarGastos(detalle, cantidad, fecha, idparcela, hora, factura, orden, fecha1)

        }else{alertify.error("Proporsiones un detalle y cantidad");}

        

    });



             $('#actualizadatos').click(function(){

          actualizaGastos();



        }); 

// limpiar formulariode cliente

         $('#loginbtn').click(function(){

            user =$('#username').val();

            pass =$('#password').val();            



          login(user,pass);



        });  

  });





</script>





<script>

$(document).ready(function(){

    $("#login").click(function(){

        $("#modalLogin").modal();

    });

});

</script>

