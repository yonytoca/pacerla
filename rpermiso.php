<!DOCTYPE html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Sistema De Control De Parcelas </title>

     <?php 

        require_once "configuracion.php";        

        

   ?>

    

    <link rel="stylesheet" href="css/estilos.css"> 

</head>



<body>

    

   <div class="container" >

       <div class="logo">       

       <div id="logo"><img src="img/logovtd.png" width="155" height="94" alt=""/>

            </div>

           <h1>Si lo puedes soñar nosotros lo podemos  crear</h1>

           

  </div>

    </div>

            

<div class="container" id="menu">

       

  <?php 

        require_once "menu/menu.php";               

   ?>

</div>  

    

    

	<div class="container">

		<div id="tabla"></div>

	</div>



<!-- modal para registros nuevos  -->

    

    <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de cliente  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar nuevo Permiso</h4>

                </div>

               <!-- Contenido de la cliente  --> 

 

      <div class="modal-body">

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                    <input type="text" name="" id="nombre" class="form-control" inpu-sm maxlength="30" required=""> 

                       

                    </div>

                </div> 

          

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Privilegio</span>

                   <input type="password" name="" id="privilegio" class="form-control" inpu-sm maxlength="30" required=""> 

                       

                    </div>

                </div>         

          

        

      </div>

               

          <div class="modal-footer">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="nuevoUsuario">Gurdar Cambios</button>

                </div> 

             </div>

    </div>

  </div>





<!-- modal para editar los registros  -->

 <div class="container">    

       <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de cliente  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Actualizar Permiso</h4>

                </div>

      <div class="modal-body">

          

        <input type="text" hidden="" id="idpersona" name="">

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                   <input type="text" name="" id="nombreu" class="form-control" inpu-sm maxlength="30">                    

                    </div>

                </div>  

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Privilegio</span>           

                         <input type="password" name="" id="privilegiou" class="form-control" inpu-sm maxlength="30">

                    </div>

                </div>  

                  

         <div class="modal-footer">

             <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

            <button type="button" class="btn btn-primary" id="actualizausuario">Gurdar Cambios</button>

        </div>      

       </div>

     </div>       

    </div>

    </div>

    

        <footer class="pies">    

         &copy;<strong>2018 - Derechos reservados por VTD Software</strong>   

   

        </footer>     

           

  </div>

</body>

</html>



<script type="text/javascript">

	$(document).ready(function(){

		$('#tabla').load('componentes/tpermiso.php');

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){



    $('#nuevoUsuario').click(function(){ 

        nombre =$('#nombre').val();

        privilegio =$('#privilegio').val(); 

       

           agregardatosPermiso(nombre,privilegio)              

    });



        $('#actualizausuario').click(function(){



          actualizadatosUsuario();



        }); 

// limpiar modarl y poner foco

$('#modalNuevo').on('shown.bs.modal', function () {   

    $('#nombre').focus();

    $('#nombre').val("");

    $('#clave').val("");

    $('#correo').val("");

    $('#nota').val("");

    //  soloNumero('montop');

}) 



/*

          $('#btnnuevo').click(function(){ 

           

           $('#nombre').empty(); 

        });*/

  // $("#btnLimpiar").click(function(event) {

  //    $("#formEjemplo")[0].reset();

  //  });

        

        // $('#eliminar').click(function(){



        //   id =$('#eliminar').val();



        //   eliminardatosUusuario(id);



        // });



        //  $('#loginbtn').click(function(){

        //     user =$('#username').val();

        //     pass =$('#password').val();            



        //   login(user,pass);



        // });  

  });



</script>





<script>

// $(document).ready(function(){

//     $("#login").click(function(){

//         $("#modalLogin").modal();

//     });

// });

</script>