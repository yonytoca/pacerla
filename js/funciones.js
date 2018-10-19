

// agregar regrito de cliente  -->

		function agregardatos(nombre,apellido,direccion,telefono,tel_movil,correo,rnc,nota,rncNull,idcomprobante){



		//	bus =$('#bus').val();

			idfactura=$('#idfactura').val();

			

			cadena="nombre=" + nombre + 

					"&apellido=" + apellido +

					"&direccion=" + direccion +

					"&telefono=" + telefono + 

					"&tel_movil=" + tel_movil +

					"&correo=" + correo +

					"&rnc=" + rnc +

					"&nota=" + nota +

					"&rncNull=" + rncNull +

					"&idcomprobante=" + idcomprobante; 

 //alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/agregarCliente.php",

				data:cadena,

				success:function(r){

					if(r==1){

						if (idfactura != "") 

							{								

								location.reload();

							}

						else{

								$('#tabla').load('componentes/tabla.php');

								alertify.success("agregado con exito :)");

							}

					}else{				

					//	$('#tabla').load('componentes/tabla.php');

						alertify.error("El cliente ya existe ");

					}

				}

			});

		}

// agregar regrito de cliente  -->

		function agregardatosOrden_detalle(descripcionA,cantidadA,notaA){



		//	bus =$('#bus').val();

	//		idorden=$('#idorden').val();

			

			cadena="descripcionA=" + descripcionA + 

					"&cantidadA=" + cantidadA +

					"&notaA=" + notaA; 

 //alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/PagregarOrdenDetalle.php",

				data:cadena,

				success:function(r){

					if(r==1){


								$('#tabla').load('componentes/tabla.php');

								alertify.success("agregado con exito :)");

							

					}else{				

					//	$('#tabla').load('componentes/tabla.php');

						alertify.error("El cliente ya existe ");

					}

				}

			});

		}





// agregar regrito de usuaurio  -->

		function agregardatosUsuario(nombre,clave,correo,nota){



			cadena="nombre=" + nombre + 

					"&clave=" + clave +			

					"&correo=" + correo +			

					"&nota=" + nota;



			$.ajax({

				type:"POST",	

				url:"php/agregarDatosUsuario.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tusuario.php');

						alertify.success("agregado con exito :)");

					}else{								

						alertify.error("Usuario ya existe :( ");

					}

				}

			});

		}



// agregar regrito de usuaurio  -->

		function agregardatosPermiso(nombre,privilegio){



			cadena="nombre=" + nombre + 

					"&privilegio=" + privilegio;



			$.ajax({

				type:"POST",	

				url:"php/agregarPermiso.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tpermiso.php');

						alertify.success("agregado con exito :)");

					}else{								

						alertify.error("Usuario ya existe :( ");

					}

				}

			});

		}		

// limpiar formulario 

		// function limpiarForm(){

		// 	$('#modalNuevo')[0].reset();

		// }



// agregar regrito de producto  -->

		function agregarProducto(descripcion,iditebis){





				cadena="descripcion=" + descripcion + 

					"&iditebis=" + iditebis;
//alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/agregarProducto.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tproducto.php');

						alertify.success("agregado con exito :)");

						//limpiarForproducto();

					}else{								

						alertify.error("Producto ya esxiste :(");

					}

				}

			});

		}

