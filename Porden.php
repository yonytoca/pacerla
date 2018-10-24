<!DOCTYPE html>
<body onload="HoraActual()"> 
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Sistema De Control De Parcelas </title>



     <?php 

        require_once "configuracion.php";   

        require_once "php/conexion.php";

          $conexion=conexion();             

    ?>

 <link rel="stylesheet" href="css/estilos.css">		

	

</head>



<body onload="limpiarOrden()">     

    

  <div class="container">

         <?php  

        require_once "header.php";         

   ?>   
<div class="container">
         <div class="panel panel-default text-center"> 

         <div class="panel-heading">
            

      <!--  <div id="expirado">El tiempo ha expirado</div> -->

            <div class="panel-tabla">



        <h4 id="logo"> ORDEN DE COMPRA   </h4>

               </div>

         </div>


    <div class="row">       

      <div class="col-md-6">                      

  <div class="panel-body text-left "> <div class="input-group"><span class="input-group-addon">Socio</span>               

                    <select  id="idsocio" class="form-control"> 

                       <!--  <option value="" > Cliente </option>   -->                  

                        <?php // buscar el cliente 

                            $sql1="select * from socio";

                            $resul1=mysqli_query($conexion,$sql1);

                            while($ver1=mysqli_fetch_row($resul1)){ 

                         ?>     

                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]." ".$ver1[2]; ?></option> 

                         <?php } ?>

                    </select>  

<!-- busqueda de cliente en el select y mostrado en el div resultado -->

          </div>
<div class="input-group"><span class="input-group-addon">Parcela</span>               

                    <select  id="idparcela" class="form-control"> 

                       <!--  <option value="" > Cliente </option>   -->                  

                        <?php // buscar el cliente 

                            $sql1="select * from parcela";

                            $resul1=mysqli_query($conexion,$sql1);

                            while($ver1=mysqli_fetch_row($resul1)){ 

                         ?>     

                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]." ".$ver1[2]; ?></option> 

                         <?php } ?>

                    </select>  

<!-- busqueda de cliente en el select y mostrado en el div resultado -->

          </div>
          <div class="input-group"><span class="input-group-addon">Agroquimica</span>               

                    <select  id="idagroquimica" class="form-control"> 

                       <!--  <option value="" > Cliente </option>   -->                  

                        <?php // buscar el cliente 

                            $sql1="select * from agroquimica";
                            $resul1=mysqli_query($conexion,$sql1);
                            
                            while($ver1=mysqli_fetch_row($resul1)){ 

                         ?>     

                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]." ".$ver1[2]; ?></option> 

                         <?php } ?>

                    </select>  

<!-- busqueda de cliente en el select y mostrado en el div resultado -->

          </div>
          <div id="resultado22" >         

          </div>

        

        <input  hidden="" type="text" name="" id="direccionentrega" inpu-sm maxlength="50" placeholder="Nota">

            </div>

      </div>

      <div class="col-md-6">

         <?php require_once"php/PdatosOrden.php"; ?>  

      </div>

    </div>    

  

     <table class="table table-condensed table-bordered" class="table table-striped">

      <tr><td ></td></tr>

      <tr>

        <td>

<style type="text/css">
  .alinearleft{
    float: left;
  }
</style>
              
    <div class="row">         
                <div id="agregarOrden" class="alinearleft" class="input-group" > 
                  <div class="col-md-5"> 
                   <input id="descripcionA" type="text" class="form-control"  inpu-sm placeholder="Producto" maxlength="50">
                 </div>
                 <div class="col-md-2"> 
                   <input id="cantidadA" type="text" class="form-control"  inpu-sm placeholder="Cantidad" onkeypress="return soloNumeros(event)">
                 </div>  
                 <div class="col-md-2">
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
                 <div class="col-md-2">   
                   <input id="notaA" type="text" class="form-control" inpu-sm placeholder="Nota" maxlength="50">
                 </div>
                 <div class="col-md-1" class="alinearleft" >    
                      <button class="btn btn-primary" id="agregardetalle" onclick="agregardatosOrden_detelle();">
                        Agregar       
                      </button>
                  </div>    
                </div>
    </div>
            

                <div id="tabla"> </div>             

        </td>

      </tr>

      </table>  

      </div>     
 


  
<!-- modal para registros nuevos de pagos   -->

