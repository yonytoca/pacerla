<!DOCTYPE html>

<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

<?php 

        require_once "configuracion.php";        

        

   ?>


	<title> Sistema De Control De Parcelas </title>

     

    <link rel="stylesheet" href="css/estilos.css">

</head>



<body>   

         

<div class="container">

     <?php 

        require_once "header.php";        

        

   ?> 

  

  <div id="conReloj"></div>

	<div class="container">

		<div id="tabla"></div>

	</div>





    <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de proveedor  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar Nueva Agroquimica</h4>

                </div>

               <!-- Contenido de la proveedor  -->       

               

               

      <div class="modal-body">

           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

      

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre de Agroquimica</span>

                      

        <input type="text" name="" id="pagro" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nota</span>

                      <input type="text" name="" id="pnota" class="form-control" maxlength="10">                         

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

                    <h4 class="modal-title">Actualizar datos de la Agroquimica</h4>

                </div>

        

        

      <div class="modal-body">

          <input type="text"  id="id" hidden="" name="">  

           <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre Agroquimica</span>
                        
                        <input type="text" name="" id="pagrou" class="form-control" inpu-sm maxlength="30">                   
                    </div>
                </div> 



          <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nota</span>

                        <input type="text" name="" id="pnotau" class="form-control" inpu-sm maxlength="25" >                        

                    </div>

                </div>

               

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

		$('#tabla').load('componentes/Ptagro.php');    

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){

    // colocar el foco en los modales 
    agroquimicaNuevo();
    agroquimicaEdicion();

  

    $('#guardarnuevo').click(function(){
        nombre =$('#pagro').val();
        nota =$('#pnota').val();

      // alert(rncNull);

        if (nombre && nota){                    

            agregarAgroquimica(nombre,nota)

        }else{alertify.error("Proporsiones un Nombre y nota");}

        

    });

// limpiar formulariode cliente 
        $('#actualizadatos').click(function(){
          actualizaAgroquimica();

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

