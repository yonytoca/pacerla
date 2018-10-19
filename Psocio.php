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
           <!-- header de registros de proveedor  -->
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Agregar Nuevo Socio</h4>
                </div>
               <!-- Contenido de la proveedor  -->     
      <div class="modal-body">
           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >     

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>                  

        <input type="text" name="" id="snombre" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Apellido</span>

                      <input type="text" name="" id="sapellido" class="form-control" maxlength="10">                         

                    </div>

                </div>  

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cedúla</span>

                        <input type="text" name="" id="scedula" class="form-control" maxlength="15" >                         

                    </div>

                </div>  



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Dirección</span>

                      <input type="text" name="" id="sdireccion" class="form-control" maxlength="100" inpu-sm>                         

                    </div>

                </div>  



                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Selecione Parcela</span>

                    

                      <select id="sidparcela" class="form-control" >

                             <option> Seleciones una parcela </option>                               

                            <?php

                               $sql2="select * from parcela";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1] ; ?></option> 

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

<!-- modal para editar los registros  -->



    <div class="container">    

       <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de proveedor  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar Nuevo Socio</h4>

                </div>

               <!-- Contenido de la proveedor  -->       

               

               

      <div class="modal-body">

           <input type="text" hidden=""  id="idsocio" >

           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

      

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                      

        <input type="text" name="" id="snombreu" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Apellido</span>

                      <input type="text" name="" id="sapellidou" class="form-control" maxlength="10">                         

                    </div>

                </div>  

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cedúla</span>

                        <input type="text" name="" id="scedulau" class="form-control" maxlength="10" >                         

                    </div>

                </div>  



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Dirección</span>

                      <input type="text" name="" id="sdireccionu" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>  



                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Selecione Parcela</span>

                    

                      <select id="sidparcelau" class="form-control" >                                

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


           <?php 
              require_once "footer.php";       

           ?>  

     </div>   

</body>

</html>



<script type="text/javascript">

	$(document).ready(function(){

		$('#tabla').load('componentes/Ptsocio.php');    

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){

// colocar el foco en el modal al crear un nuevo registro
    socioNuevo();
    socioEdicion();
  

    $('#guardarnuevo').click(function(){



        nombre =$('#snombre').val();
        apellido =$('#sapellido').val();
        cedula =$('#scedula').val();
        direccion =$('#sdireccion').val();
        idparcela =$('#sidparcela').val();



      // alert(rncNull);

        if (nombre && idparcela){                    

            agregarSocio(nombre,apellido, cedula, direccion, idparcela)

        }else{alertify.error("Proporsiones un Nombre y Parcela");}        

    });

// limpiar formulariode cliente 

        $('#actualizadatos').click(function(){

          actualizaSocio();



        }); 





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

