<?php session_start(); ?>

<nav class="navbar navbar-inverse" >
  <div class="container-fluid" >    
    <ul class="nav navbar-nav" >
      <li class="dropdown"><a href="./inicio.php" class="glyphicon glyphicon-home" > Inicio</a></li>
      <li class="dropdown "><a class="dropdown-toggle glyphicon glyphicon-cog" data-toggle="dropdown" href="#"> Configuracion <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-divider ">
          <li><a href="./Pparcela.php"><div id="">Parcela</div></a></li>

          <li><a href="./Psocio.php"><div id="">Socio</div></a></li>
          <li><a href="./Pagroquimica.php"><div id="">Agroquimico</div></a></li>
          <li><a href="./Psiembra.php"><div id="">Siembra</div></a></li>
          <li><a href="./Porden.php"><div id="">Orden</div></a></li>
          <li><a href="./PgastosDiario.php"><div id="">Gastos</div></a></li>

          <li><a href="./Pgastos.php"><div id="">Gastos Por Parcela</div></a></li>

          <li><a href="./rempresa.php">Crear Empresa</a></li>

          <li><a href="./ritbi.php">ITBIS</a></li>

          <li><a href="./rtipopago.php">Crear tipo de pago</a></li>

<!--           <li><a href="./rimprimir.php">Imprimir</a></li> -->

<!--           <li><a href="./php_printer/index.php">Imprimir nuevo</a></li> -->

          <li><a href="./rcomprobante.php">Comprobante</a></li>

          <li><a href="./rcomprobanteMant.php">Comprobante Mantenimiento</a></li>

          <li><a href="./rfacturaEntrada.php">Producto Mantenimiento</a></li>

<!--           <li><a href="./rpermiso.php">Crear permisos</a></li>

          <li><a href="./php/LimpiarBD.php">Limpiar BD</a></li> -->

        </ul>

      </li>



        <li class="dropdown "><a class="dropdown-toggle glyphicon glyphicon-cog" data-toggle="dropdown" href="#"> Reportes <span class="caret"></span></a>

        <ul class="dropdown-menu dropdown-divider ">

         <li><a href="" data-toggle="modal" data-target="#cuadre">Cuadre diario</a></li>     

       </ul>

        </li>



      <li><a href="./rcliente.php"><div id="Lcliente">Cliente</div></a></li>

      <li><a href="./rusuario.php"><div id="">Usuario</div></a></li>

      

      <li><a href="./rproducto.php"><div id="">Producto</div></a></li>

      <li><a href="./lcxc1.php"><div id="">CXC</div></a></li>

      <li><a href="./rfactura.php" class="glyphicon glyphicon-shopping-cart"> Factura </a></li>



      <li class="dropdown"><a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#">  <span class="caret"> </span></a>

        <ul class="dropdown-menu dropdown-divider dropdown-menu">

          <li><a href="#">Usuario..:  <?php echo $_SESSION['usuario']; $idusario = $_SESSION['id']; ?></a></li>

                <li><a href="./php/salir.php" class="glyphicon glyphicon-off"> <?php

                                                    //creamos la sesión

                                                 

                                                    //validamos si se ha hecho o no el inicio de sesión correctamente

                                                    //si no se ha hecho la sesión nos regresará a login.php

                                                    // if(!isset($_SESSION['usuario'])) 

                                                    // {

                                                    //   header('Location: index.php'); 

                                                    //   exit();

                                                    // }

                                                      //echo $_SESSION['usuario']; //  <h1>BIENVENIDO</h1>

                                                     ?>                                                     

                                                      Salir

                                                     <?php

                                                      if(!isset($_SESSION['usuario'])) 

                                                     {

                                                       header('Location: index.php'); 

                                                       exit();

                                                     }



                                                    ?></a></li>  

        </ul>

      </li>     

    </ul>

  </div>

</nav>

<input id="idusuario" hidden="" type="text" value="<?php echo $idusario; ?> "  inpu-sm placeholder="Cantidad">

<script type="text/javascript">



// var tstampActual = 0;

// var comprobar = 10000;



// function actividad() {



// var tstamp = new Date().getTime();



// if (Math.abs(tstampActual - tstamp) > comprobar) {



// document.getElementById('expirado').style.display = 'inline';



// } else {



// document.getElementById('expirado').style.display = 'none';



// }

// }



// window.addEventListener('load', function() {



// document.body.addEventListener('mousemove', function() {



// tstampActual = new Date().getTime();



// }, false);



// setInterval(actividad, comprobar);

// });





</script>

<?php @$fecha = date("d/m/Y"); ?>

<!-- Formulario para configurar el cuadre diario  -->

<div class="modal fade" id="cuadre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" data-keyboard="false">

  <div class="modal-dialog modal-sm" role="document">

    <div class="modal-content">

      <div cla modal-smss="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Cuadre diario </h4>

      </div>

      <div class="modal-body">

        <label>Desde </label>

        <input type="text" name="" id="nombre11111" class="form-control" value="<?php echo $fecha ?>" inpu-sm maxlength="30">

        <label>Hasta</label>

        <input type="text" name="" id="nota11111" class="form-control" value="<?php echo $fecha ?>" inpu-sm maxlength="30">

        <label>Usuario</label>

        <input type="text" name="" id="nota1111111" class="form-control" value="<?php echo $idusario ?>" inpu-sm maxlength="30">

      </div> 

      <div class="modal-footer">

        <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>

        <button type="button" class="btn btn-primary" data-dismiss="modal" id="nuevotipopago">

       Generar Cuadre ===> 

        </button>

        

      </div>

    </div>

  </div>

</div>



<!-- <div class="modal" id="cuadre" tabindex="-1" role="dialog">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title">Modal title</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <p>Modal body text goes here.</p>

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-primary">Save changes</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>

    </div>

  </div>

</div> -->

