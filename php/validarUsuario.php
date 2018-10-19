<?php 



	require_once "conexion.php";

		$conexion=conexion();



/****************************************

**establecemos conexion con el servidor.

// **nombre del servidor: localhost.

// **Nombre de usuario: root.

// **Contraseña de usuario: root.

// **Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/

// mysql_connect('localhost','root','root')or die ('Ha fallado la conexión: '.mysql_error());



// /*Luego hacemos la conexión a la base de datos. 

// **De igual manera mandamos un msj si hay algun error*/

// mysql_select_db('db_blog')or die ('Error al seleccionar la Base de Datos: '.mysql_error());

 

/*caturamos nuestros datos que fueron enviados desde el formulario mediante el metodo POST

**y los almacenamos en variables.*/



echo $usuario = $_POST['inputEmail'];   

echo $password = $_POST['inputPassword'];



/*Consulta de mysql con la que indicamos que necesitamos que seleccione

**solo los campos que tenga como nombre_administrador el que el formulario

**le ha enviado*/



 $sql = ("SELECT * FROM usuario WHERE nombre = '$usuario'");



$result=mysqli_query($conexion,$sql);

       

//Validamos si el nombre del administrador existe en la base de datos o es correcto

if($row = mysqli_fetch_array($result))

{     

// //Si el usuario es correcto ahora validamos su contraseña

  if($row["clave"] == $password)

  {

  //  while($vere=mysqli_fetch_row($result)){   $id = $vere[0]; }

  //Creamos sesión

  session_start();  

  //Almacenamos el nombre de usuario en una variable de sesión usuario

  $_SESSION['usuario'] = $usuario;  

  $_SESSION['clave'] = $password;

  $_SESSION['id'] = $row["id"];  

  //Redireccionamos a la pagina: index.php

   header("Location: ../Pgastos.php");  

 }

 else

 {

  //En caso que la contraseña sea incorrecta enviamos un msj y redireccionamos a login.php

  ?>

   <script languaje="javascript">

    alert("Contraseña Incorrecta "&<?php echo $password; ?>);

    location.href = "../index.php";

   </script>

  <?php

            

 }

 }

 else

 // en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a login.php

 {?>  

  <script languaje="javascript">

   alert("El nombre de usuario es incorrecto!");

   location.href = "../index.php";

  </script> 

<?php        

 }



//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta

mysqli_free_result($result);



/*Mysql_close() se usa para cerrar la conexión a la Base de datos y es 

**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de

**programar una aplicación que tendrá muchas visitas ;) .*/

//mysqli_close();

	             

		                   	

?>	