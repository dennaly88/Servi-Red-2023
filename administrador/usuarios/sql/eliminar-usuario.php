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
      //die("Connection failed: " . mysqli_connect_error());
      header("location:../principal.php?usu=6");
}
$sql = "DELETE FROM usuarios WHERE id ='$id'";
if (mysqli_query($conexion, $sql)) {  
      header("location:../principal.php?usu=3");
    
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      header("location:../principal.php?usu=6");
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