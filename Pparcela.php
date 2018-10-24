<!DOCTYPE html>

<html lang="es">

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Sistema De Control De Parcelas </title>

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

  <div id="conReloj"></div>
		<div class="container" id="tabla"></div>
    <div class="container">    
       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">
         <div class="modal-dialog">        

           <div class="modal-content">               

               <!-- header de registros de proveedor  -->                

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>             

                    <h4 class="modal-title">Agregar Nueva Parcela</h4>

                </div>

               <!-- Contenido de la proveedor  -->       

               

               

      <div class="modal-body">

           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

      

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre Parcela</span>

                      

        <input type="text" name="" id="pnombre" class="form-control" maxlength="50" inpu-sm>                         

                    </div>

                </div>



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Numero</span>

                      <input type="text" name="" id="pnumero" class="form-control" maxlength="10">                         

                    </div>

                </div>  

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Zona</span>

                        <input type="text" name="" id="pzona" class="form-control" maxlength="50" >                         

                    </div>

                </div>  



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nota</span>

                      <input type="text" name="" id="pnota" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>                

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Selecione Socio</span>

                    

                      <select id="psocio" class="form-control" >                                

                            <?php
                               $sql2="select * from socio";
                                $resul2=mysqli_query($conexion,$sql2);
                                while($ver2=mysqli_fetch_row($resul2)){ 
                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 

                             <?php } ?>

                               

                       </select> 

                    </div>

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



<!-- modal para editar los registros  -->



  <div class="container"> 

       <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de proveedor  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Actualizar Datos</h4>

                </div>

        

        

      <div class="modal-body">

          <input type="text"  id="idparcelau" hidden="" name="">  

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre Parcela</span>

                        <input type="text" name="" id="nombreu" class="form-control" inpu-sm maxlength="30">                        

                    </div>

                </div> 



          <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Numero</span>

                        <input type="text" name="" id="numerou" class="form-control" inpu-sm maxlength="25" >                        

                    </div>

                </div>

          <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Zona</span>

                      <input type="text" name="" id="zonau" class="form-control" inpu-sm maxlength="25" >                         

                    </div>

                </div>

          <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nota</span>

                        <input type="text" name="" id="notau" class="form-control" inpu-sm maxlength="30">                       

                    </div>

                </div>     	  

            

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Selecione Socio</span>                    

                      <select id="psociou" class="form-control" >                                

                            <?php

                               $sql2="select * from socio";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 

                             <?php } ?>                               

                       </select> 

                    </div>

                </div>                
             </div> 
           <div class="modal-footer" id="oculto">

                <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->

                 <button type="button" class="btn btn-primary" id="actualizadatos" data-dismiss="modal">Gurdar Cambios</button>               

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

		$('#tabla').load('componentes/Ptparcela.php');    

    // solocar el foco en los modales 
    parcelaEdicion();
    limpiarMparcela();

	});

</script>
<script type="text/javascript">

  $(document).ready(function(){  

    $('#guardarnuevo').click(function(){
        nombre =$('#pnombre').val();
        numero =$('#pnumero').val();
        zona =$('#pzona').val(); 
        nota =$('#pnota').val();
        psocio =$('#psocio').val();

      // alert(rncNull);

        if (nombre && psocio){                   

            agregarParcela(nombre,numero,zona,nota,psocio)

        }else{alertify.error("Proporsiones un Nombre y Socio");}

        

    });

// limpiar formulariode cliente 



        $('#actualizadatos').click(function(){

          actualizaParcela();

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

