<?php
		require_once "conexion.php";
		$conexion=conexion();		
		@$v1=$_POST['bus'];	
//		@$v2=$_POST['tipo_comprobante'];	

if($v1){$sql3="SELECT c1.id_comprobante, f.id_comprobante, right(f.comprobante,8) as var1, c.numero_final, c1.nombre FROM factura as f, ncfmantenimiento as c, cliente as c1 where c.id_comprobante = f.id_comprobante and c.id_comprobante = c1.id_comprobante and right(f.comprobante,8)=c.numero_final and c1.id=$v1 group by f.id desc limit 1"; 
				$resul3=mysqli_query($conexion,$sql3);					
	  				if (mysqli_num_rows($resul3) == 0){
						$sql1="SELECT id_comprobante FROM cliente where id=$v1 LIMIT 1"; //buscar el id del comprobante mediante el id del cliente
						$resul1=mysqli_query($conexion,$sql1);	
	  						while($ver1=mysqli_fetch_row($resul1)){// buscar el tipo de comprobante							
									$sql="SELECT f.id, n.serie, n.division_n, lpad(IF(right(f.comprobante,8) between c.numero_inicial and c.numero_final,right(f.comprobante,8)+1, c.numero_inicial),8,'0') as var1, c.numero_inicial, c.numero_final, n.nombre, n.id
										FROM factura as f, ncfmantenimiento as c, ncf as n where c.numero_final and f.id_comprobante = c.id_comprobante and c.id_comprobante=$ver1[0] group by f.id desc, c.id DESC LIMIT 1";
									$resul=mysqli_query($conexion,$sql);
								if (mysqli_num_rows($resul) == 0) { // comprobar si la consulta esta vacia   
		   							$sql="SELECT n.serie, n.division_n, lpad(c.numero_inicial ,8,'0') as var1, n.nombre, n.id
										FROM ncfmantenimiento as c, ncf as n where n.id = c.id_comprobante and c.id_comprobante=$ver1[0] group by c.id DESC LIMIT 1";	$resul=mysqli_query($conexion,$sql);					
			  							while($ver=mysqli_fetch_row($resul)){echo $ver[0].$ver[1].$ver[2];}
		   						} // ejecutar si es diferente de cero
							else {//if($ver1[1] >= $ver1[2]) { echo $ver1[1].$ver1[2]."No hay comprobante de este tipo";}else{ 
				 					while($ver=mysqli_fetch_row($resul)){echo $ver[1].$ver[2].$ver[3];}			
							}								
							}	
					}else{echo "No hay comprobante de este tipo";}

}else{$sql3="SELECT c1.id_comprobante, f.id_comprobante, right(f.comprobante,8) as var1, c.numero_final, c1.nombre FROM factura as f, ncfmantenimiento as c, cliente as c1 where c.id_comprobante = f.id_comprobante and c.id_comprobante = c1.id_comprobante and right(f.comprobante,8)=c.numero_final and c1.id=1 group by f.id desc limit 1"; 
						$resul3=mysqli_query($conexion,$sql3);					
	  					if (mysqli_num_rows($resul3) == 0){
							$sql="SELECT f.id, n.serie, n.division_n, lpad(IF(right(f.comprobante,8) between c.numero_inicial and c.numero_final,right(f.comprobante,8)+1, c.numero_inicial),8,'0') as var1, c.numero_inicial, c.numero_final, n.nombre, n.id
										FROM factura as f, ncfmantenimiento as c, ncf as n where c.numero_final and f.id_comprobante = c.id_comprobante and c.id_comprobante=1 group by f.id desc, c.id DESC LIMIT 1"; //vista generica de comprobante por defecto
							$resul=mysqli_query($conexion,$sql);	
							if (mysqli_num_rows($resul) == 0) { // comprobar si la consulta esta vacia   
   								$sql="SELECT n.serie, n.division_n, lpad(c.numero_inicial ,8,'0') as var1, n.nombre, n.id FROM ncfmantenimiento as c, ncf as n where n.id = c.id_comprobante and c.id_comprobante=1 group by c.id DESC LIMIT 1";	$resul=mysqli_query($conexion,$sql);				
	  								while($ver=mysqli_fetch_row($resul)){echo $ver[0].$ver[1].$ver[2];}
   							}else { 
									while($ver=mysqli_fetch_row($resul)){echo $ver[1].$ver[2].$ver[3];}			
   							}
	 					}else{echo "No hay comprobante de este tipo";}
}


// if($v2){$sql3="SELECT f.id_comprobante, right(f.comprobante,8) as var1, c.numero_final FROM factura as f, ncfmantenimiento as c where c.id_comprobante = f.id_comprobante and right(f.comprobante,8)=c.numero_final and c.id=$v2 group by f.id desc limit 1"; 
// 				$resul3=mysqli_query($conexion,$sql3);					
// 	  				if (mysqli_num_rows($resul3) == 0){							
// 									$sql="SELECT f.id, n.serie, n.division_n, n.punto_em, n.area_imp, n.tipo_compro, lpad(IF(right(f.comprobante,8) between c.numero_inicial and c.numero_final,right(f.comprobante,8)+1, c.numero_inicial),8,'0') as var1, c.numero_inicial, c.numero_final, n.nombre, n.id
// 										FROM factura as f, ncfmantenimiento as c, ncf as n where c.numero_final and f.id_comprobante = c.id_comprobante and c.id_comprobante=$v2 group by f.id desc, c.id DESC LIMIT 1";
// 									$resul=mysqli_query($conexion,$sql);
// 								if (mysqli_num_rows($resul) == 0) { // comprobar si la consulta esta vacia   
// 		   							$sql="SELECT n.serie, n.division_n, n.punto_em, n.area_imp, n.tipo_compro, lpad(c.numero_inicial ,8,'0') as var1, n.nombre, n.id
// 										FROM ncfmantenimiento as c, ncf as n where n.id = c.id_comprobante and c.id_comprobante=$v2 group by c.id DESC LIMIT 1";	$resul=mysqli_query($conexion,$sql);					
// 			  							while($ver=mysqli_fetch_row($resul)){echo $ver[0].$ver[1].$ver[2].$ver[3].$ver[4].$ver[5];}
// 		   						} // ejecutar si es diferente de cero
// 							else {//if($ver1[1] >= $ver1[2]) { echo $ver1[1].$ver1[2]."No hay comprobante de este tipo";}else{ 
// 				 					while($ver=mysqli_fetch_row($resul)){echo $ver[1].$ver[2].$ver[3].$ver[4].$ver[5].$ver[6];}			
// 							}								
// 							}	
// 					}else{echo "No hay comprobante de este tipo";}
   				?>