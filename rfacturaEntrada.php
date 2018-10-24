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

    

   <div class="container" >

     <div class="logo">       

       <div id="logo"><img src="img/logovtd.png" width="155" height="94" alt=""/>

       </div>

           <h1>Si lo puedes soñar nosotros lo podemos  crear</h1>           

     </div>

    </div>

    

  <div class="container">

     <?php 

        require_once "menu/menu.php";           

      ?>

  </div> 



  

  <div class="container">      

         <div class="panel panel-default text-center"> 

         <div class="panel-heading">               

            <div class="panel-tabla">

              Entrada de los productos      

               </div>

         </div>

<!--    <div class="row">       

      <div class="col-md-1">       

<div class="btn btn-link" data-toggle="modal" data-target="#modalNuevo">Nuevo Cliente </div>

</div>



</div> -->



    <div class="row">       

      <div class="col-md-6"> 

  <div class="panel-body text-left "><div class="input-group"><span class="input-group-addon">Proveedor</span>             

                    <select  id="busProveedor" class="form-control"> 

                       <!--  <option value="" > Cliente </option>   -->                  

                        <?php // buscar el cliente 

                            $sql1="select * from proveedor";

                            $resul1=mysqli_query($conexion,$sql1);

                            while($ver1=mysqli_fetch_row($resul1)){ 

                         ?>     

                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]; ?></option> 

                         <?php } ?>

                    </select>  

<!-- busqueda de cliente en el select y mostrado en el div resultado -->

          </div><div id="resultadoEntrada" >         

          </div>

        

        <input  class="form-control" type="text" name="" id="direccionentrega" inpu-sm maxlength="50" placeholder="Nota">

            </div>

      </div>

      <div class="col-md-6">

         <?php require_once"php/datosFacturaEntrada.php"; ?> 

      </div>

    </div>     

	  </div>    

   </div>

  

     <table class="table table-condensed table-bordered" class="table table-striped">

   

        <td colspan="12">

              <div class="container">  

                <div class="input-group"> 

                   <input id="entradafilter" type="text" class="form-control" inpu-sm>

                   <span class="input-group-addon">Buscar</span>

                </div>

                <div id="tabla"> </div>

              </div>

        </td>

      </tr>

      </table>  

      

    </div>



<!-- modal para registros nuevos de pagos   -->

<div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div cla modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Guardar los cambios</h4>

      </div>

      <div class="modal-body">   

        <input type="text" id="idusuario" hidden="" value="<?php echo $_SESSION["id"] ?>" >          

       <!--  <label>Cancelar  </label>  -->

        </div>            

      <div class="modal-footer">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="pagar" >

        Guardar

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

        <h4 class="modal-title" id="myModalLabel">Agregar Producto 1</h4>

      </div>

      <div class="modal-body" >      

        <input type="text" hidden=""  id="idproducto" name="">        

        <input type="text" id="idfactura" hidden="" value="<?php echo $id1 ?>" name="">

        <input type="text" hidden="" id="upd" name="">

        <input type="text" hidden="" id="itb" >

        <label>Codigo Barra </label>

        <input type="text" name="" id="codigo_barrau" class="form-control" inpu-sm>

        <label>Descripcion </label>

        <input type="text" name="" id="descripcionu" class="form-control" inpu-sm>

        <label>Precio Venta</label>

        <input type="text" name="" id="ventau" class="form-control" inpu-sm>

        <label>Cantidad</label>

        <input type="text" name="" id="cantidadu" class="form-control" inpu-sm>              

      </div>            

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



// llamar la tabla de factura detalle actual  

   F_id_entrada(); 

//  Cambiar la facrura al presionar enter 

//    presionarTecla();

// calcular devuerta al pago     

    devuelta(); 

// cambiar la tabla de factura para hacer la consulta 

    presionarClck(); 

//mostrar comprobante por defecto si no se elige ninguno

 //   comprobante_F();  

// mostrar cliente por defecto si no se elige ninguno

    proveedor_Entrada();

   //buscar_tabla();  

 //  control_comprobante();

   // buscar control de comprobante 

 //reloj();



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

}) 



// filtrar los productos en la factura detalle para agregar 

    $('#agregar').click(function(){      

        $('#entradafilter').val("");

        agregarFactura_d_Entrada();

    });



// Guardar los cambio de entrada de factura  

        $('#pagar').click(function(){  

                agregarFacturaEntrada();// devuelta();

       

    });

       

// eliminar producto de la factura detalle        

        $('#eliminar').click(function(){



          id =$('#eliminar').val();

          eliminardatosUusuario(id);



        });



//buscar el cliente tipo_comprobante

         $('#busProveedor').change(function(){                     

            busP =$('#busProveedor').val();

            

            if(busP!=0){// alert(busP);

                  proveedor_Entrada(busP);

               //   comprobante_F(bus);

              //   control_comprobante(bus);

            }

        });  



// selecionar el comprobante en la factura 

          $('#tipo_comprobante').change(function(){                     

            tipo_Comprobante =$('#tipo_comprobante').val();



            if(tipo_Comprobante!=0){ 

            //     cliente_F(bus);

            //     comprobante_F(tipo_Comprobante);

            //     control_comprobante(tipo_Comprobante);

            }

        });  





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

           F_id_entrada();

         //  F_id();      

            

        }

    });    

 

</script>