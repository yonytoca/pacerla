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

                        <span class="input-group-addon">Cultivo</span>                      

                              <select id="idproducto" class="form-control" >                                

                            <?php

                               $sql2="select * from producto";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[2] ; ?></option> 

                             <?php } ?>

                               

                       </select>                        

                    </div>

                </div>



           <div class="form-group rows">
                                  
               
                    <div class="input-group">

                        <span class="input-group-addon">Cantidad</span>
<div class="col-xs-8">

                      <input type="text" name="" id="cantidad" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)"> 
  </div> 
  <div class="col-xs-4">                      
                        <select id="idunidad" class="form-control" >                             
                            <?php
                               $sql2="select * from unidadmedida";
                                $resul2=mysqli_query($conexion,$sql2);
                                while($ver2=mysqli_fetch_row($resul2)){
                             ?>
                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 
                             <?php } ?>                              

                       </select>                          
 </div>
                    </div>

                </div>  

          

           <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Parcela</span>
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



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Fecha siembra</span>

                      <input type="date" name="" value="<?php echo $fecha?>" id="fechasiembra" class="form-control" maxlength="30" inpu-sm>                         

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

                    <h4 class="modal-title">Actualizar </h4>

                </div>

               <!-- Contenido de la proveedor  -->                

               

      <div class="modal-body">

           <input type="text" hidden=""   id="idsiembra" >

           <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

      

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cultivo</span>                      

                              <select id="idproductou" class="form-control" >                                

                            <?php

                               $sql2="select * from producto";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[2] ; ?></option> 

                             <?php } ?>

                               

                       </select>                        

                    </div>

                </div>



           <div class="form-group rows">
                                  
               
                    <div class="input-group">

                        <span class="input-group-addon">Cantidad</span>
<div class="col-xs-8">

                      <input type="text" name="" id="cantidadu" class="form-control" maxlength="10" onkeypress="return soloNumeros(event)"> 
  </div> 
  <div class="col-xs-4">                      
                        <select id="idunidadu" class="form-control" >                             
                            <?php
                               $sql2="select * from unidadmedida";
                                $resul2=mysqli_query($conexion,$sql2);
                                while($ver2=mysqli_fetch_row($resul2)){
                             ?>
                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 
                             <?php } ?>                              

                       </select>                          
 </div>
                    </div>

                </div>  

          

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">parcela</span>

                      <select id="idparcelau" class="form-control" >                                

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



           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Fecha siembra</span>

                      <input type="text" name="" value="<?php echo $fecha?>" id="fechasiembrau" class="form-control" maxlength="30" inpu-sm>                         

                    </div>

                </div>                   
           <div class="form-group">
                    <div class="input-group " >                                         
                        <textarea id="notau" rows="5" cols="50" placeholder="Nota" ></textarea>                               
                    </div>
                </div> 
          <!-- Footer de la ventana  -->

            <div class="modal-footer" id="oculto">

                <!--  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> -->

                 <button type="button" class="btn btn-primary" id="actualizadatos" data-dismiss="modal">Gurdar Cambios</button>

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

		$('#tabla').load('componentes/Ptsiembra.php');    

	});

</script>



<script type="text/javascript">


  $(document).ready(function(){  

    $('#guardarnuevo').click(function(){

        idproducto =$('#idproducto').val();

        cantidad =$('#cantidad').val();

        idparcela =$('#idparcela').val();  
        idunidad =$('#idunidad').val();        

        fechasiembra =$('#fechasiembra').val(); 
        nota =$('#nota').val();     



      // alert(rncNull);

        if (idproducto && idparcela && cantidad && fechasiembra){                    

            agregarSiembra(idproducto,idparcela, cantidad, fechasiembra, nota,idunidad)

        }else{alertify.error("Todos los campos son obligatorios");}

        

    });

// limpiar formulariode cliente 



        $('#actualizadatos').click(function(){

          actualizaSiembra();



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

