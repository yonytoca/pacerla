<!DOCTYPE html>
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
<body>     
         <?php 
              require_once "header.php";  

          ?>
           
  <div class="container">                

         <div class="panel panel-default text-center"> 

         <div class="panel-heading">
      <!--  <div id="expirado">El tiempo ha expirado</div> -->

            <div class="panel-tabla">



        <h4 id="logo"><img src="img/logovtd.png" width="30" height="25" alt=""> Factura    </h4>

               </div>

         </div>


<!--    <div class="row">       

      <div class="col-md-1">       

<div class="btn btn-link" data-toggle="modal" data-target="#modalNuevo">Nuevo Cliente </div>

</div>



</div> -->



    <div class="row">       

      <div class="col-md-6">                      

  <div class="panel-body text-left "> <div class="input-group"><span class="input-group-addon">Cliente</span>               

                    <select  id="bus" class="form-control"> 

                       <!--  <option value="" > Cliente </option>   -->                  

                        <?php // buscar el cliente 

                            $sql1="select * from cliente";

                            $resul1=mysqli_query($conexion,$sql1);

                            while($ver1=mysqli_fetch_row($resul1)){ 

                         ?>     

                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]." ".$ver1[2]; ?></option> 

                         <?php } ?>

                    </select>  

<!-- busqueda de cliente en el select y mostrado en el div resultado -->

          </div><div id="resultado" >         

          </div>

        

        <input  class="form-control" type="text" name="" id="direccionentrega" inpu-sm maxlength="50" placeholder="Nota">

            </div>

      </div>

      <div class="col-md-6">

         <?php require_once"php/datosFactura.php"; ?> 

      </div>

    </div>    

  

     <table class="table table-condensed table-bordered" class="table table-striped">

      <tr><td ></td></tr>

      <tr>

        <td>

              

                <div class="input-group"> 

                   <input id="entradafilter" type="text" class="form-control" inpu-sm placeholder="Listar los productos">

                   <span class="input-group-addon">Buscar</span>

                </div>

                <div id="tabla"> </div>             

        </td>

      </tr>

      </table>  

      </div> 

     </div> 




<!-- modal para registros nuevos de pagos   -->

    <div class="container">
       <div class="modal fese" id="modalPagos" data-backdrop="static" data-keyboard="false">
         <div class="modal-dialog modal-sm">
           <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"> Generar Factura</h4>
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
                    <input type="number" name="" id="montop" class="form-control" inpu-sm onkeyup ="return soloNumeros(event)">
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
</div>

<!-- modal para editar los registros  -->
    <div class="container">
       <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">
         <div class="modal-dialog modal-sm">
           <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>          
                    <h4 class="modal-title" id="myModalLabel">Agregar Producto</h4>
                </div>
               <!-- Contenido de la productos  --> 
      <div class="modal-body"> 
                    <input type="text" hidden=""  id="idproducto" name=""> 
                    <input type="text" id="idfactura" hidden="" value="<?php echo $id1 ?>" name="">
                    <input type="text" hidden="" id="upd" name="">
                    <input type="text" hidden="" id="itb" >
                    <label hidden="" >Codigo Barra </label>
                    <input type="text" hidden="" name="" id="codigo_barrau"  inpu-sm>
                    <label>Descripcion </label>
                    <input type="text" name="" id="descripcionu" class="form-control" inpu-sm>
                    <label>Precio Venta</label>
                    <input type="text" name="" id="ventau" class="form-control" inpu-sm>
                    <label>Cantidad</label>
                    <input type="text" name="" id="cantidadu" class="form-control" inpu-sm>
                    <label>Desc %</label>
                    <input type="checkbox" name="enviarsi" id="desEnviarsi" onclick="document.getElementById('desc').disabled = ! document.getElementById('desc').disabled,document.getElementById('desc_can').disabled = ! document.getElementById('desc_can').disabled"></input>
                    <input type="text" name="" id="desc" class="form-control" inpu-sm> 
                     <label>Desc Cantidad</label> 
                    <input type="text" name="" id="desc_can" class="form-control" inpu-sm disabled="">  

      </div>
      <!-- Footer de la ventana  -->
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="agregar" > Agregar </button>  
    </div> 
   </div>
  </div>
 </div>
</div>           

</body>

</html>





<script type="text/javascript">

  $(document).ready(function(){  

// llamar la tabla de factura detalle actual  

    F_id();

//  Cambiar la facrura al presionar enter 

    presionarTecla();

// calcular devuerta al pago     

    devuelta(); 

// cambiar la tabla de factura para hacer la consulta 

    presionarClck(); 

//mostrar comprobante por defecto si no se elige ninguno

    comprobante_F();  

// mostrar cliente por defecto si no se elige ninguno

    cliente_F();

   //buscar_tabla();  

   control_comprobante();

   // buscar control de comprobante 

 //reloj();

// control des descuento que solo sea uno a la vez

    ventaDescuento();

// poner foco 
ColorcarFocus();



// crear nuevo cliente en factura 

  

    $('#guardarnuevo').click(function(){



        nombre =$('#nombre').val();

        apellido =$('#apellido').val();

        direccion =$('#direccion').val();        

        telefono =$('#telefono').val();

        tel_movil =$('#tel_movil').val();

        correo =$('#correo').val();

        rnc =$('#rnc').val();

        nota =$('#nota').val();        



        agregardatos(nombre,apellido,direccion,telefono,tel_movil,correo,rnc,nota)

    });

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



// filtrar los productos en la factura detalle para agregar 

    $('#agregar').click(function(){      

        $('#entradafilter').val("");

        agregarFactura_d();

    });



// general el pago de la factura 

        $('#pagar').click(function(){      

            total=$('#total').val();

          //  comprobanteF = document.getElementById("resultadoC").innerHTML;

                      

         

          if (total !=0){

         //     if(comprobanteF =="No hay comprobante de este tipo"){ // que no venda sin comprobante 

         //      alertify.error("No hay comprobante de este tipo");               

         //     }else{

                agregarFactura(); 

                devuelta();                

       //       }              

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



//buscar el cliente tipo_comprobante

         $('#bus').change(function(){                     

            bus =$('#bus').val();

            //alert(bus);

            if(bus!=0){ 

                  cliente_F(bus);

                  comprobante_F(bus);

                  control_comprobante(bus);

            }

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

    $(document).keyup(function(event){

        if(event.which==27)

        {

            $('#entradafilter').val("");

           F_id();      

            

        }

    });   

 

</script>