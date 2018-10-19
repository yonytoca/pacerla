//Solo permite introducir numeros.
function soloNumeros(e){
    tecla = (document.all) ? e.keyCode : e.which;

    //Tecla de retroceso para borrar, siempre la permite
    if (tecla==8){
        return true;
    }        
    // Patron de entrada, en este caso solo acepta numeros
    patron =/[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


//    Solo mayuculas 
    $("#inputUpCase").keydown(function(event) {
            // Allow only backspace and delete
            if ( event.keyCode == 46 || event.keyCode == 8 ) {
                // let it happen, dont do anything
            }
            else {
                // Ensure that it is not a mayus and stop the keypress
                if (event.keyCode < 65 || event.keyCode > 90 ) {
                    event.preventDefault(); 
                }   
            }
        });

//    Solo mayuculas 

    $("#inputUpCase").keydown(function(event) {

            // Allow only backspace and delete

            if ( event.keyCode == 46 || event.keyCode == 8 ) {

                // let it happen, dont do anything

            }

            else {

                // Ensure that it is not a mayus and stop the keypress

                if (event.keyCode < 65 || event.keyCode > 90 ) {

                    event.preventDefault(); 

                }   

            }

        });



// validar que laventa sea mayor al costo

      function ventaCosto(){



           $("#venta").blur(function(){

          // $(this).css("background-color", "#FFFFCC");    

                 

                  costo = parseInt($('#costo').val());

                  venta = parseInt($('#venta').val());                  



                  if (venta < costo){ 

                    document.getElementById('resulP').innerHTML = 'Venta debe ser Mayor';                  

                    $('#venta').focus();

                 //   $('#devuelta').val(d);    

                  }else{

                    document.getElementById('resulP').innerHTML = '' ;

                  //  $('#devuelta').val(d);

                  } 

                  



              }); 

      }



// validadr solo un tipo de descuento a la vez

            function ventaDescuento(){          



              desc = parseInt($('#desc').val());

              desc1 = parseInt($('#desc_can').val());



             $("#desc").blur(function(){

            // $(this).css("background-color", "#FFFFCC");                 

                if (desc != 0){ 

                    $('#desc_can').val(0);

                   //  document.getElementById("desc_can")val(0);            

                  }

             });

             $("#desc_can").blur(function(){

            // $(this).css("background-color", "#FFFFCC");                 

                if (desc1 != 0){ 

                    $('#desc').val(0);

                   //  document.getElementById("desc_can")val(0);            

                  }

             });

      }

     





// 

    function Principal(){

        var flag1 = true;

        $(document).on('keyup','[id=telefono]',function(e){

            if($(this).val().length == 3 && flag1) {

                $(this).val($(this).val()+"-");

                flag1 = true;

            }

            else if($(this).val().length == 7 && flag1) {

                $(this).val($(this).val()+"-");

                flag1 = false;

            }

        });

      }



// funcion para validar el correo

function caracteresCorreoValido(email, div){

    console.log(email);

    var email = $(email).val();

    var caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);



    if (caract.test(email) == false){

        $(div).hide().removeClass('hide').slideDown('fast');

        document.getElementById('oculto').style.display = 'none'; 

        return false;

    }else{

        document.getElementById('oculto').style.display = 'block'; 

        $(div).hide().addClass('hide').slideDown('slow');



        return true;

    }

}



// funcion que habilita el boton guardar 

function validarCliente(){      

      

      nombre = document.getElementById("nombre").value;

      apellido = document.getElementById("apellido").value;

      telefono = document.getElementById("telefono").value;

      correo = document.getElementById("email").value;

      rnc = document.getElementById("rnc").value;



         if( correo !="" && nombre != "" && apellido !="" && telefono !="" && rnc !="" ) {

             // mostrar el div que contiene el boton de guardar 

            document.getElementById('oculto').style.display = 'block';      

          }else{

            // ocultar el div que contiene el boton de guargar

            document.getElementById('oculto').style.display = 'none';  

          }

}            



// validar que los campos de cliente este llenos los que son obligaroeios 

        function ValidarformCliente(){



          $("#nombre").blur(function(){

           $(this).css("background-color", "#FFFFCC");

            validarCliente()

                

          });

            $("#apellido").blur(function(){

             $(this).css("background-color", "#FFFFCC");

              validarCliente()



          });

            $("#telefono").blur(function(){    

              $(this).css("background-color", "#FFFFCC");

        //      Principal()

             //  validarCliente() 

           });

            $("#email").blur(function(){            

                if (caracteresCorreoValido($(this).val(), '#xmail')){

                  $(this).css("background-color", "#FFFFCC");          

               //   validarCliente()

                }else{

                  //$('#email').focus();

                }



            });

            $("#rnc").blur(function(){  

            $(this).css("background-color", "#FFFFCC");           

              validarCliente()

            });



          $("#nota").blur(function(){

            $(this).css("background-color", "#FFFFCC");

           // validarCliente()

          });



        }



// validar los datos de usuarios que sean obligatoeios 

        function ValidarformUsuario(){



          $("#nombre").blur(function(){

           $(this).css("background-color", "#FFFFCC");

            validarCliente()

                

          });

            $("#apellido").blur(function(){

             $(this).css("background-color", "#FFFFCC");

              validarCliente()



          });

            $("#telefono").blur(function(){    

              $(this).css("background-color", "#FFFFCC");

               validarCliente() 

           });

            $("#email").blur(function(){            

                if (caracteresCorreoValido($(this).val(), '#xmail')){

                  $(this).css("background-color", "#FFFFCC");          

                  validarCliente()

                }else{

                  $('#email').focus();

                }



            });

            $("#rnc").blur(function(){            

              validarCliente()

            });



          $("#nota").blur(function(){

            $(this).css("background-color", "#FFFFCC");

            validarCliente()

          });



        }

