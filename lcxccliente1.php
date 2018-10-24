<!DOCTYPE html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 

  <title> Tabla dinamica </title>



     <?php 

        require_once "configuracion.php";   

        require_once "php/conexion.php";

          $conexion=conexion();             

    ?>

 <link rel="stylesheet" href="css/estilos.css"> 

  

</head>



<body id="r">     

    

  <div class="container">

    

         <div class="panel panel-default text-center"> 

         <div class="panel-heading">

              <?php 

        require_once "menu/menu.php";           

      ?>               

      <!--  <div id="expirado">El tiempo ha expirado</div> -->

            <div class="panel-tabla">



        <h4 id="logo"><img src="img/logovtd.png" width="30" height="25" alt=""> Recibo    </h4>

               </div>

         </div>



<!-- caturar el id del cliente para hacer el pago -->         

   <input type="text" id="idcliente1" hidden="" value="<?php echo $_GET['Rver'] ?>" > 

    <div class="row">       

      <div class="col-md-6">                      

  <div class="panel-body text-left "> <div id="resultado" >         

          </div>

        

        <input  class="form-control" type="text" name="" id="direccionentrega" inpu-sm maxlength="50" placeholder="Nota">

            </div>

      </div>

      <div class="col-md-6">



         <?php require_once"php/CXCdatosRecibo.php"; ?> 



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

<div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div cla modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Generar Recibo</h4>

      </div>

      <div class="modal-body">   

        <input type="text" id="idusuario" hidden="" value="<?php echo $_SESSION["id"] ?>" >          

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



<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div cla modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Factura al recibo</h4>

      </div>

      <div class="modal-body" >      

        <input type="text" hidden="" id="idrecibo" value="<?php echo $id1 ?>" name="">

        <input type="text" id="monto_pagado" hidden=""  name="">

        <label>Factura #</label>

        <input type="text" name="" id="idfacturau" readonly="" class="form-control" inpu-sm>

        <label>Fecha Factura</label>

        <input type="text" name="" id="fechau" readonly="" class="form-control" inpu-sm>

        <label>Monto</label>

        <input type="text" name="" readonly="" id="montou" class="form-control" inpu-sm>

        <label>Monto a pagar </label>

        <input type="text" name="" id="monto_a_pagaru" class="form-control" inpu-sm>            

      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="agregar" >

        Agregar

        </button>        

      </div>

    </div>

  </div>

</div>





</body>

</html>



<script type="text/javascript">

  $(document).ready(function(){  

// buscar el cliente para cobrar las facturas pendiente              

   CXCcliente(); 



// llamar la tabla de factura pendiente por cliente agregada en datalle ingreso  

   CXC_F_clinte_id();



// al hacer click en el buscador llamar la tabla de facturas pendiente por el cliente activo  

   CXCpresionarClck();



// al hacer dobleclick en el buscador llamar la tabla de facturas agregadas al recibo  

   CXCpresionarDobleClck();



// presionar enter en montop y mover boton pagar 

  presionarTeclaEnter()

//  Cambiar la facrura al presionar enter 

//   presionarTecla();



// calcular devuerta al pago     

    devuelta(); 

// cambiar la tabla de factura para hacer la consulta 

//    presionarClck(); 

//mostrar comprobante por defecto si no se elige ninguno

 //   comprobante_F();  

// mostrar cliente por defecto si no se elige ninguno

 //   cliente_F();

   //buscar_tabla();  

//   control_comprobante();

   // buscar control de comprobante 

 //reloj();

// control des descuento que solo sea uno a la vez

//    ventaDescuento();





// crear nuevo cliente en factura 

  

    // $('#guardarnuevo').click(function(){



    //     nombre =$('#nombre').val();

    //     apellido =$('#apellido').val();

    //     direccion =$('#direccion').val();        

    //     telefono =$('#telefono').val();

    //     tel_movil =$('#tel_movil').val();

    //     correo =$('#correo').val();

    //     rnc =$('#rnc').val();

    //     nota =$('#nota').val();        



    //     agregardatos(nombre,apellido,direccion,telefono,tel_movil,correo,rnc,nota)

    // });

// pagar la factura poner el foco en monto 

$('#modalPagos').on('shown.bs.modal', function () {

    $('#montop').focus();

    //  soloNumero('montop');

}) 



// modificar la cantidad en la factura poner el foco

$('#modalEdicion').on('shown.bs.modal', function () {

    $('#monto_a_pagaru').focus();

 //   ventaDescuento();

}) 



// filtrar las facturas con deudas por cliente para agregar al recibo 

    $('#agregar').click(function(){      

        $('#entradafilter').val("");

        monto_a_pagaru =$('#monto_a_pagaru').val();

        if(monto_a_pagaru !=0 ){

          CXCagregarRecibo_d()

        }else{

          alertify.error("Proporsione un valor a pagar");

        }

        

    });



// general el pago de la factura en los recibos 

        $('#pagar').click(function(){      

            total=$('#monto').val();



          if (total !=0){



                CXCagregarRecibo();

                devuelta();                                           

            //location.reload();      

      //   window.location.href = '#rfactura.php';           

          

          }else{            

            alertify.error("No hay factura para generar recibo");

          }   

       

    });

       

// eliminar producto de la factura detalle        

        // $('#eliminar').click(function(){



        //   id =$('#eliminar').val();



        //   eliminardatosUusuario(id);



        // });









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

         CXC_F_clinte_id()

         //  F_id();      

            

        }

    });  
</script>