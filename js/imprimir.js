        

            function imprimir() {

                if (window.print) {

                    window.print();

                } else {

                    alert("La función de impresion no esta soportada por su navegador.");

                }

            }



        





	// Imprimir factura  		

		function F_imprimir(){

				idF=$('#idfactura').val();

				idC=$('#bus').val();

				idTp=$('#tipo_pago').val();				

				idTComp=$('#id_comprobanteF').val();

			//	idUsuario=$('#$idusuario').val();



		//		cadena="idF=" + idF;			

 //alert(cadena)

			// $.ajax({

			// 	type:"POST",	

			// 	url:"componentes/timprimir.php",

			// 	data:cadena,

			// 	success:function(r){ 

					if(idF){

					//  window.location.href='reservas.php?date="+$fechar+"';

					//	window.location.href='reservas.php?date='+$fechar;

						 window.location.href="./rimprimir.php?idF=" + idF + "&idC=" + idC + "&idTp=" + idTp + "&idTComp=" + idTComp;

						//$('#tabla').load('componentes/tusuario.php');

						alertify.success("Imprimir con exito :)");

					}else{						

						alertify.error("fallo el servidor :(");

						window.location.href="./rimprimir.php?idF=" + idF + "&idC=" + idC + "&idTp=" + idTp + "&idTComp=" + idTComp;

						//window.location.href="./rimprimir.php";

						// window.location="./rimprimir.php";

					}

//				} 

//			});

		}	

// Imprimir factura  		

		function O_imprimir(){

				idO=$('#idorden').val();

			//	idUsuario=$('#$idusuario').val();



		//		cadena="idF=" + idF;			

 //alert(idO)

			// $.ajax({

			// 	type:"POST",	

			// 	url:"componentes/timprimir.php",

			// 	data:cadena,

			// 	success:function(r){ 

					if(idO){

					//  window.location.href='reservas.php?date="+$fechar+"';

					//	window.location.href='reservas.php?date='+$fechar;

						 window.location.href="./Primprimir.php?idO=" + idO;

						//$('#tabla').load('componentes/tusuario.php');

					//	alertify.success("Imprimir con exito :)");

					}else{						

						alertify.error("fallo el servidor :(");

				//		window.location.href="./rimprimir.php?idF=" + idF + "&idC=" + idC + "&idTp=" + idTp + "&idTComp=" + idTComp;

						//window.location.href="./rimprimir.php";

						// window.location="./rimprimir.php";

					}

//				} 

//			});

		}			

	

		// Imprimir recibo de pago  de una o varias facturas  		

		function F_imprimir_Recibo(){

				idR=$('#idrecibo').val();

				idC=$('#idcliente1').val();

				mp =$('#montop').val();

			    m =$('#monto').val();

			    devuelta =$('#devuelta').val();	



					if(idR){



						 window.location.href="./CXCrimprimir.php?idR=" + idR + "&idC=" + idC;  + "&mp=" + mp;  + "&m=" + m + "&devuelta" + devuelta;

						//$('#tabla').load('componentes/tusuario.php');

						alertify.success("Imprimir con exito :)");

					}else{						

						alertify.error("fallo el servidor :(");

						window.location.href="./CXCrimprimir.php?idR=" + idR + "&idC=" + idC + "&mp=" + mp;  + "&m=" + m + "&devuelta" + devuelta;



					}

		}	

	