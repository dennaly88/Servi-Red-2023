<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->
<?php
include('conexion.php');
$edit_id=$_POST['edit_id'];

$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));


if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE switch SET id='$edit_id',imagen='$ruta' WHERE id='$edit_id'" ;
if (mysqli_query($conexion, $sql)) {
      
      header("location:../principal.php?usu=1");

} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->







