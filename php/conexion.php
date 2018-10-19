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