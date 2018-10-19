<!DOCTYPE html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Tabla dinamica </title>

     <?php 

        require_once "configuracion.php";        

        

   ?>

</head> 



<link rel="stylesheet" href="css/estilos.css">

<body>

           

<div class="container" id="menu">       

         <?php 
              require_once "header.php";  

          ?>	

		<div class="container" id="tabla"></div>

<!-- modal para registros nuevos  -->

    <div class="container">    
       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">
         <div class="modal-dialog">      
           <div class="modal-content"> 
           <!-- header de registros de proveedor  -->
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Agregar Nuevo Tipo de Pago</h4>
                </div>
               <!-- Contenido de la proveedor  -->     
      <div class="modal-body">
           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >     

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>                  

        <input type="text" name="" id="nombre" class="form-control" inpu-sm maxlength="30">                         

                    </div>

                </div>



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nota</span>

                     <input type="text" name="" id="nota" class="form-control" inpu-sm maxlength="30">                        

                    </div>

                </div>            

          <!-- Footer de la ventana  -->

            <div class="modal-footer" id="oculto">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                  <button type="button" class="btn btn-primary" data-dismiss="modal" id="nuevotipopago">Gurdar Cambios</button>

            </div>    

          </div>

     </div>

   </div>

  </div>

</div>

<!-- modal para editar los registros  -->



<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Actualizar datos </h4>

      </div>

      <div class="modal-body">

      	<input type="text" hidden="" id="idtipopago" name="">

        <label>Nombre </label>

        <input type="text" name="" id="nombreu" class="form-control" inpu-sm>

        <label>Nota</label>

        <input type="text" name="" id="notau" class="form-control" inpu-sm>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-warning" id="actualizatipopago" data-dismiss="modal">Actualizar</button>        

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

		$('#tabla').load('componentes/ttipoPago.php');

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){



    $('#nuevotipopago').click(function(){



        nombre =$('#nombre').val();

        nota =$('#nota').val();



        agregarTipopago(nombre,nota)

    });



        $('#actualizatipopago').click(function(){



          actualizaTipopago();



        }); 



        

        $('#eliminar').click(function(){



          id =$('#eliminar').val();



          eliminardatosUusuario(id);



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