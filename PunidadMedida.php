<!DOCTYPE html>

<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Tabla dinamica </title>
<?php 
        require_once "configuracion.php";          

   ?>

    <link rel="stylesheet" href="css/estilos.css">

</head>



<body>          

<div class="container">
     <?php 
        require_once "header.php";      

   ?>   

    

   <?php @$fecha = date("d/m/Y"); ?> 
  
 
  <div hidden="" id="contenedor_reloj"></div>

		<div class="container" id="tabla"></div>



    <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de proveedor  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar Nuevo </h4>

                </div>

               <!-- Contenido de la proveedor  -->                   

      <div class="modal-body">

           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >      



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                      <input type="text" id="nombre" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>   
           <div class="form-group">
                    <div class="input-group " >                                         
                        <textarea id="nota" rows="5" cols="50" placeholder="Nota" ></textarea>                               
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

                    <h4 class="modal-title">Actualizar Datos </h4>

                </div>

               <!-- Contenido de la proveedor  -->                

               

      <div class="modal-body">

           <input type="text" hidden=""   id="idunidad" >

           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Unidad Medida</span>

                      <input type="text" id="nombreu" class="form-control" maxlength="10" >                                    

                    </div>

                </div>  



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nota</span>

                      <input type="text" id="notau" class="form-control"  inpu-sm>                         

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
		$('#tabla').load('componentes/PtunidadMediada.php');    
	});
</script>



<script type="text/javascript">


  $(document).ready(function(){  

    $('#guardarnuevo').click(function(){

        nombre =$('#nombre').val();
        nota =$('#nota').val();     



      // alert(rncNull);

        if (nombre){                    

            agregarUnidadMedida(nombre,nota)

        }else{alertify.error("Todos los campos son obligatorios");}

        

    });

// limpiar formulariode cliente 



        $('#actualizadatos').click(function(){

          actualizaUnidadMedida();



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

