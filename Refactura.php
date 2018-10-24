<?php 

	 $idfac = $_GET['Rver'];

 ?>



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

              Factura     

               </div>

         </div>



    <div class="row">       

      <div class="col-md-6">                      

  <div class="panel-body text-left "> <div>

<?php 

  if($idfac){

        $sql="select c.nombre, c.telefono, c.direccion from cliente as c, factura as f where c.id = f.id_cliente and f.id =".$idfac;

        $resul=mysqli_query($conexion,$sql);

          

  ?>

  <?php  while($ver=mysqli_fetch_row($resul)){ ?> 

    

    <input type="text" id="id_comprobanteF" hidden=""  value="<?php echo $ver[0] ?>" >     

     <div class="row">              

    

     <div class="form-group col-sm-4 " id="r-factura" >

                    <div class="input-group">

                        <span class="input-group-addon"><strong>Nombre:</strong> <?php echo $ver[1] ?>  </span>             

                    </div>

                </div>  

      

    

     <div class="form-group col-sm-2" id="r-factura" >

                    <div class="input-group">

                        <span class="input-group-addon" ><strong>Teléfono:</strong> <?php echo $ver[2] ?> </span>

                      

                    </div>

                </div> 

        <div class="row">

            <div class="col-sm-12">

     <div class="form-group col-sm-12" id="r-factura" >

                    <div class="input-group">

                        <span class="input-group-addon" ><strong>Dirección:</strong> <?php echo $ver[1] ?> </span>

                      </div>

                    </div>

                </div>

         </div>

         </div>       

  

    

  <?php } }?>



          </div>

        

        <input  class="form-control" type="text" name="" id="direccionentrega" inpu-sm maxlength="50" placeholder="Nota">

            </div>

      </div>

      <div class="col-md-6">

<!-- aqui los datos de la factura -->      

        <?php       





        $sql="select * from factura where id = ".$idfac ;

        $resul=mysqli_query($conexion,$sql);

        while($ver1=mysqli_fetch_row($resul)){

            

            $id1= $ver1[0];  } 



            function formato($id1) { 

                printf("%011d",  $id1); 

                } 

  ?>

  		<input type="text" hidden="" id="fecha" value="<?php //echo $fecha ?>" name="">

  		<input type="text" hidden="" id="hora1" value="<?php //echo $hora ?>" name="">

    <div class="row">

         <div class="col-sm-12">

     <div class="form-group" id="r-factura" >

                    <div class="input-group">

                        <span class="input-group-addon" ><strong>Factura #:</strong> <input type="text" id="idfactura" value="<?php echo $idfac; ?>" name="" maxlength="30" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">	  <strong>Fecha:</strong> <?php //echo $fecha ?> <strong id="contenedor_reloj">Hora:</strong> </span>                      

                    </div>

                </div>

           <div class="form-group" id="r-factura" >

                    <div class="input-group col-xs-12">

                            <span class="input-group-addon " >

                                <strong>Tipo de pago:</strong>

                                <select id="tipo_pago" >

    								<!-- <option value="" > Tipo Pago </option>   -->                    

    		                        <?php 		                        

    		                            $sql1="select * from factura_condicion_pago";

    		                            $resul1=mysqli_query($conexion,$sql1);

    		                            while($ver1=mysqli_fetch_row($resul1)){ 

    		                         ?>     

    		                         <option value="<?php echo $ver1[0]; ?>"><?php echo $ver1[1]; ?></option> 

    		                         <?php } ?>

    		                    </select>

                      <div class="form-group" id="r-factura" >

                        <div class="input-group">

                          <span class="input-group-addon" ><strong>Comprobante:</strong>

                            <select id="tipo_comprobante">

                                 <option value="" > Tipo Comprobante </option>                      

                                <?php                             

                                    $sql2="select * from ncf";

                                    $resul2=mysqli_query($conexion,$sql2);

                                    while($ver2=mysqli_fetch_row($resul2)){ 

                                 ?>     

                                 <option value="<?php echo $ver2[0]; ?>"><?php echo $ver2[1]; ?></option> 

                                 <?php } ?>

                            </select><div><div id="resultadoControl"></div><div id="resultadoC"></div> </div>

                          </span>

                        </div>

                      </div>

                    </div>

                </div>  

          </div>

      </div>

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

      

