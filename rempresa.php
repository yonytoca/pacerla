<!DOCTYPE html>

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

		<div class="container" id="tabla"></div>




    <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de cliente  -->

                

               

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Empresa Nueva</h4>

                </div>

               

    

      <div class="modal-body">  

          

          <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon">Nombre</span>                       

                  <input type="text" name="" id="nombre" placeholder="Nombre" class="form-control" inpu-sm maxlength="30">     

                </div>

          </div>

          

          <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">RNC</span>

                <input type="text" name="" id="rnc" placeholder="RNC" class="form-control" inpu-sm maxlength="30" onkeypress="return soloNumeros(event)">        

                       

            </div>

         </div>  

          

         <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">Dirección</span>

                <input type="text" name="" id="direccion" placeholder="Direccion" class="form-control" inpu-sm maxlength="100">        

                       

            </div>

         </div>

          <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">Teléfono 1</span>                        

                 <input type="text" name="" id="telefono1" placeholder="Telefono 1" class="form-control" inpu-sm maxlength="25" onkeypress="return soloNumeros(event)">      

            </div>

         </div> 

          

          

           <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">Teléfono 2</span>

                <input type="text" name="" id="telefono2" placeholder="Telefono 2" class="form-control" inpu-sm maxlength="25" onkeypress="return soloNumeros(event)">        

                       

            </div>

         </div> 

            <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">Movil</span>

                <input type="text" name="" id="tel_movil" placeholder="Telefono Movil" class="form-control" inpu-sm maxlength="25" onkeypress="return soloNumeros(event)">        

                       

            </div>

         </div> 

          

            <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">Pagina Web</span>

                        

                <input type="text" name="" id="pagina_web" placeholder="Pagina Web" class="form-control" inpu-sm maxlength="30">       

            </div>

         </div> 

          

            <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">Correo</span>

                        

                <input type="mail" name="" id="correo" placeholder="Correo" class="form-control" inpu-sm maxlength="30">       

            </div>

         </div> 

          

            <div class="form-group">

             <div class="input-group">

                <span class="input-group-addon">Codigo Postal</span>

                        

                <input type="number" name="" id="codigo_postal" placeholder="Codigo Postal" class="form-control" inpu-sm maxlength="11">       

            </div>

         </div> 

          

            <div hidden="">

             <div class="input-group">

                <span hidden="" class="input-group-addon">Pais</span>

                  <input type="number" hidden="" name="" id="pais" placeholder="Pais" value="R.D" class="form-control" inpu-sm maxlength="11">       

                       

            </div>

         </div>           

        </div>

       

    <!-- Footer de la ventana  -->

     <div class="modal-footer">

       <!--   <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->

        <button type="button" class="btn btn-primary" id="nuevoEmpresa" data-dismiss="modal">Gurdar Empresa</button>

     </div>    



      </div>

    </div>

  </div>

</div>
    



  <!-- contenedor para actualizar datos de la Empresa  -->    

    

   <div class="container"> 

    

    <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">

        <div class="modal-dialog">            

            <div class="modal-content">

                

               <!-- header de la cliente  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title" id="myModalLabel">Actualizar Empresa</h4>

                </div>

                

       <div class="modal-body">                                                   

         <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

            <input type="hidden" name="" id="idempresa" class="form-control">     

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                        <input type="text" name="" id="nombreu" class="form-control" inpu-sm maxlength="30">                       

                    </div>

                </div>          

                

     <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">RNC</span>

            <input type="text" name="" id="rncu" class="form-control" inpu-sm maxlength="25" onkeypress="return soloNumeros(event)">                                  

        </div>

    </div>  

    

    <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">Dirección</span>

           <input type="text" name="" id="direccionu" class="form-control" inpu-sm maxlength="100">                                   

        </div>

    </div> 

           

  <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">Teléfono 1</span>

            <input type="text" name="" id="telefono1u" class="form-control" inpu-sm maxlength="25" onkeypress="return soloNumeros(event)">                                  

        </div>

    </div> 

           

   <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">Teléfono 2</span>

           <input type="text" name="" id="telefono2u" class="form-control" inpu-sm maxlength="25" onkeypress="return soloNumeros(event)">                                   

        </div>

    </div> 

           

  <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">Telefono Movil</span>

            <input type="text" name="" id="tel_movilu" class="form-control" inpu-sm maxlength="25" onkeypress="return soloNumeros(event)">                                  

        </div>

    </div> 

           

     <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">Pagina Web</span>

            <input type="text" name="" id="pagina_webu" class="form-control" inpu-sm maxlength="30">                                 

        </div>

    </div> 

           

  <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">Correo</span>

            <input type="mail" name="" id="correou" class="form-control" inpu-sm maxlength="30">                                  

        </div>

    </div> 

           

    <div class="form-group">

        <div class="input-group">

            <span class="input-group-addon">Codigo Postal</span>

             <input type="number" name="" id="codigo_postalu" class="form-control" inpu-sm maxlength="25">                                  

        </div>

    </div> 

           

   <div hidden="">

        <div class="input-group">

            <span hidden="" class="input-group-addon">Pais</span>

            <input type="number" name="" hidden="" value="R.D" id="paisu"  inpu-sm maxlength="25">                                  

        </div>

    </div>     

</div>

    <div class="modal-footer">

       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

       <button type="button" class="btn btn-primary" id="actualizaempresa">Gurdar Cambios</button>

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

		$('#tabla').load('componentes/tempresa.php');

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){



      $('#nuevoEmpresa').click(function(){



        nombre =$('#nombre').val();

        rnc =$('#rnc').val();

        direccion =$('#direccion').val();

        telefono1 =$('#telefono1').val();

        telefono2 =$('#telefono2').val();

        tel_movil =$('#tel_movil').val();

        pagina_web =$('#pagina_web').val();

        correo =$('#correo').val();

        codigo_postal =$('#codigo_postal').val();

        pais =$('#pais').val();

 



        agregarEmpresa(nombre,rnc,direccion,telefono1,telefono2,tel_movil,pagina_web,correo,codigo_postal,pais)

    });



        $('#actualizaempresa').click(function(){



          actualizaEmpresa();



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