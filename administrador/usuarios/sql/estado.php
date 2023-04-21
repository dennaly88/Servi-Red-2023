<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<?php

include('conexion.php');
$edit_id=$_POST['edit_id'];
$estado=$_POST['estado'];
 
if (!$conexion) {
      //die("Connection failed: " . mysqli_connect_error());
      header("location:../principal.php?usu=6");
}
 
$sql = "UPDATE usuarios SET id='$edit_id',estado='$estado' WHERE id='$edit_id'" ;

if (mysqli_query($conexion, $sql)) {
      
      
      header("location:../principal.php?usu=5");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      //header("location:../principal.php?usu=7");
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
















