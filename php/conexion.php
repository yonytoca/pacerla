<?php 
// $link = mysql_connect('localhost','',''); 
// $lista_db = mysql_list_dbs($link); 

// $cnt = mysql_num_rows($lista_db); 

// $i=0; 
// $j=0; 
// while ($i<$cnt) 
// { 
//    $a=mysql_db_name($lista_db, $i); 
    
//        $i++; 
//    if ($a=="chevrolet") 
//    { 
//      $j=1; 
//    } 
// } 

// if ($j=="0") 
// { 
//       mysql_query("create database chevrolet", $link); 
//       echo "La base de datos fue creada con exito"; 
       
// } 
// else 
// { 
//       echo "La base de datos ya existe coloquele otro nombre"; 
// }         


?>
<?php

// conexion local

	 function conexion()

	 {
	 	$servidor ="localhost";
	 	$usuario ="root";	
	 	$password = "";
	 	$bd = "parcela";
	 	$conexion=mysqli_connect($servidor,$usuario,$password,$bd);
	 	return $conexion;
	 }

//conexion remota 



// function conexion()

// 	{

// 		$servidor ="sql300.260mb.net";

// 		$usuario ="n260m_15587672";		

// 		$password = "123eyv";

// 		$bd = "n260m_15587672_futuro22";

// 		$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

// 		return $conexion;

// 	}

?>