// agregar registro de comprobante fiscal

		function agregarComprobante(nombre, serie, division, punto, area, tipo){

				cadena="nombre=" + nombre +

					"&serie=" + serie + 

					"&division=" + division +			

					"&punto=" + punto +	

					"&area=" + area +

					"&tipo=" + tipo;		



//alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/agregarComprobante.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tcomprobante.php');

						alertify.success("agregado con exito :)");

					}else{

					$('#tabla').load('componentes/tcomprobante.php');								

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// agregar registro de comprobante mantenimiento fiscal

		function agregarComprobanteM(){

		

				idncfM =$('#ncfM').val(); // id numero de comprobante 

		        numeroinicio =$('#numeroinicio').val(); // numero inicio

		        numerofinal =$('#numerofinal').val();  // numero final    

		        fecha =$('#fecha').val();  // fecha  

		        hora1 =$('#hora1').val();  // hora  

		        idusuario =$('#idusuario').val(); // usuario que hace el registro



				cadena="ncfM=" + idncfM +

					"&numeroinicio=" + numeroinicio + 

					"&numerofinal=" + numerofinal +

					"&fecha=" + fecha + 

					"&hora1=" + hora1 +

					"&idusuario=" + idusuario;

alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/agregarComprobanteMant.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tcomprobanteMant.php');

						alertify.success("agregado con exito :)");

					}else{

					$('#tabla').load('componentes/tcomprobanteMant.php');								

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// agregar empresa 

function agregarEmpresa(nombre,rnc,direccion,telefono1,telefono2,tel_movil,pagina_web,correo,codigo_postal,pais){



				cadena="nombre=" + nombre +

					"&rnc=" + rnc + 

					"&direccion=" + direccion +			

					"&telefono1=" + telefono1 +	

					"&telefono2=" + telefono2 +

					"&tel_movil=" + tel_movil +

					"&pagina_web=" + pagina_web  +

					"&correo=" + correo +

					"&codigo_postal=" + codigo_postal +		

					"&pais=" + pais;

//alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/agregarEmpresa.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tempresa.php');

						alertify.success("agregado con exito :)");

					}else{								

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// agregar itbis 

function agregarItbi(monto,descripcion){





			cadena="monto=" + monto + 

					"&descripcion=" + descripcion;



			$.ajax({

				type:"POST",	

				url:"php/agregarItbi.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/titbi.php');

						alertify.success("agregado con exito :)");

					}else{				

						$('#tabla').load('componentes/titbi.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}		



//agregar datos de tipo de pago 

function agregarTipopago(nombre,nota){





			cadena="nombre=" + nombre + 

					"&nota=" + nota;



			$.ajax({

				type:"POST",	

				url:"php/agregarTipopago.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/ttipopago.php');

						alertify.success("agregado con exito :)");

					}else{				

					//	$('#tabla').load('componentes/titbi.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}		

// agregar regrito de factura detalle  -->

		function agregarFactura_d(){



				      idproducto =$('#idproducto').val();

				      idfactura =$('#idfactura').val();     

				      ventau =$('#ventau').val();

				      cantidadu =$('#cantidadu').val();        

				      desc =$('#desc').val();

				      desc_can =$('#desc_can').val();

				      upd =$('#upd').val();

				      itb =$('#itb').val();



				      rdes = ((ventau*desc) / 100) * cantidadu;

		

			cadena="idfactura=" + idfactura + 

					"&idproducto=" + idproducto +									

					"&ventau=" + ventau +	

					"&cantidadu=" + cantidadu + 

					"&upd=" + upd +

					"&desc_can=" + desc_can + 

					"&itb=" + itb + 

					"&desc=" + rdes;

//alert(cadena); 

			$.ajax({

				type:"POST",	

				url:"php/agregarFactura_d.php",

				data:cadena,

				success:function(r){

					if(r==1){						 						 

						 F_id();					

						alertify.success("agregado con exito :)");

					}else{					  					

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// agregar regrito de recibo de pago detalle  -->

		function CXCagregarRecibo_d(){



				      idrecibo =$('#idrecibo').val();

				      idfacturau =$('#idfacturau').val();     

				      fechau =$('#fechau').val();

				      montou =$('#montou').val(); 

				      monto_pagado =$('#monto_pagado').val();        

				      monto_a_pagaru =$('#monto_a_pagaru').val();



		

			cadena="idrecibo=" + idrecibo + 

					"&idfactura=" + idfacturau +									

					"&fechau=" + fechau +	

					"&montou=" + montou +

					"&monto_pagado=" + monto_pagado + 

					"&monto_a_pagaru=" + monto_a_pagaru;

alert(cadena); 

			$.ajax({

				type:"POST",	

				url:"php/CXCagregarRecibo_d.php",

				data:cadena,

				success:function(r){

					if(r==1){ 											 						 

						CXC_F_clinte_id();									

						alertify.success("agregado con exito :)");

					}else{	CXC_F_clinte_id()				  					

					//	alertify.error("fallo el servidor :(");

					}

				}

			});

		}		



// agregar regrito de factura entrada en detalle detalle  -->

		function agregarFactura_d_Entrada(){



				      idproducto =$('#idproducto').val();

				      idfactura =$('#idfactura').val();     

				      cantidadu =$('#cantidadu').val();

				      costou =$('#costou').val();       



			cadena="idfactura=" + idfactura + 

					"&idproducto=" + idproducto +					

					"&cantidadu=" + cantidadu +

					"&costou=" + costou;

	

alert(cadena); 

			$.ajax({

				type:"POST",	

				url:"php/agregarFactura_d_Entrada.php",

				data:cadena,

				success:function(r){

					if(r==1){ // llamar la tabla de entrada de producto						 						 

						 F_id_entrada();					

						alertify.success("agregado con exito :)");

					}else{					  					

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}		

// actualizar los detalle de la factura 

		function agregarFactura_du(){



				      idproducto =$('#idproduc').val();

				      idfactura =$('#idfactura').val();     

				      ventau =$('#venta').val();

				      cantidadu =$('#cantidad').val();        

				      desc =$('#descuento').val();



				     rdes = ((ventau*desc) / 100) * cantidadu;



			cadena="idfactura=" + idfactura + 

					"&idproducto=" + idproducto +									

					"&ventau=" + ventau +	

					"&cantidadu=" + cantidadu + 

					"&desc=" + rdes;

alert(cadena);

			$.ajax({

				type:"POST",	

				url:"php/actualizaFactura_d.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tfactura.php');

						alertify.success("agregado con exito :)");

					}else{							 						

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}





// agregar factura  -->

		function agregarFactura(){



				      fecha =$('#fecha').val();

				      hora = document.getElementById("contenedor_reloj").innerHTML;

				      idfactura =$('#idfactura').val();

				      idcliente =$('#bus').val();

				      idempresa =$('#idempresa').val();

				      idusuario =$('#idusuario').val();  

				      total =$('#total').val();

				//      idempresa =$('#idempresa').val(); 

				      direccionentrega =$('#direccionentrega').val();

				      tipo_pago =$('#tipo_pago').val();

				  //    id_comprobanteF =$('#id_comprobanteF').val();

				  //    comprobanteF = document.getElementById("resultadoC").innerHTML;





			cadena="fecha=" + fecha + 

					"&hora=" + hora +

					"&idfactura=" + idfactura +

					"&idcliente=" + idcliente + 

					"&idempresa=" + idempresa +

					"&total=" + total +

					"&idusuario=" + idusuario +

				//	"&idempresa=" + idempresa +

					"&direccionentrega=" + direccionentrega +

					"&tipo_pago=" + tipo_pago;

				//	"&id_comprobanteF=" + id_comprobanteF +

				//	"&comprobanteF=" + comprobanteF;

//alert (cadena);

//alert(document.getElementById("contenedor_reloj").innerHTML);

			$.ajax({

				type:"POST",	

				url:"php/agregarFactura.php",

				data:cadena,

				success:function(r){

					if(r==1){																								

						alertify.success("agregado con exito :)");

					    F_imprimir();

					//	window.location.reload(true);

					}else{						

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// agregar factura  -->

		function CXCagregarRecibo(){



				      fecha =$('#fecha').val();

				      hora = document.getElementById("contenedor_reloj").innerHTML;

				 //     idfactura =$('#idrecibo').val();

				      idcliente =$('#idcliente1').val();

				 //     idempresa =$('#idempresa').val();

				      idusuario =$('#idusuario').val();  

				      total =$('#monto').val();

				//      idempresa =$('#idempresa').val(); 

				      direccionentrega =$('#direccionentrega').val();



				      mp =$('#montop').val();

			          m =$('#monto').val();

			          devuelta =$('#devuelta').val();





			cadena="fecha=" + fecha + 

					"&hora=" + hora +				

					"&idcliente=" + idcliente + 					

					"&total=" + total +

					"&idusuario=" + idusuario +

					"&mp=" + mp + 

					"&m=" + m +

					"&devuelta=" + devuelta;// +

					//"&direccionentrega=" + direccionentrega;

alert(cadena);

//alert(document.getElementById("contenedor_reloj").innerHTML);

			$.ajax({

				type:"POST",	

				url:"php/CXCagregarRecibo.php",

				data:cadena,

				success:function(r){

					if(r==1){																								

						alertify.success("agregado con exito :)");

					    F_imprimir_Recibo();

					//	window.location.reload(true);

					}else{	F_imprimir_Recibo();				

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}

// agregar factura entrada de productos  -->

		function agregarFacturaEntrada(){



				      fecha =$('#fecha').val();

				      hora = document.getElementById("contenedor_reloj").innerHTML;

				      idfactura =$('#idfactura').val();

				      idproveedor =$('#busProveedor').val();

				      idempresa =$('#idempresa').val();

				      idusuario =$('#idusuario').val();  





			cadena="fecha=" + fecha + 

					"&hora=" + hora +

					"&idfactura=" + idfactura +

					"&idproveedor=" + idproveedor + 

					"&idempresa=" + idempresa +

					"&idusuario=" + idusuario ;

//alert (cadena);

//alert(document.getElementById("contenedor_reloj").innerHTML);

			$.ajax({

				type:"POST",	

				url:"php/agregarFactura_Entrada.php",

				data:cadena,

				success:function(r){

					if(r==1){																								

						alertify.success("agregado con exito :)");

						location.reload(); // actualizar la pagina 

					

					}else{						

						alertify.error("Debes elegir producto :(");

					}

				}

			});

		}



// cargar datos de cliente en la modal

		function agregaform(datos){

			

			d=datos.split("||");



				$('#idpersona').val(d[0]);

			

			    $('#nombreu').val(d[1]);

		        $('#apellidou').val(d[2]);

		        $('#direccionu').val(d[3]);        

		        $('#telefonou').val(d[4]);

		        $('#tel_movilu').val(d[5]);

		        $('#correou').val(d[6]);

		        $('#rncu').val(d[7]);

		        $('#notau').val(d[8]);

		        //$('#idcomprobanteu').val(d[1]);	

		}





// cargar datos para el pago de la factura 

// cargar datos de cliente en la modal

		function agregaformPago(datos1){



				d=datos1.split("||");



				$('#monto').val(d[2]);			

			    $('#Descuento').val(d[1]);

		        $('#itebis').val(d[0]);

		        $('#montop').val(d[3]);        	

		        $('#devuelta').val();

		        $('#idusuario').val();



		}		

// cargar datos para el pago de la factura 

// cargar datos de cliente en la modal

		function CXCagregaformPago(datos1){



				d=datos1.split("||");



				$('#monto').val(d[2]);			

			    $('#Descuento').val(d[1]);

		        $('#itebis').val(d[0]);

		        $('#montop').val(d[3]);        	

		        $('#devuelta').val();

		        $('#idusuario').val();



		}



// agregar los datos de empresa en el modal 

function agregaformEmpresa(datos){

			

			d=datos.split("||");



				$('#idempresa').val(d[0]);

				$('#nombreu').val(d[1]);

				$('#rncu').val(d[2]);

				$('#direccionu').val(d[3]);

				$('#telefono1u').val(d[4]);

				$('#telefono2u').val(d[5]);

				$('#tel_movilu').val(d[6]);

				$('#pagina_webu').val(d[7]);

				$('#correou').val(d[8]);

				$('#codigo_postalu').val(d[9]);

				$('#paisu').val(d[10]);		

		}







// agregar los datos de itebis a forma modal

		function agregaformItbi(datos){

			

			d=datos.split("||");



				$('#iditbi').val(d[0]);

			

				$('#montou').val(d[1]);

		        $('#descripcionu').val(d[2]);

		}



//agregar los datos de tipo de pago forma modal  

function agregaformTipopago(datos){

			

			d=datos.split("||");



				$('#idtipopago').val(d[0]);			

				$('#nombreu').val(d[1]);

		        $('#notau').val(d[2]);

		}



// agregar los datos del producto 

		function agregaformProducto(datos){

			

			d=datos.split("||");



				$('#idproducto').val(d[0]);

				$('#iditebisu').val(d[7]);

			

				$('#codigo_barrau').val(d[1]);

		        $('#descripcionu').val(d[2]);

		        $('#costou').val(d[3]);        

		        $('#ventau').val(d[4]);

		        $('#ventau2').val(d[9]);

		        $('#ventau3').val(d[10]);

		        $('#cantidadu').val(d[5]);

		        $('#ubicacionu').val(d[6]);

		        $('#categoriau').val(d[7]);	

		}



// agregar los datos del producto en la factura 

		function agregaformProductoDetalle(datos){

			

			d=datos.split("||"); 



				$('#idproducto').val(d[0]);

				$('#itb').val(d[8]);

			

				$('#codigo_barrau').val(d[1]);

		        $('#descripcionu').val(d[2]);

		        $('#costou').val(d[3]);        

		        $('#ventau').val(d[4]);

		   //     $('#ventau2').val(d[9]);

		    //    $('#ventau3').val(d[10]);

		        $('#cantidadu').val(1);

		        $('#ubicacionu').val(d[6]);

		        $('#categoriau').val(d[7]);	

		}



// agregar los datos del producto a la entrada de inventario en entrada_detalle 			

		function agregaformProductoDetalleEntrada(datos){

			

			d=datos.split("||"); 



				$('#idproducto').val(d[0]);

				$('#itb').val(d[12]);

			

				$('#codigo_barrau').val(d[1]);

		        $('#descripcionu').val(d[2]);

		        $('#costou').val(d[3]);        

		        $('#ventau').val(d[4]);

		   //     $('#ventau2').val(d[9]);

		    //    $('#ventau3').val(d[10]);

		        $('#cantidadu').val(d[5]);

		        $('#ubicacionu').val(d[6]);

		        $('#categoriau').val(d[7]);	

		}				



// agregar los datod de comprobante fiscal 

// agregar los datod de comprobante fiscal 

		function agregaformComprobante(datos){

			

			d=datos.split("||");



				$('#idncf').val(d[0]);

			

				$('#nombreu').val(d[1]);

		        $('#serieu').val(d[2]);

		        $('#divisionu').val(d[3]);        

		        $('#puntou').val(d[4]);

		        $('#areau').val(d[5]);

		        $('#tipou').val(d[6]);

	

		}



// agregar los datod de comprobante fiscal 

		function agregaformComprobanteM(datos){

			

			d=datos.split("||");



				$('#idncfM').val(d[0]);



				$('#ncfMu').val(d[4]);			

				$('#numeroiniciou').val(d[1]);

		        $('#numerofinalu').val(d[2]);

		}		

// agregar producto a forma modal de factura detalle 

		function agregaformFacturaDetalle(datos){

			

			d=datos.split("||");



				$('#idproducto').val(d[0]);

				$('#codigo_barrau').val(d[1]);

		        $('#descripcionu').val(d[2]);		    

		        $('#cantidadu').val(d[4]);      

		        $('#ventau').val(d[3]);

		      //  $('#idfactura').val(d[9]);

		        $('#descu').val(d[8]);

		        $('#desc_can').val(d[11]);

		        $('#upd').val(d[10]);	

		}



// agregar factura a forma modal de recibo detalle 

		function CXCagregaformReciboDetalle(datos){

			

			d=datos.split("||");



			//	$('#idrecibo').val(d[1]);

				$('#idfacturau').val(d[2]);

				$('#fechau').val(d[5]);

		        $('#montou').val(d[7]);	

		        $('#monto_pagado').val(d[6]);		    

		        $('#monto_a_pagaru').val();      

		        // $('#ventau').val(d[3]);

		        // $('#descu').val(d[8]);

		        // $('#desc_can').val(d[11]);

		        // $('#upd').val(d[10]);	

		}

// actualizar los datos de itbis

			function actualizaItbi(){



				id=$('#iditbi').val();

			    monto =$('#montou').val();

		        descripcion =$('#descripcionu').val();

	



			cadena="id=" + id +

					"&monto=" + monto + 

					"&descripcion=" + descripcion;



				$.ajax({

				type:"POST",	

				url:"php/actualizaItbi.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/titbi.php');

						alertify.success("actualizados con exito :)");

					}else{										

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



//actualizar tipo de pago 

			function actualizaTipopago(){



				id=$('#idtipopago').val();

			    nombre =$('#nombreu').val();

		        nota =$('#notau').val();

	



			cadena="id=" + id +

					"&nombre=" + nombre + 

					"&nota=" + nota;



				$.ajax({

				type:"POST",	

				url:"php/actualizaTipopago.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/ttipopago.php');

						alertify.success("actualizados con exito :)");

					}else{										

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}







// actualizar datos del producto 

		function actualizaProducto(){



				id=$('#idproducto').val();

			//	codigo_barra=$('#codigo_barrau').val();

		        descripcion =$('#descripcionu').val();

		   //     costo =$('#costou').val();        

		  //      venta =$('#ventau').val();

		       // venta2 =$('#ventau2').val();

		       // venta3 =$('#ventau3').val();		       

		       // cantidad =$('#cantidadu').val();

		   //     ubicacion =$('#ubicacionu').val();

		   //     categoria =$('#categoriau').val();	

 				iditebis =$('#iditebisu').val();



			cadena="id=" + id +

			//		"&codigo_barra=" + codigo_barra +

					"&descripcion=" + descripcion + 

			//		"&costo=" + costo +			

			//		"&venta=" + venta +	

		//			"&venta2=" + venta2 +	

		//			"&venta3=" + venta3 +

					"&iditebis=" + iditebis;	

		//			"&cantidad=" + cantidad +	

		//			"&ubicacion=" + ubicacion +			

		//			"&categoria=" + categoria;

//alert(cadena)

				$.ajax({

				type:"POST",	

				url:"php/actualizaProducto.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tproducto.php');

						alertify.success("actualizados con exito :)");

					}else{								

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// actualizar datos de comprobantes fiscal

function actualizaComprobante(){



				id=$('#idncf').val();

				nombre=$('#nombreu').val();

		        serie =$('#serieu').val();

		        division =$('#divisionu').val();        

		   //     punto =$('#puntou').val();

		     //   area =$('#areau').val();

		       // tipo =$('#tipou').val();





			cadena="id=" + id +

					"&nombre=" + nombre +

					"&serie=" + serie +

					"&division=" + division;			

				//	"&punto=" + punto +	

				//	"&area=" + area +	

				//	"&tipo=" + tipo;							



 //alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/actualizaComprobante.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tcomprobante.php');

						alertify.success("actualizados con exito :)");

					}else{								

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}		



// actualizar datos de comprobantes fiscal mantenimiento

function actualizaComprobanteM(){



				idncfM =$('#idncfM').val(); // id numero de comprobante 

		        numeroinicio =$('#numeroiniciou').val(); // numero inicio

		        numerofinal =$('#numerofinalu').val();  // numero final    

		     //   fecha =$('#fechau').val();  // fecha  

		    //    hora1 =$('#hora1u').val();  // hora  

		     //   idusuario =$('#idusuariou').val(); // usuario que hace el registro



				cadena="idncfM=" + idncfM +

					"&numeroinicio=" + numeroinicio + 

					"&numerofinal=" + numerofinal;

// alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/actualizaComprobanteMant.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tcomprobanteMant.php');

						alertify.success("actualizados con exito :)");

					}else{								

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}		





// actualizar datos de la empresa 

function actualizaEmpresa(){



		idempresa=$('#idempresa').val();

        nombre =$('#nombreu').val();

        rnc =$('#rncu').val();

        direccion =$('#direccionu').val();

        telefono1 =$('#telefono1u').val();

        telefono2 =$('#telefono2u').val();

        tel_movil =$('#tel_movilu').val();

        pagina_web =$('#pagina_webu').val();

        correo =$('#correou').val();

        codigo_postal =$('#codigo_postalu').val();

        pais =$('#paisu').val();	



			cadena="idempresa=" + idempresa +

					"&nombre=" + nombre +

					"&rnc=" + rnc + 

					"&direccion=" + direccion +			

					"&telefono1=" + telefono1 +	

					"&telefono2=" + telefono2 +	

					"&tel_movil=" + tel_movil +

					"&pagina_web=" + pagina_web +

					"&correo=" + correo +

					"&codigo_postal=" + codigo_postal +			

					"&pais=" + pais ;



				$.ajax({

				type:"POST",	

				url:"php/actualizaEmpresa.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tempresa.php');

						alertify.success("actualizados con exito :)");

					}else{								

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}



// actualizar datos de clientes  

		function actualizadatos(){



				id=$('#idpersona').val();

			    nombre =$('#nombreu').val();

		        apellido =$('#apellidou').val();

		        direccion =$('#direccionu').val();        

		        telefono =$('#telefonou').val();

		        tel_movil =$('#tel_movilu').val();

		        correo =$('#correou').val();

		        rnc =$('#rncu').val();

		        rncNull =$('#rncReloj').val();

		        nota =$('#notau').val();	

		        idcomprobante =$('#idcomprobanteu').val();



			cadena="id=" + id +

					"&nombre=" + nombre + 

					"&apellido=" + apellido +

					"&direccion=" + direccion +

					"&telefono=" + telefono + 

					"&tel_movil=" + tel_movil +

					"&correo=" + correo +

					"&rnc=" + rnc +

					"&rncNull=" + rncNull +

					"&nota=" + nota + 

					"&idcomprobante=" + idcomprobante;

//alert(cadena);

				$.ajax({

				type:"POST",	

				url:"php/actualizaDatos.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tabla.php');

						alertify.success("actualizados con exito :)");

					}else{				

						$('#tabla').load('componentes/tabla.php');

						alertify.error("fallo el servidor :(");

					}

				}

			});

		}





// agrega form usuario 

		function agregaformUsuario(datos){

			

			d=datos.split("||");



				$('#idpersona').val(d[0]);	

			    $('#nombreu').val(d[1]);

		        $('#claveu').val(d[2]);

		        $('#correou').val(d[3]);        

		        $('#notau').val(d[4]);	

		}



		function actualizadatosUsuario(){



				id=$('#idpersona').val();

			    nombre =$('#nombreu').val();

		        clave =$('#claveu').val();

		        correo =$('#correou').val();        

		        nota =$('#notau').val();	



			cadena="id=" + id +

					"&nombre=" + nombre + 

					"&clave=" + clave +			

					"&correo=" + correo +			

					"&nota=" + nota;



				$.ajax({

				type:"POST",	

				url:"php/actualizaDatosUsuario.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tusuario.php');

						alertify.success("actualizados con exito :)");

					}else{								

						alertify.error("El Usuario ya existe  :(");

					}

				}

			});

		}



// eliminar datos del cliente 

		function eliminarCliente(id){

 

			cadena="id=" + id;

	//	alert(cadena);

	alertify.confirm('Eliminar Cliente', 'Seguro que deseas eliminar', function(){	



		$.ajax({

				type:"POST",	

				url:"php/eliminarDatosCliente.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tabla.php');

			//			alertify.success("actualizados con exito :)");

					}else{				

				//		$('#tabla').load('componentes/tabla.php');

				//		alertify.error("fallo el servidor :(");

					}

				}

			});

				alertify.success('Cliente eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});

			

		}



// eliminar datos de la tabla producto  

		function eliminarProducto(id){

 

			cadena="id=" + id;

	//	alert(cadena);

	alertify.confirm('Eliminar Producto', 'Seguro que deseas eliminar', function(){	



		$.ajax({

				type:"POST",	

				url:"php/eliminarProducto.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tproducto.php');

			//			alertify.success("actualizados con exito :)");

					}else{				

				//		$('#tabla').load('componentes/tabla.php');

				//		alertify.error("fallo el servidor :(");

					}

				}

			});

				alertify.success('Producto eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});

			

		}		



// eliminar productos de una factura en el detalle  

		function eliminarProductoF(id){

 

			cadena="id=" + id;

	//	alert(cadena);

	alertify.confirm('Eliminar Producto', 'Seguro que deseas eliminar', function(){	



		$.ajax({

				type:"POST",	

				url:"php/eliminarProductoF.php",

				data:cadena,

				success:function(r){

					if(r==1){

						F_id();

					//	$('#tabla').load('componentes/tfactura.php');

			//			alertify.success("actualizados con exito :)");

					}else{				

				//		$('#tabla').load('componentes/tabla.php');

				//		alertify.error("fallo el servidor :(");

					}

				}

			});

				alertify.success('Producto eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});

			

		}	

// eliminar productos de una factura en el detalle  

		function eliminarFacturaRecibo(datos){

 			

 			d=datos.split("||");

 

				 id=d[0];

				 Ridfactura=d[2];

				 balance=d[4];





			cadena="id=" + id +

					"&balance=" + balance +

					"&Ridfactura=" + Ridfactura ;



		alert(cadena);

	alertify.confirm('Quitar factura del Recibo', 'Seguro que deseas quitar la factura', function(){	



		$.ajax({

				type:"POST",	

				url:"php/CXCeliminarFacturaR.php",

				data:cadena,

				success:function(r){

					if(r==1){

					CXC_F_clinte_id();	

					//	F_id();

					//	$('#tabla').load('componentes/tfactura.php');

			//			alertify.success("actualizados con exito :)");

					}else{				

				//		$('#tabla').load('componentes/tabla.php');

				//		alertify.error("fallo el servidor :(");

					}

				}

			});

				alertify.success('factura eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});

			

		}			



// eliminar prosuctos de la factura entrada detalle 

		function eliminarProductoF(id){

 

			cadena="id=" + id;

	//	alert(cadena);

	alertify.confirm('Eliminar Producto', 'Seguro que deseas eliminar', function(){	



		$.ajax({

				type:"POST",	

				url:"php/eliminarProductoF_detalle.php",

				data:cadena,

				success:function(r){

					if(r==1){

						F_id_entrada();						

					//	$('#tabla').load('componentes/tfactura.php');

			//			alertify.success("actualizados con exito :)");

					}else{				

				//		$('#tabla').load('componentes/tabla.php');

				//		alertify.error("fallo el servidor :(");

					}

				}

			});

				alertify.success('Producto eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});

			

		}	



// eliminar datos del proveedor 

		function eliminarProveedor(id){

 

			cadena="id=" + id;

	//	alert(cadena);

	alertify.confirm('Eliminar Proveedor', 'Seguro que deseas eliminar registro', function(){	



		$.ajax({

				type:"POST",	

				url:"php/eliminarDatosProveedor.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tproveedor.php');

			//			alertify.success("actualizados con exito :)");

					}else{				

				//		$('#tabla').load('componentes/tabla.php');

				//		alertify.error("fallo el servidor :(");

					}

				}

			});

				alertify.success('Proveedor eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});

			

		}



// eliminar datos de factura cancelada

		function eliminarFactura(){

						id=$('#idfactura').val();

					cadena="id=" + id;				

				alertify.confirm('Cancelar Factura','Seguro que desea cancelar la factura', function(){ 



					alertify.success('Factura cancelada con exito :)') 

				$.ajax({

						type:"POST",	

						url:"php/eliminarFactura.php",

						data:cadena,

						success:function(r){		

								$('#tabla').load('componentes/tfactura.php');

						}

					});	

				}, function(){ alertify.error('"No se cancelo la factura :("')



				});

		}







		function eliminardatosUsuario(id){



			cadena="id=" + id;



alertify.confirm('Eliminar Usuario', 'Seguro que deseas eliminar', function(){		



			$.ajax({

				type:"POST",	

				url:"php/eliminarDatosUsuario.php",

				data:cadena,

				success:function(r){

					if(r==1){

						$('#tabla').load('componentes/tusuario.php');

					//	alertify.success("Usuario eliminado con exito :)");

					}else{						

					//	alertify.error("fallo el servidor :(");

					}

				}

			}); alertify.success('Usuario eliminado con exito :)') }

                , function(){ alertify.error('Cancelado')});			

		}





// buscar y mostrar cliente en la factura 

		function cliente_F(bus){



				$.ajax({

						type:"POST",	

						url:"php/buscarCliente.php",

						dataType:"html",

						data:{bus:bus},	

					})



				.done(function(resulta){

					$("#resultado").html(resulta);

				})			

		}	



//buscar cliente para la cluente por cobrar  

		function CXCcliente(){

				bus =$('#idcliente1').val();

				$.ajax({

						type:"POST",	

						url:"php/CXCbuscarCliente.php",

						dataType:"html",

						data:{bus:bus},	

					})



				.done(function(resulta){

					$("#resultado").html(resulta);

				})			

		}	





// buscar y mostrar cliente en la factura 

		function proveedor_Entrada(busP){



		//	alert(busP);	

				$.ajax({

						type:"POST",	

						url:"php/buscarProveedor.php",

						dataType:"html",

						data:{busP:busP},	

					})



				.done(function(resulta){

					$("#resultadoEntrada").html(resulta);

				})			

		}			



	function control_comprobante(bus){



				$.ajax({

						type:"POST",	

						url:"php/buscarComprobanteControl.php",

						dataType:"html",

						data:{bus:bus},	

					})

				.done(function(resulta){

					$("#resultadoControl").html(resulta);

				})			

	}	



// buscar el comprobante en la factura 

		function comprobante_F(bus){

//			tipo_comprobante =$('#bus').val();



//alert(tipo_comprobante)

				$.ajax({

						type:"POST",	

						url:"php/buscarComprobante.php",

						dataType:"html",

						data:{bus:bus},	

					})



				.done(function(resulta){

					$("#resultadoC").html(resulta);

				})

	

		}



// cargar la factura actual 		

		function F_id(){



				id=$('#idfactura').val();

				$.ajax({

						type:"POST",	

						url:"componentes/tfactura.php",

						dataType:"html",

						data:{id:id},	

					})

				.done(function(resulta){

					$('#tabla').html(resulta);

				})

		}


// cargar la listas de facturas pendiente por los cliente  		

		function CXC_F_clinte_id(){



				id=$('#idrecibo').val();

//			alert(id);	

				$.ajax({

						type:"POST",	

						url:"componentes/tcxcListaCliente1.php",

						dataType:"html",

						data:{id:id},	

					})



				.done(function(resulta){

					$('#tabla').html(resulta);

				})





		}

// cargar la listas de facturas pendiente por los cliente  al hacer click en el buscador 		

		function CXC_F_clinte_id_f(){



				id=$('#idcliente1').val();

				$.ajax({

						type:"POST",	

						url:"componentes/tcxcListaCliente1_f.php",

						dataType:"html",

						data:{id:id},	

					})



				.done(function(resulta){

					$('#tabla').html(resulta);

				})





		}



  // cargar Lista de cxc     

    function Clientecxc(){

   // 	nombre =$('#nombre').val();

       id=$('#idcliente1').val();    

        $.ajax({

            type:"POST",  

            url:"componentes/tcxcListacliente.php",

            dataType:"html",

            data:{id:id}, 

          })



        .done(function(resulta){

          $('#tabla').html(resulta);

        })



    }		



// cargar la factura actual 		

		function F_id_entrada(){



				id=$('#idfactura').val();

				$.ajax({

						type:"POST",	

						url:"componentes/tfactura_entrada.php",

						dataType:"html",

						data:{id:id},	

					})



				.done(function(resulta){

					$('#tabla').html(resulta);

				})





		}			



// calcular en vivo el cobro 

			function devuelta(){					

			         $('#montop').change(function(){                     

			            

			            mp =$('#montop').val();

			            m =$('#monto').val();

			           	d = mp - m

			           	if (d < 0){	

			           		document.getElementById('resulmp').innerHTML = 'Cantidad pagada de ser mayor';		           		

			           		$('#devuelta').val(d);		

			           	}else{

			           		document.getElementById('resulmp').innerHTML = '';

			           		$('#devuelta').val(d);

			           	}		            



			        }); 				



			}

// calcular la suma para el cobro de facturas pendientes  

			function recibo(){	



				var i;

				var  monto1 = 0;

				for (i = 0; i < 55; i++) { 

				  $('#pagototal'+[i]).click(function(){

								    if($("input:checked").is(':checked')) { //if( $(this).is(':checked') ){

								        monto1 = parseFloat(monto1) + parseFloat($(this).val());				        

								        

								        $('#montoPagado').val(monto1);



								    } else {

								        // Hacer algo si el checkbox ha sido deseleccionado

								    //    alert("El checkbox con valor " + $(this).val() + " ha sido deseleccionado");

								        monto1 = parseFloat(monto1) - parseFloat($(this).val());				        

								        

								        $('#montoPagado').val(monto1);

								    }

							});

				}

  			}





// funcion para actualizar los campos y las paginas 			

			function ActualizarCampos(){

				      var refreshId =  setInterval( function(){

					    $('#busCliente').load(this);//actualizas el div

					   }, 1000 );

			}	





	// cargar la tabla de producto en la factura 

			function agragarP_F_D(){

				$('#tabla').load('componentes/tproducto_f.php');

			}



	// cargar la tabla de facturas pendiente en CXC por clientes  para agregar 

			// function CXCagragarF_D(){

			// 	$('#tabla').load('componentes/tcxcListaCliente1_f.php');

			// }			



	// cargar tabla de producto en la entrada de producto 		

			function agragarP_F_D_entrada(){

				$('#tabla').load('componentes/tproducto_f_Entrada.php');

			}		





// reloj mostrar hora 

function reloj(){

var fecha= new Date();

var horas= fecha.getHours();

var minutos = fecha.getMinutes();

var segundos = fecha.getSeconds();

document.getElementById('conReloj').innerHTML=''+horas+':'+minutos+':'+segundos+'';

setTimeout('reloj()',1000);

}



// funcion inicio de session 

// function iniciarSesion(nombre,clave){

                      



//             cadena=Password= + clave + 

//                     "&Email=" + nombre;                                  

                 

// alert(cadena);

//             $.ajax({

//                 type:"POST",    

//                 url:"php/validarUsuario.php",

//                 data:cadena,

//                 success:function(r){

//                     if(r==1){                                                

//                        // location.href ="./rcliente.php";

//                        //  F_id();

//                     location.href ="./php/validarUsuario.php";  

//                         alertify.success("agregado con exito :)");

//                     }else{        

//                         location.href ="./php/validarUsuario.php";                              

//                         alertify.error("fallo el servidor :(");

//                     }

//                 }

//             });

//         }



//cambiar la tabla al escribir en buscar producto

		// function buscar_tabla(){		    

		//     $('#entradafilter').keypress(function () {



		//       value = $('#entradafilter').val();		   

		//       if (value !=""){		      

		//      	agragarP_F_D();	 

		//   	 }else{

		//   	 	F_id();

		//   	 }

		//     }).keypress();

		// }  



// presionar tecla enter para ejecuatr accion 

function presionarTecla(){



	$('#idfactura').keyup(function(e) {

    if(e.keyCode == 13) {

       F_id();// alert('Has presionado ENTER');

    }

});

}



// presionar tecla enter en monto a pagar y mover el cursor a el boton pagar  

function presionarTeclaEnter(){



	$('#montop').keyup(function(e) {

    if(e.keyCode == 13) {

     $('#pagar').focus();

      // F_id();// alert('Has presionado ENTER');

    }

});	

// 	$('#entradafilter').keyup(function(e) {

//     if(e.keyCode == 13) {

//        agragarP_F_D();// alert('Has presionado ENTER');

//     }

// });



}



function presionarClck(){

	$('#idimprimir').click(function() {    

       

       window.location.href="rfactura.php" 

     //  agragarP_F_D();// alert('Has presionado ENTER');

    

});



}



// llamar la tabla de producto para agrar inventario 

function presionarEClck(){

	$('#entradafilter').click(function() {    

      agragarP_F_D_entrada();// alert('Has presionado ENTER');

    

});



}



// llamar la tabla de producto para agrar facturar 

function presionarClck(){

	$('#entradafilter').click(function() {    

     agragarP_F_D();// alert('Has presionado ENTER');

    

});



}

// llamar la tabla de oden detalle 

function p_orden(){   

	$('#tabla').load('componentes/tporden.php');

  //   agragarP_F_D();// alert('Has presionado ENTER');

}

// llamar la tabla de producto para agrar facturar 

function CXCpresionarClck(){

	$('#entradafilter').click(function() {    

  // cargar la tabla de facturas pendiente en CXC por clientes para agregar 

 	CXC_F_clinte_id_f()

 //  CXCagragarF_D()

    

});



}

// llamar la tabla de producto para agrar facturar 

function CXCpresionarDobleClck(){

	$('#r').dblclick(function() {    

  // cargar la tabla de facturas pendiente en CXC por clientes para agregar 

 	CXC_F_clinte_id()



 //	CXC_F_clinte_id_f()

 //  CXCagragarF_D()

    

});



}



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



