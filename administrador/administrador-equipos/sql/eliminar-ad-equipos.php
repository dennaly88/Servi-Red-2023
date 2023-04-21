<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<?php
session_start();
    $id = $_GET['id'];
	include('conexion.php');
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}


$query="SELECT * from administrador_equipos where '$id'=id";
$resultados_query=mysqli_query($conexion,$query);
while($data_query=mysqli_fetch_array($resultados_query)){
      $imagen_empleado=$data_query['imagen_empleado'];
      $empleado=$data_query['empleado'];
      $nombre=$data_query['nombre'];
      $marca=$data_query['marca'];
      $modelo=$data_query['modelo'];
      $seri=$data_query['seri'];
      $bien_nacional=$data_query['bien_nacional'];
      $responsable=$data_query['responsable'];
      $fecha=$data_query['fecha'];
      $status='Eliminado';
    
}


$sql2 = "INSERT INTO  moviientos_equipos(id_equipo,empleado,nombre,marca,modelo,seri,bien_nacional,responsable,fecha,status,imagen_empleado)
VALUES('$id','$empleado','$nombre','$marca','$modelo','$seri','$bien_nacional','$responsable','$fecha','$status','$imagen_empleado')";
if (mysqli_query($conexion, $sql2)) {
      
     
  
} else {
      echo "Error: " . $sql2 . "<br>" . mysqli_error($conexion);
}







$sql = "DELETE FROM administrador_equipos WHERE id ='$id'";
if (mysqli_query($conexion, $sql)) {  
      header("location:../principal.php?usu=3");
    
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	