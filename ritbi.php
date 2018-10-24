<!DOCTYPE html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Sistema De Control De Parcelas </title>

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

        

    

	<div class="container">

		<div id="tabla"></div>

	</div>



<!-- modal para ITEBIS  -->

    

     <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de cliente  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title" id="myModalLabel" >Agregar nuevo ITEBIS</h4>

                </div>

               <!-- Contenido de la cliente  -->   

    

 

      <div class="modal-body">

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Monto</span>

                        <input type="text" name="" id="monto" class="form-control" inpu-sm maxlength="12">

                       

                    </div>

                </div>      

          

          

          <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Descripcion</span>

                       <input type="text" name="" id="descripcion" class="form-control" inpu-sm maxlength="30">

                    </div>

                </div>      

               </div>

        <div class="modal-footer">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="nuevoItbi">Gurdar Cambios</button>

          </div>       

        </div>

      </div>

    </div>

  </div>



<!-- modal para editar los registros  -->

    

    

    

       

       <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">          

               

               

              <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title" id="myModalLabel" >Atualizar ITBIS</h4>

                </div>

               

     <div class="modal-body">               

          <input type="text" hidden="" id="iditbi" name="">



               <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Monto</span>

                       <input type="text" name="" id="montou" class="form-control" inpu-sm>                       

                    </div>

                </div>       

                  

     

         <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Descripcion</span>

                       <input type="text" name="" id="descripcionu" class="form-control" inpu-sm>                      

                    </div>

                 </div> 

               </div>

            <!-- Footer de la cliente  -->                 

                     

                     

                <div class="modal-footer">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="actualizaitbi">Gurdar Cambios</button>

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

		$('#tabla').load('componentes/titbi.php');

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){



    $('#nuevoItbi').click(function(){



        monto =$('#monto').val();

        descripcion =$('#descripcion').val();



        agregarItbi(monto,descripcion)

    });



        $('#actualizaitbi').click(function(){



          actualizaItbi();



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