<!-- modal para registros nuevos de cliente  -->



       <div class="modal fese" id="modalNuevo">

         <div class="modal-dialog">            

           <div class="modal-content">

                

               <!-- header de registros de cliente  -->

                

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            

                    <h4 class="modal-title">Agregar nuevo cliente</h4>

                </div>

               <!-- Contenido de la cliente  --> 

                

                <div class="modal-body">             

                                                                  

                       <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Nombre</span>

                        <input type="text" name="" id="nombre" class="form-control" maxlength="30" inpu-sm required> 

                       

                    </div>

                </div>  

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Apellido</span>                       

                        <input type="text" name="" id="apellido" class="form-control" maxlength="30" inpu-sm>       

                    </div>

                </div> 

                    

                    

                 <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Telefono</span>   

                        <input type="text" name="" id="telefono" class="form-control" maxlength="10"  inpu-sm onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">

                        

                     </div>

                </div>    

                      

                    

                  <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon"> Celular</span>  

                        <input type="text" name="" id="tel_movil" class="form-control" maxlength="10" inpu-sm onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">                        

                      </div>

                    </div>   

                        

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">Direccion</span>

                        <input type="text" name="" id="direccion" class="form-control" maxlength="30" inpu-sm data-validation="required">

                        

                    </div>

                </div>

                        

                    

                 <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">E-mail @</span>   

                        <input type="email" name="" id="email" class="form-control" maxlength="30" inpu-sm data-validation="email">

                     </div>

                </div>

                    

                         <div id="xmail" class="hide"><h6 class="text-danger">Ingresa un email valido</h6></div>                    

                      <!--   <label>RNC * </label> -->

                    

                <div class="form-group">

                    <div class="input-group">

                        <span class="input-group-addon">RNC O Cedula</span>

                    

                        <input type="text" name="" id="rnc" class="form-control" maxlength="12" inpu-sm onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">

                    </div>

                </div>

                        

                <div class="form-group">

                 <div class="input-group">

                        <span class="input-group-addon">Nota</span>                       

                        <input type="text" name="" id="nota" class="form-control" maxlength="30" inpu-sm>

                  </div>

                </div>

                </div> 

                

                <!-- Footer de la ventana  -->

                <div class="modal-footer">

                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>

                 <button type="button" class="btn btn-primary" id="guardarnuevo">Gurdar Cambios</button>

                </div>

                

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

        <input type="text" hidden="" id="itb" >

        <label>Codigo Barra </label>

        <input type="text" name="" id="codigo_barrau" class="form-control" inpu-sm>

        <label>Descripcion </label>

        <input type="text" name="" id="descripcionu" class="form-control" inpu-sm>

        <label>Precio Venta</label>

        <input type="text" name="" id="ventau" class="form-control" inpu-sm>

        <label>Cantidad</label>

        <input type="text" name="" id="cantidadu" class="form-control" inpu-sm>

        <label>Desc %</label>

        <input type="checkbox" name="enviarsi" id="desEnviarsi" onclick="document.getElementById('desc').disabled = ! document.getElementById('desc').disabled,document.getElementById('desc_can').disabled = ! document.getElementById('desc_can').disabled"></input>

        <input type="text" name="" id="desc" class="form-control" inpu-sm > 

         <label>Desc Cantidad</label> 

        <input type="text" name="" id="desc_can" class="form-control" inpu-sm disabled="">   

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

            comprobanteF = document.getElementById("resultadoC").innerHTML;

                      

         

          if (total !=0){

              if(comprobanteF =="No hay comprobante de este tipo"){ // que no venda sin comprobante 

               alertify.error("No hay comprobante de este tipo");               

              }else{

                agregarFactura(); devuelta();

              }

         //   F_imprimir();

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

           F_id();      

            

        }

    });    

 

</script>