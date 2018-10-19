// mostrar hora actual en la factura 

function HoraActual(){
var esteMomento = new Date();
var hora = esteMomento.getHours();
if(hora < 10) hora = '0' + hora;
var minuto = esteMomento.getMinutes();
if(minuto < 10) minuto = '0' + minuto;
var segundo = esteMomento.getSeconds();
if(segundo < 10) segundo = '0' + segundo;
HoraCompleta= hora + " : " + minuto + " : " + segundo;
document.getElementById('contenedor_reloj').innerHTML = HoraCompleta;
setTimeout("HoraActual()",1000)
} 

// limpiar modal cliente y poner foco

    function limpiarMcliente(){

          $('#modalNuevo').on('shown.bs.modal', function () {   
              $('#nombre').focus();
              $('#nombre').val("");
              $('#apellido').val("");
              $('#direccion').val("");
              $('#telefono').val("");
              $('#tel_movil').val("");
              $('#correo').val("");
              $('#rnc').val("");
              $('#nota').val("");
          }) 
      }

 // limpiar modal de la parcela y poner focus 

     function limpiarMparcela(){
          $('#modalNuevo').on('shown.bs.modal', function () {   
              $('#pnombre').focus();
              $('#pnombre').val("");
              $('#pnumero').val("");
              $('#pzona').val("");              
              $('#pnota').val("");
          }) 
      }     

    function ColorcarFocus(){

          $('#modalEdicion').on('shown.bs.modal', function () {   
              $('#ventau').focus();              
          }) 
      }

function limpiarOrden(){ 
              $('#descripcionA').focus();
              $('#cantidadA').val("");
              $('#notaA').val("");
              $('#descripcionA').val("");
      } 


    

// limpiar modal Producto y poner foco

    function limpiarMproducto(){

          $('#modalNuevo').on('shown.bs.modal', function () {   
              $('#codigo_barra').focus();
              $('#codigo_barra').val("");
              $('#descripcion').val("");
              $('#costo').val("");
              $('#venta').val("");
           //   $('#iditebis').val("");
              $('#cantidad').val("");
              $('#ubicacion').val("");
              $('#categoria').val("");
          }) 
      }



// colocar el focus en el modal edicion de creacion de producto
    function editarMproducto(){
          $('#modalEdicion').on('shown.bs.modal', function () {   
              $('#codigo_barrau').focus();              
          }) 
      } 

// colocar el focus en el modal edicion de creacion de producto
    function socioNuevo(){
          $('#modalNuevo').on('shown.bs.modal', function () {   
              $('#snombre').focus();              
          }) 
      }  

// colocar el focus en el modal edicion de creacion de producto
    function siembraNuevo(){
          $('#modalEdicion').on('shown.bs.modal', function () {   
              $('#cantidadu').focus();              
          }) 
      }  

// colocar el focus en el modal edicion de creacion de producto
    function socioEdicion(){
          $('#modalEdicion').on('shown.bs.modal', function () {   
              $('#snombreu').focus();              
          }) 
      }                

// colocar el focus en el modal edicion de creacion de producto
    function parcelaEdicion(){
          $('#modalEdicion').on('shown.bs.modal', function () {   
              $('#nombreu').focus();              
          }) 
      } 
// colocar el focus en el modal edicion de creacion de producto
    function agroquimicaNuevo(){
          $('#modalNuevo').on('shown.bs.modal', function () {   
              $('#pagro').focus();              
          }) 
      }  
// colocar el focus en el modal edicion de creacion de producto
    function agroquimicaEdicion(){
          $('#modalEdicion').on('shown.bs.modal', function () {   
              $('#pagrou').focus();              
          }) 
      }                      


// colocar el focus en las tablas de busquedas para los filtros 

    function FocusMfiltros(){ 
              $('#entradafilter').focus();                        
      }      