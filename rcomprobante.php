<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	
	<title> Tabla dinamica </title>
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
            
<div class="container" >
       
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
                
               <!-- header de la ventana  -->
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            
                    <h4 class="modal-title">Nuevo tipo de comprobante</h4>
                </div>
               <!-- Contenido de la cliente  --> 
                
                <div class="modal-body">             
                                                                  
                       <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >
                    
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" name="" id="nombre" class="form-control" maxlength="30" inpu-sm> 
                       
                    </div>
                </div>  
                    
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Serie</span>                       
                        <input type="text" name="" id="serie" value="A" class="form-control" inpu-sm maxlength="1">       
                    </div>
                </div> 
                    
                    
                 <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Tipo de comprobante</span>   
                       <input type="text" name="" value="11" id="division" class="form-control" inpu-sm maxlength="2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        
                     </div>
                </div>    
              
                </div> 
                
                <!-- Footer de la ventana  -->
                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 <button type="button" class="btn btn-primary" id="nuevoComprobante">Gurdar Cambios</button>
                </div>
                
              </div>            
            </div>        
        </div>
    </div>
    
    
    
   <div class="container"> 
    
    <div class="modal fese" id="modalEdicion" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">            
            <div class="modal-content">
                
               <!-- header de la cliente  -->
                
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            
                    <h4 class="modal-title">Atualizar Comprovante</h4>
                </div>
                
               <!-- Atctualizar contenido de la cliente  -->                
                
                
                 <div class="modal-body">             
                                                                  
                       <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >
                       <input type="text" hidden="" id="idncf" >
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>
                        <input type="text" name="" id="nombreu" class="form-control" inpu-sm maxlength="30"> 
                       
                    </div>
                </div>  
                    
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Serie</span>                       
                        <input type="text" name="" id="serieu" class="form-control" inpu-sm maxlength="1"> 
                    </div>
                </div> 
                    
                    
                 <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Tipo de comprobante</span>   
                        <input type="text" name="" id="divisionu" class="form-control" inpu-sm maxlength="2" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        
                     </div>
                </div>    

                </div>                              
                <!-- Footer de la cliente  -->
                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 <button type="button" class="btn btn-primary" id="actualizacomprobante">Guardar Cambios</button>
                </div>
                
              </div>            
            </div>        
        </div>
    </div>
<div class="container">       
<footer class="pies">     
         &copy;<strong>2018 - Derechos reservados por VTD Software</strong>  
    
</footer> 
   </div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('componentes/tcomprobante.php');
	});
</script>

<script type="text/javascript">
  $(document).ready(function(){

// agregar nuevo comprobante 
    $('#nuevoComprobante').click(function(){

        nombre =$('#nombre').val();
        serie =$('#serie').val();
        division =$('#division').val();        
     //   punto =$('#punto').val();
    //    area =$('#area').val();
     //   tipo =$('#tipo').val();


        agregarComprobante(nombre, serie, division)
    });

// actualizar los comprobante 
        $('#actualizacomprobante').click(function(){
          actualizaComprobante();
        }); 
// eliminar comprobante 
        
        $('#eliminar').click(function(){
          id =$('#eliminar').val();
          eliminardatosUusuario(id);
        });

         $('#loginbtn').click(function(){
            user =$('#username').val();
            pass =$('#password').val();            

          login(user,pass);

        }); 
// colocar el focus al levantar un modal 
        $('#modalEdicion').on('shown.bs.modal', function () {
            $('#nombreu').focus();
         
        }) 
        $('#modalNuevo').on('shown.bs.modal', function () {
            $('#nombre').focus();
         
        }) 


  });

//   $(document).ready(function(){ 
// $("#nombre" or "#txtNumbers").keydown(function(event) {
//    if(event.shiftKey)
//    {
//         event.preventDefault();
//    }
 
//    if (event.keyCode == 46 || event.keyCode == 8)    {
//    }
//    else {
//         if (event.keyCode < 95) {
//           if (event.keyCode < 48 || event.keyCode > 57) {
//                 event.preventDefault();
//           }
//         } 
//         else {
//               if (event.keyCode < 96 || event.keyCode > 105) {
//                   event.preventDefault();
//               }
//         }
//       }
//    });
// });

//Solo permite introducir numeros.
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}

</script>


<script>
$(document).ready(function(){
    $("#login").click(function(){
        $("#modalLogin").modal();
    });
});
</script>