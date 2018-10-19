

<!DOCTYPE html>

<html>

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">

     <link rel="stylesheet" type="text/css" href="css/stilo.css"> 

    <?php 

        require_once "configuracion.php";    

    ?>

    <link rel="stylesheet" href="css/estilos.css">

     <link rel="stylesheet" href="css/login.css">

   

</head>

<body>

    

    	<div class="loginBox">

			<img src="img/global.png"  class="user">

			<h2>Iniciar Seccion</h2>

			<form>

				<p>Usuario</p>

				<input type="email" name="" id="inputEmail" placeholder="Nombre de Usuario" required="Nombre de usuario">

				<p>Clave</p>

				<input type="password" name="" id="inputPassword" placeholder="Clave">

                

				<input type="submit" id="login" name=""   value="Entrar">

                

                

				<a href="#">Olvidaste tu Clave</a>

			</form>

    

    

</body> 

</html>



<script type="text/javascript">

  $(document).ready(function(){

          

            $('#login').click(function(){

              realizaProceso();

            //iniciarSesion();
 
        }); 



  // $('#modalEdicion').on('shown.bs.modal', function () {

    $('#inputEmail').focus();

 //   ventaDescuento();

//}) 

   

  });

</script>

