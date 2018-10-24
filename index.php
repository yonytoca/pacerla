<?php
    
  require_once "php/conexion.php";
  $conexion=conexion();

  $v1='admin';
  $v2='123';


      $sql="SELECT * FROM usuario ";
        $resul=mysqli_query($conexion,$sql);
        $ver=mysqli_num_rows($resul); 

  if($ver==0){
      $sql="insert into usuario(nombre,clave)
            values('$v1','$v2')";    
      echo $resul=mysqli_query($conexion,$sql);
    } 

?>

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

