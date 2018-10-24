<!DOCTYPE html>

<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

<title> Sistema De Control De Parcelas </title>

  <?php 
      require_once "php/conexion.php";
  $conexion=conexion()
?>

     <?php 
        require_once "configuracion.php";            
   ?>

  <link rel="stylesheet" href="css/estilos.css">
  

</head>

<body> 
            

<div class="container" id="menu">
     <?php 
        require_once "header.php";         
   ?>  

   <div id="conReloj"></div>



		<div class="container" id="tabla"></div>




    <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de cliente  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar Nuevo Cliente</h4>

                </div>

               <!-- Contenido de la cliente  --> 

                

                <div class="modal-body">             

                                                                  

                       <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                        <input style="text-transform:uppercase" type="text" name="" id="nombre" class="form-control" maxlength="30" inpu-sm required> 

                       

                    </div>

                </div>  

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Apellido</span>                       

                        <input type="text" name="" id="apellido" class="form-control" maxlength="30" inpu-sm>       

                    </div>

                </div> 

                    

                    

                 <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Teléfono</span>   

                        <input type="text" name="" id="telefono" class="form-control" maxlength="15"  inpu-sm onkeypress="return soloNumeros(event)">                       

                     </div>

                </div>    

                      

                    

                  <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon"> Celular</span>  

                        <input type="text" name="" id="tel_movil" class="form-control" maxlength="15" inpu-sm onkeypress="return soloNumeros(event)">                        

                      </div>

                    </div>   

                        

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Dirección</span>

                        <input type="text" name="" id="direccion" class="form-control" maxlength="100" inpu-sm data-validation="required">

                        

                    </div>

                </div>

                        

                    

                 <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">E-mail @</span>   

                        <input type="email" name="" id="email" class="form-control" maxlength="30" inpu-sm data-validation="email">

                     </div>

                </div>

                    

                         <div id="xmail" class="hide"><h6 class="text-danger">Ingresa un email valido</h6></div>                    

                      <!--   <label>RNC * </label> -->

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">RNC O Cedula</span>

                    

                        <input type="text" name="" id="rnc" class="form-control" maxlength="12" inpu-sm onkeypress="return soloNumeros(event)">

                    </div>

                </div>



                <div hidden="" class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Tipo de comprobante</span>

                    

                      <select id="idcomprobante" class="form-control" >                                

                            <?php

                               $sql2="select * from ncf";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 

                             <?php } ?>

                               

                       </select> 

                    </div>

                </div>                

                        

                <div class="form-group">

                 <div class="input-group">

                        <span class="input-group-addon">Nota</span>                       

                        <input type="text" name="" id="nota" class="form-control" maxlength="30" inpu-sm>

                  </div>

                </div>

                </div> 

                

                <!-- Footer de la ventana  -->

                <div class="modal-footer">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="guardarnuevo">Gurdar Cambios</button>

                </div>

                

              </div>            

            </div>        

        </div>

    </div>

    

    <!-- contenedor para actualizar datos de cliente  -->    

    

   <div class="container"> 

    

    <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">

        <div class="modal-dialog">            

            <div class="modal-content">

                

               <!-- header de la cliente  -->

                <input type="text" hidden="" id="idpersona" name="">  

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Actualizar datos de clientes </h4>

                </div>

                

               <!-- Atctualizar contenido de la cliente  -->                

                

                

                 <div class="modal-body">             

                                                                  

                       <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                        <input style="text-transform:uppercase" type="text" name="" id="nombreu" class="form-control" maxlength="30" inpu-sm> 

                       

                    </div>

                </div>  

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Apellido</span>                       

                        <input type="text" name="" id="apellidou" class="form-control" maxlength="30" inpu-sm>       

                    </div>

                </div> 

                    

                    

                 <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Teléfono</span>   

                        <input type="text" name="" id="telefonou" class="form-control" maxlength="15"  inpu-sm onkeypress="return soloNumeros(event)">

                        

                     </div>

                </div>    

                      

                    

                  <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon"> Celular</span>  

                        <input type="text" name="" id="tel_movilu" class="form-control" maxlength="15" inpu-sm onkeypress="return soloNumeros(event)">                        

                      </div>

                    </div>   

                        

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Dirección</span>

                        <input type="text" name="" id="direccionu" class="form-control" maxlength="100" inpu-sm data-validation="required">

                        

                    </div>

                </div>

                        

                    

                 <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">E-mail @</span>   

                        <input type="email" name="" id="correou" class="form-control" maxlength="30" inpu-sm data-validation="email">

                     </div>

                </div>

                    

                         <div id="xmail" class="hide"><h6 class="text-danger">Ingresa un email valido</h6></div>                    

                      <!--   <label>RNC * </label> -->

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">RNC O Cedula</span>

                    

                        <input type="text" name="" id="rncu" class="form-control" maxlength="12" inpu-sm onkeypress="return soloNumeros(event)">

                    </div>

                </div>



               <div hidden="" class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Tipo de comprobante</span>

                    

                      <select id="idcomprobanteu" class="form-control" >                                

                            <?php

                               $sql2="select * from ncf";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 

                             <?php } ?>

                               

                       </select> 

                    </div>

                </div>                



                        

                <div class="form-group">

                 <div class="input-group">

                        <span class="input-group-addon">Nota</span>                       

                        <input type="text" name="" id="notau" class="form-control" maxlength="30" inpu-sm>

                  </div>

                </div>

                </div>                

                <!-- Footer de la cliente  -->                 

                     

                     

                <div class="modal-footer">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="actualizadatos">Gurdar Cambios</button>

                </div>

                

              </div>            

            </div>        

        </div>   

    </div>

    

    

  <?php 
        require_once "footer.php";      

   ?>  

      

    </div> 



</body>

</html>



<script type="text/javascript">

	$(document).ready(function(){

		$('#tabla').load('componentes/tabla.php');    

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){

 // Principal();

 //  ValidarformCliente();

 //  validarFormularios();

//  reloj();



  // funcion para limpiar modal cliente nuevo 

  limpiarMcliente();



  

    $('#guardarnuevo').click(function(){ 



        nombre =$('#nombre').val();

        apellido =$('#apellido').val();

        direccion =$('#direccion').val();        

        telefono =$('#telefono').val();

        tel_movil =$('#tel_movil').val();

        correo =$('#correo').val();

        rnc =$('#rnc').val();

        nota =$('#nota').val();

        rncNull =$('#rncReloj').val();

        idcomprobante =$('#idcomprobante').val();

      

        if (nombre && apellido){                    

            agregardatos(nombre,apellido,direccion,telefono,tel_movil,correo,rnc,nota,rncNull,idcomprobante)

        }else{alertify.error("Proporsiones un Nombre y Apellido");}

        

    });

// limpiar formulariode cliente 





        $('#actualizadatos').click(function(){

          actualizadatos();



        }); 



        

        // $('#eliminar').click(function(){



        //   id =$('#eliminar').val();



        //   eliminardatos(id);



        // });



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



<!--  <div class="col-sm-6">

            <form method="post">

                <div class="well">

                    <div class="form-group">

                        <label for="email">Campo tipo email</label>

                        <input type="email" id="email" name="email" required class="form-control">

                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">

                            Validar

                        </button>

                    </div>

                </div>

            </form>

        </div> -->