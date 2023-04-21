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
$id_categoria=$_POST['id_categoria'];

if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE marcas SET id='$edit_id',id_categoria='$id_categoria' WHERE id='$edit_id'" ;
if (mysqli_query($conexion, $sql)) {
    
    header("location:../principal.php?usu=1");

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