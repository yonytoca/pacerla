// eliminar datos de factura cancelada

		function eliminarOrden(){



						id=$('#idorden').val();



					cadena="id=" + id;

				

				alertify.confirm('Cancelar orden','Seguro que desea cancelar la orden', function(){ 



					alertify.success('Orden cancelada con exito :)') 

				$.ajax({

						type:"POST",	

						url:"php/PeliminarOrden.php",

						data:cadena,

						success:function(r){		

								$('#tabla').load('componentes/Ptorden.php');

						}

					});	

				}, function(){ alertify.error('"No se cancelo la Orden :("')



				});

		}

// agregar factura  -->

		function agregarOrden(){


				      fecha =$('#fecha').val();

				      hora = document.getElementById("contenedor_reloj").innerHTML;

				      idorden =$('#idorden').val();

				      idsocio =$('#idsocio').val();

				      idparcela =$('#idparcela').val();

				      idagroquimica =$('#idagroquimica').val();  

				      idusuario =$('#idusuario').val();


			cadena="fecha=" + fecha +  

					"&hora=" + hora +

					"&idorden=" + idorden +

					"&idsocio=" + idsocio + 

					"&idparcela=" + idparcela +

					"&idagroquimica=" + idagroquimica +

					"&idusuario=" + idusuario ;


//alert (cadena);

//alert(document.getElementById("contenedor_reloj").innerHTML);

			$.ajax({

				type:"POST",	

				url:"php/PagregarOrden.php",

				data:cadena,

				success:function(r){

					if(r==1){																								

						alertify.success("agregado con exito :)");

					    O_imprimir();

					//	window.location.reload(true);

					}else{						

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}

// actualizar datos de proveedor  

		function actualizaParcela(){



				id =$('#idparcelau').val(); 

				nombre =$('#nombreu').val();

		        numero =$('#numerou').val();

		        zona =$('#zonau').val();        

		        nota =$('#notau').val();	



			cadena="numero=" + numero +

					"&nombre=" + nombre + 

					"&zona=" + zona +

					"&nota=" + nota + 

					"&id=" + id;

//alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/PactualizaParcela.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/Ptparcela.php');

						alertify.success("actualizados con exito :)");

					}else{				

						$('#tabla').load('componentes/tparcela.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}
// actualizar datos de agroquimica  

		function actualizaAgroquimica(){



				id =$('#id').val(); 

				nombre =$('#pagrou').val();

		        nota =$('#pnotau').val();

		 


			cadena="nombre=" + nombre +

					"&nota=" + nota + 

					"&id=" + id;

//alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/PactualizaAgroquimica.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/Ptagro.php');

						alertify.success("actualizados con exito :)");

					}else{				

						$('#tabla').load('componentes/tpagro.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



		// actualizar datos de proveedor  

		function actualizaSocio(){

				nombre =$('#snombreu').val(); 

				apellido =$('#sapellidou').val();

		        cedula =$('#scedulau').val();

		        direccion =$('#sdireccionu').val();        

		        idparcela =$('#sidparcelau').val();	

				idsocio =$('#idsocio').val();	



			cadena="nombre=" + nombre +

					"&apellido=" + apellido + 

					"&cedula=" + cedula +

					"&direccion=" + direccion + 

					"&idparcela=" + idparcela +

					"&idsocio=" + idsocio;

//alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/PactualizaSocio.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/Ptsocio.php');

						alertify.success("actualizados con exito :)");

					}else{				

						$('#tabla').load('componentes/tparcela.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// actualizar datos de proveedor  

		function actualizaGastos(){



			        detalle =$('#detalleu').val();

			        cantidad =$('#cantidadu').val();             

			        idparcela =$('#idparcelau').val();			

					idgasto =$('#idgasto').val();	



			cadena="detalle=" + detalle +

					"&cantidad=" + cantidad + 

					"&idparcela=" + idparcela +

					"&idgasto=" + idgasto;

//alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/PactualizaGastos.php",

				data:cadena,

				success:function(r){

					if(r==1){

					//	GastosParcela();

						$('#tabla').load('componentes/PtgastosDiario.php');

						alertify.success("actualizados con exito :)");

					}else{				

						//$('#tabla').load('componentes/tparcela.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



		// actualizar datos de proveedor  

		function actualizaSiembra(){



      

		idsiembra =$('#idsiembra').val();	

        idproducto =$('#idproductou').val();

        cantidad =$('#cantidadu').val();

        idparcela =$('#idparcelau').val(); 
        notau =$('#notau').val();      

    



			cadena="idsiembra=" + idsiembra +

					"&cantidad=" + cantidad + 

					"&idproducto=" + idproducto +
					"&notau=" + notau +

					"&idparcela=" + idparcela;

//alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/PactualizaSiembra.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/Ptsiembra.php');

						alertify.success("actualizados con exito :)");

					}else{				

					//	$('#tabla').load('componentes/tparcela.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// agregar regrito de parcela  -->

		function agregarParcela(nombre,numero,zona,nota){

		//	bus =$('#bus').val();

		//	idfactura=$('#idfactura').val();
	

			cadena="nombre=" + nombre + 
					"&numero=" + numero +
					"&zona=" + zona +
					"&nota=" + nota;
 //alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/PagregarParcela.php",

				data:cadena,

				success:function(r){

					if(r==1){

								$('#tabla').load('componentes/Ptparcela.php');

								alertify.success("agregado con exito :)");

							}else{

					//}				

					//	$('#tabla').load('componentes/tabla.php');

						alertify.error("La Parcela ya existe ");

					}

				}

			});

		}

// cargar la factura actual 		

		function O_id(){

				id=$('#idorden').val();

				$.ajax({

						type:"POST",	

						url:"componentes/ptorden.php",

						dataType:"html",

						data:{id:id},	

					})

				.done(function(resulta1){

					$('#tabla').html(resulta1);

				})
		}		

// agregar producto a forma modal de factura detalle 

		function agregaformOrdenDetalle(datos){

			

			d=datos.split("||");

				$('#idproductou').val(d[0]);

		        $('#descripcionu').val(d[2]);		    

		        $('#cantidadu').val(d[3]);      

		        $('#notaAu').val(d[4]);	

		}
// agregar regrito de parcela  -->

		function agregardatosOrden_detelle(){

		descripcionA =$('#descripcionA').val();
        cantidadA =$('#cantidadA').val();
        notaA =$('#notaA').val(); 
        idorden =$('#idorden').val(); 


			cadena="descripcionA=" + descripcionA + 

					"&cantidadA=" + cantidadA +
					"&idorden=" + idorden +

					"&notaA=" + notaA ;

 //alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/PagregarOrdenDetalle.php",

				data:cadena,

				success:function(r){

					if(r==1){

						  O_id();
						 //limpiar los campos para agregar los producto de la orden 

						limpiarOrden();  
						//		$('#tabla').load('componentes/Ptparcela.php');

								alertify.success("agregado con exito :)");

							}else{
					//	alertify.error(" El producto ya existe ");
					//	limpiarOrden();  

					}

				}

			});

		}

// agregar regrito de factura detalle  -->

		function ActulizarOrdenDetalle(){

				      idproductou =$('#idproductou').val();
				      descripcionu =$('#descripcionu').val();
				      cantidadu =$('#cantidadu').val();
				      notaAu =$('#notaAu').val(); 		

			cadena="idproductou=" + idproductou + 
					"&descripcionu=" + descripcionu +
					"&cantidadu=" + cantidadu +	
					"&notaAu=" + notaAu;

//alert(cadena); 

			$.ajax({

				type:"POST",	

				url:"php/actualizaOrdenDetalle.php",

				data:cadena,

				success:function(r){

					if(r==1){						 						 

						O_id();
						// F_id();					

						alertify.success("agregado con exito :)");

					}else{					  					

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}


// eliminar productos de una factura en el detalle  

		function eliminarProductoOrden(id){

 

			cadena="id=" + id;

	//	alert(cadena);

	alertify.confirm('Quitar producto de la orden', 'Seguro que lo desea quitar', function(){	



		$.ajax({

				type:"POST",	

				url:"php/PeliminarProductoOrden.php",

				data:cadena,

				success:function(r){

					if(r==1){

						O_id();


					}else{				


					}

				}

			});

				alertify.success('Producto eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});

			

		}	
function agregarAgroquimica(nombre,nota){

			cadena="nombre=" + nombre + 

					"&nota=" + nota;

 //alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/PagregarAgroquimica.php",

				data:cadena,

				success:function(r){

					if(r==1){

								$('#tabla').load('componentes/Ptagro.php');

								alertify.success("agregado con exito :)");

							}else{

					//}				

					//	$('#tabla').load('componentes/tabla.php');

						alertify.error("La Agroquimica  ya existe ");

					}

				}

			});

		}


// agregar regrito de proveedor  -->

		function agregarSocio(nombre,apellido, cedula, direccion, idparcela){		

			cadena="nombre=" + nombre + 
					"&apellido=" + apellido +
					"&cedula=" + cedula +
					"&idparcela=" + idparcela +
					"&direccion=" + direccion;
// alert(cadena);

			$.ajax({
				type:"POST",
				url:"php/PagregarSocio.php",
				data:cadena,

				success:function(r){

					if(r==1){

								$('#tabla').load('componentes/Ptsocio.php');

								alertify.success("agregado con exito :)");

							}else{

					//}				

					//	$('#tabla').load('componentes/tabla.php');

						alertify.error("Fallo el servidor ");

					}

				}

			});

		}		

// agregar regrito de gastos  -->

		function agregarGastos(detalle, cantidad, fecha, idparcela,hora){

			

			cadena="detalle=" + detalle + 

					"&cantidad=" + cantidad +

					"&fecha=" + fecha +

					"&idparcela=" + idparcela +

					"&hora=" + hora;

 //alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/PagregarGastos.php",

				data:cadena,

				success:function(r){

					if(r==1){

								$('#tabla').load('componentes/PtgastosDiario.php');

								alertify.success("agregado con exito :)");

							}else{

					//}				

					//	$('#tabla').load('componentes/tabla.php');

						alertify.error("Fallo el servidor ");

					}

				}

			});

		}		



// agregar regrito de proveedor  -->

		function agregarSiembra(idproducto,idparcela, cantidad, fechasiembra, nota){

			

			cadena="idproducto=" + idproducto + 

					"&idparcela=" + idparcela +

					"&cantidad=" + cantidad +
					"&nota=" + nota +

					"&fechasiembra=" + fechasiembra; 

 //alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/PagregarSiembra.php",

				data:cadena,

				success:function(r){

					if(r==1){

								$('#tabla').load('componentes/Ptsiembra.php');

								alertify.success("agregado con exito :)");

							}else{

					//}				

					//	$('#tabla').load('componentes/tabla.php');

						alertify.error("Fallo el servidor ");

					}

				}

			});

		}	



// cargar datos de cliente en la modal

		function agregaformParcela(datos){

			

			d=datos.split("||");



				$('#idparcelau').val(d[0]);			

			    $('#nombreu').val(d[1]);		       

		        $('#numerou').val(d[2]);        

		        $('#zonau').val(d[3]);

		        $('#notau').val(d[4]);	

		}
// cargar datos de agroquimica en la modal

		function agregaformAgroquimica(datos){

			

			d=datos.split("||");



				$('#id').val(d[0]);			

			    $('#pagrou').val(d[1]);		       

		        $('#pnotau').val(d[2]);        

		        

		}



// cargar datos de cliente en la modal

		function agregaformSocio(datos){

			

			d=datos.split("||");



				$('#idsocio').val(d[0]);			

			    $('#snombreu').val(d[1]);		       

		        $('#sapellidou').val(d[2]);        

		        $('#scedulau').val(d[3]);

		        $('#sdireccionu').val(d[5]);	

		        $('#sidparcelau').val(d[6], d[4]);	

		}		

// cargar datos de gasto en la modal

		function agregaformGastos(datos){

			

			d=datos.split("||");



				$('#idgasto').val(d[0]);			

			    $('#detalleu').val(d[1]);		       

		        $('#cantidadu').val(d[2]);        

		        $('#fechau').val(d[3]);

		        $('#horau').val(d[5]);	

		        $('#idparcelau').val(d[4]);	

		        $("#idparcelau").val(d[7], d[1]);		 

		}		

// cargar datos de cliente en la modal

		function agregaformSiembra(datos){

			

			d=datos.split("||");



				$('#idproductou').val(d[5],d[1]);			

			    $('#cantidadu').val(d[2]);		       

		        $('#idparcelau').val(d[6],d[3]);        

		        $('#idsiembra').val(d[0]);

		        $('#fechasiembrau').val(d[4]);	

		        $('#notau').val(d[7]);	

		       	

		}	



		// cargar la listas de gastos pendiente por parcela

		function GastosParcela(){



				id=$('#idparcela').val();

				$.ajax({

						type:"POST",	

						url:"componentes/Ptgastos1.php",

						dataType:"html",

						data:{id:id},	

					})



				.done(function(resulta){

					$('#tabla').html(resulta);

				})

		}



		// cargar la listas de gastos pendiente por parcela

		function GastosParcelaVolver(){



				id=$('#idparcela').val();

				$.ajax({

						type:"POST",	

						url:"componentes/Ptgastos.php",

						dataType:"html",

						data:{id:id},	

					})



				.done(function(resulta){

					$('#tabla').html(resulta);

				})

		}		

		function Socio_Orden(socio){

				$.ajax({

						type:"POST",	

						url:"php/PbuscarParcela.php",

						dataType:"html",

						data:{socio:socio},	

					})



				.done(function(resulta){

					$("#resultado125").html(resulta);

				})			

		}		