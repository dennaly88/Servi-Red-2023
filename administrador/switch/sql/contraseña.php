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
$clave=$_POST['clave'];
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE switch SET id='$edit_id',clave='$clave' WHERE id='$edit_id'" ;

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















