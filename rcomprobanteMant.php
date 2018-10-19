<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">	
	<title> Tabla dinamica </title>
     <?php 
        require_once "configuracion.php";  
              @$fecha = date("d/m/Y");
      @$hora = date("g:i a");              
   ?>
        <?php
      require_once "php/conexion.php";
      $conexion=conexion()
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>                            
                    <h4 class="modal-title">Nuevo tipo de comprobante</h4>
                </div>
                <div class="modal-body">            
                                                                  
                       <input type="text" hidden="" value="<?php echo date('dmyGis')?> " id="rncReloj" >
                       <input type="text" hidden="" id="fecha" value="<?php echo $fecha ?>" name="">
                       <input type="text" hidden="" id="hora1" value="<?php echo $hora ?>" name="">
                       <input type="text" id="idusuario" hidden="" value="<?php echo $_SESSION["id"] ?>" >                      
                    
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>                      
                           <select id="ncfM" class="form-control" >                                
                            <?php
                               $sql2="select * from ncf";
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
                        <span class="input-group-addon">Numero Inicial</span>                     
                        <input type="text" name="" id="numeroinicio" class="form-control" inpu-sm maxlength="8">    
                    </div>
                </div>                    
                    
                 <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Numero Final</span>   
                       <input type="text" name="" id="numerofinal" class="form-control" inpu-sm maxlength="8" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        
                     </div>
                </div>    

                </div>                 
                <!-- Footer de la ventana  -->
                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 <button type="button" class="btn btn-primary" id="nuevoComprobanteM">Gurdar Cambios</button>
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
                       <input type="text" hidden="" id="idncfM">  
                       <input type="text" hidden="" id="fechau" value="<?php echo $fecha ?>" name="">
                       <input type="text" hidden="" id="hora1u" value="<?php echo $hora ?>" name="">
                       <input type="text" id="idusuariou" hidden="" value="<?php echo $_SESSION["id"] ?>" >
                    
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Nombre</span>                      
                        <input type="text" name="" id="ncfMu" class="form-control">
                       
                    </div>
                </div>  
                    
                <div class="form-group">
                    <div class="input-group"> 
                        <span class="input-group-addon">Numero Inicial</span>                       
                        <input type="text" name="" id="numeroiniciou" class="form-control" inpu-sm maxlength="8">       
                    </div>
                </div> 
                    
                    
                 <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">Numero Final</span>   
                       <input type="text" name="" id="numerofinalu" class="form-control" inpu-sm maxlength="8" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
                        
                     </div>
                </div>    

                </div>                              
                <!-- Footer de la cliente  -->
                <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 <button type="button" class="btn btn-primary" id="actualizacomprobanteM">Guardar Cambios</button>
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
		$('#tabla').load('componentes/tcomprobanteMant.php');
	});
</script>

<script type="text/javascript">
  $(document).ready(function(){

    $('#nuevoComprobanteM').click(function(){                
        agregarComprobanteM()
    });

        $('#actualizacomprobanteM').click(function(){

          actualizaComprobanteM();

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