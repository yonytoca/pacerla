<!DOCTYPE html>
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

		<div class="container" id="tabla"></div>
<!-- modal para registros nuevos  -->       

    <div class="container">    

       <div class="modal fese" id="modalNuevo" data-backdrop="static" data-keyboard="false">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de  productos  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar nuevo </h4>

                </div>

               <!-- Contenido de la productos  --> 

      <div class="modal-body">

          

<!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Código</span>

                       <input type="text" name="" id="codigo_barra" class="form-control" inpu-sm maxlength="20" placeholder="Codigo Barra" >                      

                    </div>

                </div>  -->

          

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Descripción</span>

                          <input type="text" name="" id="descripcion" class="form-control" inpu-sm maxlength="30" placeholder="Descripción">                    

                    </div>

                </div> 

          

<!--             <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Precio de Costo</span>

                      <input type="text" name="" id="costo" class="form-control" inpu-sm maxlength="15" placeholder="Precio Costo" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">                       

                    </div>

                </div>  -->

 <!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Precio de venta </span>

                      <input type="text" name="" id="venta" class="form-control" inpu-sm maxlength="15" placeholder="Precio Venta 1" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">                       

                    </div>

                </div> 

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Venta negativa </span>

                    <input type="checkbox" name="ventaN" id="ventaNu" value="1">           

                    </div>

                </div>  -->

<!--             <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Precio de venta 3 </span>

                      <input type="text" name="" id="venta3" class="form-control" inpu-sm maxlength="15" placeholder="Precio Venta 3" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">                       

                    </div>

                </div>    -->  

            <div hidden="" class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Paga ITBIS</span>

                           <select id="iditebis" class="form-control" >                                

                            <?php

                               $sql2="select * from itbis";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[2]; ?></option> 

                             <?php } ?>

                               

                      </select>                    

                    </div>

                </div> 

          

<!--             <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cantidad</span>

                        <input type="text" name="" id="cantidad" class="form-control" inpu-sm maxlength="15" placeholder="Cantidad" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">                      

                    </div>

                </div>  -->

          

<!--             <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Ubicación</span>

                        <input type="text" name="" id="ubicacion" class="form-control" inpu-sm maxlength="30" >                      

                    </div>

                </div> 

            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Categoría</span>

                        <input type="text" name="" id="categoria" class="form-control" inpu-sm maxlength="30">                       

                    </div>

                </div>  -->

             </div>

               

              

<!-- Footer de la ventana  -->

    <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        <button type="button" class="btn btn-primary" id="nuevoProducto">Gurdar Cambios</button>

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

                

               <!-- header de registros de  productos  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Actualizar </h4>

                </div>    

   

      <div class="modal-body">

        <input type="text" hidden="" id="idproducto" name="">

<!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Codigo de Barra</span>

                        <input type="text" name="" id="codigo_barrau" class="form-control" inpu-sm maxlength="20" value=""> 

                    </div>

                </div>   -->

         <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Descripción</span>

                        <input type="text" name="" id="descripcionu" class="form-control" inpu-sm maxlength="30"> 

                    </div>

                </div>  

         <!--   <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Precio de costo</span>

                     <input type="text" name="" id="costou" class="form-control" inpu-sm maxlength="15" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">   

                    </div>

                </div>  

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Precio de venta </span>

                      <input type="text" name="" id="ventau" class="form-control" inpu-sm maxlength="15" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">  

                    </div>

                </div>



                    <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Venta negativa </span>

                    <input type="checkbox" name="ventaNu" id="ventaNu" value="1">           

                    </div>

                </div>  -->

<!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Precio de venta 2 </span>

                      <input type="text" name="" id="ventau2" class="form-control" inpu-sm maxlength="15" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">  

                    </div>

                </div>

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Precio de venta 3 </span>

                      <input type="text" name="" id="ventau3" class="form-control" inpu-sm maxlength="15" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">  

                    </div>

                </div>  --> 

                            <div hidden="" class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Paga ITBIS</span>

                           <select id="iditebisu" class="form-control" >                                

                            <?php

                               $sql2="select * from itbis";

                                $resul2=mysqli_query($conexion,$sql2);

                                while($ver2=mysqli_fetch_row($resul2)){ 

                             ?>     

                             <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[2]; ?></option> 

                             <?php } ?>

                               

                      </select>                    

                    </div>

                </div>                 

<!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Cantidad</span>

                      <input type="text" name="" id="cantidadu" class="form-control" inpu-sm maxlength="15" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">  

                    </div>

                </div>   -->

<!--            <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Ubicación</span>

                      <input type="text" name="" id="ubicacionu" class="form-control" inpu-sm maxlength="30">  

                    </div>

                </div>  

           <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Categoría</span>

                       <input type="text" name="" id="categoriau" class="form-control" inpu-sm maxlength="30"> 

                    </div>

                 </div>   -->

               </div>

             

                     

    <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        <button type="button" class="btn btn-primary" id="actualizaproducto">Gurdar Cambios</button>

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

        FocusMfiltros();

		$('#tabla').load('componentes/tproducto.php');

	});

</script>



<script type="text/javascript">

  $(document).ready(function(){
    // funcion para limpiar modal de producto
    limpiarMproducto();
    // colocar el focus en modal edicion 
    editarMproducto();
    // colocar el focus en los filtros de las tablas  

  //  FocusMfiltros();    

    // contralar el precio venta versus costos

    ventaCosto(); 

    $('#nuevoProducto').click(function(){

      //  codigo_barra =$('#codigo_barra').val();

        descripcion =$('#descripcion').val();

      //  costo =$('#costo').val();        

     //   venta =$('#venta').val();

     //   venta2 =$('#venta2').val();

     //   venta3 =$('#venta3').val();

     //   cantidad =$('#cantidad').val();

    //    ubicacion =$('#ubicacion').val();

     //   categoria =$('#categoria').val();

        iditebis =$('#iditebis').val();

        

      //  if (codigo_barra){

            if(descripcion){

              agregarProducto(descripcion,iditebis)

            }else{alertify.error("Falta la descripcion");}

     //   }else{alertify.error("Proporsiones un nombre :(");}

    });



        $('#actualizaproducto').click(function(){



        //    costou =$('#costou').val();        

        //    ventau =$('#ventau').val();



         // if(Number(ventau) > Number(costou)){

              actualizaProducto();

           // }else{alertify.error("Precio Venta debe ser mayor Costo");}

          



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