<div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div class modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Generar Factura</h4>

      </div>

      <div class="modal-body">   

        <input type="text" id="idusuario" hidden="" value="<?php echo $_SESSION["id"] ?>" >          

        <label>Itebis </label>

        <input type="text" name="" readonly="" id="itebis" class="form-control" inpu-sm>   

        <label>Descuento </label>

        <input type="text" name="" readonly="" id="Descuento" class="form-control" inpu-sm>

        <label>Nomto a Pagar </label>

        <input type="text" name="" readonly="" id="monto" class="form-control" inpu-sm >

        <label>Monto pagado</label>

        <input type="number" name="" id="montop" class="form-control" inpu-sm>

        <div id="resulmp"></div>  

        <label>Devuelta</label>

        <input type="text" name="" readonly="" id="devuelta" class="form-control" inpu-sm>  

        </div>            

      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="pagar" >

        Pagar

        </button>     

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

                        <span class="input-group-addon">Descricpion</span>

                      <input type="text" id="descripcionu" class="form-control"  >                                    

                    </div>

                </div>  

          

           <div class="form-group rows">

                    <div class="input-group">
                               
                     
                        <span class="input-group-addon">Cantidad</span>

                  <div class="col-xs-8" >     
                      <input type="text" id="cantidadu" class="form-control"  inpu-sm>                         
                  </div>  
                  <div class="col-xs-4" >
                    
                  
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

                        <span class="input-group-addon">Nota</span>

                      <input type="text" id="notaAu" class="form-control"  inpu-sm>                         

                    </div>

                </div>   

          <!-- Footer de la ventana  -->

            <div class="modal-footer" id="oculto">


                                         <button type="button" class="btn btn-primary" data-dismiss="modal" id="ActualizarOrden" onclick="ActulizarOrdenDetalle()" >

        Actualizar

        </button> 

            </div> 
        </div>
     </div>
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

// llamar la tabla de orden detalle actual  

    O_id();

//  Cambiar la facrura al presionar enter 

    presionarTecla();

// calcular devuerta al pago     

  //  devuelta(); 

// cambiar la tabla de factura para hacer la consulta 

    OrdenpresionarClck(); 

// limpiar los campos de la orden 
   

//mostrar comprobante por defecto si no se elige ninguno

  //  comprobante_F();  

// mostrar cliente por defecto si no se elige ninguno

//    cliente_F();

   //buscar_tabla();  

 //  control_comprobante();

   // buscar control de comprobante 

 //reloj();

// control des descuento que solo sea uno a la vez

 //   ventaDescuento();

    
// pagar la factura poner el foco en monto 

$('#modalPagos').on('shown.bs.modal', function () {

    $('#montop').focus();

    //  soloNumero('montop');

}) 



// modificar la cantidad en la factura poner el foco

$('#modalEdicion').on('shown.bs.modal', function () {

    $('#cantidadu').focus();

 //   ventaDescuento();

}) 




// general el pago de la factura 

        $('#pagar').click(function(){      

            total=$('#total').val();

            comprobanteF = document.getElementById("resultadoC").innerHTML;         

          if (total !=0){

              if(comprobanteF =="No hay comprobante de este tipo"){ // que no venda sin comprobante 

               alertify.error("No hay comprobante de este tipo");               

              }else{

                agregarFactura(); 

                devuelta();                

              }              

            //location.reload();      

      //   window.location.href = '#rfactura.php';       

          

          }else{            

            alertify.error("Falta Cliente o Producto");

          }     

       

    });

       

// eliminar producto de la factura detalle        

        $('#eliminar').click(function(){



          id =$('#eliminar').val();

          eliminardatosUusuario(id);



        });



//buscar parcela por el socio


         $('#idsocio').change(function(){                     

            socio =$('#idsocio').val();

                  Socio_Orden(socio);            

        });  
 



// selecionar el comprobante en la factura 

       //   $('#tipo_comprobante').change(function(){                     

       //     tipo_Comprobante =$('#tipo_comprobante').val();



        //    if(tipo_Comprobante!=0){ 

       //     //     cliente_F(bus);

            //     comprobante_F(tipo_Comprobante);

            //     control_comprobante(tipo_Comprobante);

       //     }

     //   });  





  });



</script>





<script>

$(document).ready(function(){

    $("#login").click(function(){

        $("#modalLogin").modal();

    });

});



// presionar escape para cancelar busqueda de producto en la factura 

    // $(document).keyup(function(event){

    //     if(event.which==27)

    //     {

    //         $('#entradafilter').val("");

    //        F_id();      

            

    //     }

    // });   

 

</script>