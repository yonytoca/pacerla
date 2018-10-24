<!DOCTYPE html>

<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	

	<title> Sistema De Control De Parcelas </title>





     <?php 

        require_once "configuracion.php";   

        require_once "php/conexion.php";

          $conexion=conexion();             

   ?>



</head>



<body>



  <?php 

        require_once "menu/menu.php";

           

   ?><h4 align="center">Factura</h4>

 



    <div class="container" class="row">

      <div class="col-sm-12" >

      

     

      <table class="table table-hover table-condensed table-bordered" class="table table-striped">

      <tr>

        <td width=" 30%" id="busCliente">

                    <select id="bus"> 

                        <option value="" > Cliente </option>                    

                        <?php // buscar el cliente 

                            $sql1="select * from cliente";

                            $resul1=mysqli_query($conexion,$sql1);

                            while($ver1=mysqli_fetch_row($resul1)){ 

                         ?>     

                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]." ".$ver1[2]; ?></option> 

                         <?php } ?>

                    </select>           

        

        <div class="btn btn-link" data-toggle="modal" data-target="#modalNuevo"> Nuevo</div>

      

<!-- busqueda de cliente en el select y mostrado en el div resultado -->

          <div id="resultado" ></div>

        </td>

         <td>

               <?php require_once"php/datosFactura.php"; ?>   

              

         <td width="30%">

                      <?php require_once"php/buscarEmpresa.php"; ?> 

        </td>

      </tr>

      </table>   

         

          

      </div>

    </div>



	<div class="container">  

		    <div class="input-group"> 

       <input id="entradafilter" type="text" class="form-control" inpu-sm>

       <span class="input-group-addon">Buscar</span>

    </div>

    <div id="tabla">



	</div>

  </div>



<!-- modal para registros nuevos de cliente  -->



<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div cla modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Agrega nueva persona</h4>

      </div>

      <div class="modal-body">

        <input type="text" hidden=""  id="idfactura" name=""> 

        <label>Nombre </label>

        <input type="text" name="" id="nombre" class="form-control" maxlength="30" inpu-sm required>

        <label>Apellido</label>

        <input type="text" name="" id="apellido" class="form-control" maxlength="30" inpu-sm>

        <label>Telefono</label>

        <input type="number" name="" id="telefono" class="form-control" maxlength="25" inpu-sm>

        <label>Celular</label>

        <input type="number" name="" id="tel_movil" class="form-control" maxlength="25" inpu-sm>

        <label>Direccion</label>

        <input type="text" name="" id="direccion" class="form-control" maxlength="30" inpu-sm>

        <label>Correo</label>

        <input type="mail" name="" id="correo" class="form-control" maxlength="30" inpu-sm>

        <label>RNC</label>

        <input type="number" name="" id="rnc" class="form-control" maxlength="30" inpu-sm>

        <label>Nota</label>

        <input type="text" name="" id="nota" class="form-control" maxlength="30" inpu-sm>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">

        Agregar

        </button>

        

      </div>

    </div>

  </div>

</div>



<!-- modal para registros nuevos de pagos   -->

<div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div cla modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Agregar Producto</h4>

      </div>

      <div class="modal-body">   

        <label>Itebis </label>

        <input type="text" name="" readonly="" ="" id="itebis" class="form-control" inpu-sm>   

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



<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div cla modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Agregar Producto</h4>

      </div>

      <div class="modal-body" >       

        <input type="text" hidden=""  id="idproducto" name="">        

        <input type="text" id="idfactura" hidden="" value="<?php echo $id1 ?>" name="">

        <input type="text" hidden="" id="upd" name="">

        <label>Codigo Barra </label>

        <input type="text" name="" id="codigo_barrau" class="form-control" inpu-sm>

        <label>Descripcion </label>

        <input type="text" name="" id="descripcionu" class="form-control" inpu-sm>

        <label>Precio Venta</label>

        <input type="text" name="" id="ventau" class="form-control" inpu-sm>

        <label>Cantidad</label>

        <input type="text" name="" id="cantidadu" class="form-control" inpu-sm>

        <label>Desc</label>

        <input type="text" name="" id="desc" class="form-control" inpu-sm>   

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



<!-- <script>

$(document).ready(function() {

      var refreshId =  setInterval( function(){

    $('#feedback-bg-info').load('index.php');//actualizas el div

   }, 1000 );

});



</script> -->



<script type="text/javascript">

  $(document).ready(function(){   



// llamar la tabla de factura detalle actual  

    F_id();

    

    presionarTecla();

    devuelta(); 





   //buscar_tabla();  

        // $('#entradafilter').keypress(function () {



        //   value = $('#entradafilter').val();       

        //   if (value !=""){          

        //   agragarP_F_D();  

        //  }



        // })



//Función que permite solo Números





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

// cargar el detalle de la factura al presionar enter en numero de factura 



// agregar detalle de factura  

    // $('#entradafilter').keypress(function () {



    //       value = $('#entradafilter').val();       

    //       if (value !=""){          

    //         agragarP_F_D();  

    //      }else{

    //       F_id();

    //      }



    // }).keypress();



$('#modalPagos').on('shown.bs.modal', function () {

    $('#montop').focus();

    //  soloNumero('montop');

}) 





$('#modalEdicion').on('shown.bs.modal', function () {

    $('#cantidadu').focus();

}) 





    $('#agregar').click(function(){      

        $('#entradafilter').val("");

        agregarFactura_d();

    });







    // $('#idfactura').click(function(){      

    //   F_id();

    // //    $('#entradafilter').val("");

    //   //  agregarFactura_d();

    // });



        $('#pagar').click(function(){      

            total=$('#total').val();

           

          if (total !=0){

            agregarFactura(); devuelta()

            location.reload();

      //      window.location.href = '#rfactura.php';           

          

          }else{

            alert("Falta Cliente o Producto ");

          }     

       

    });

       

        

        $('#eliminar').click(function(){



          id =$('#eliminar').val();



          eliminardatosUusuario(id);



        });



         $('#bus').change(function(){                     

            bus =$('#bus').val();

           // alert(bus);

            if(bus!=0){

              cliente_F(bus);

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



// presionar escape para cancelar busqueda 

    $(document).keyup(function(event){

        if(event.which==27)

        {

            $('#entradafilter').val("");

           F_id();

           // $('#tabla').load('componentes/tfactura.php');

            

        }

    });



</script>