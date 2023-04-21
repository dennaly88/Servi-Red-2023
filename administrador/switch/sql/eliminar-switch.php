<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->
<?php
session_start();
    $id = $_GET['id'];
	include('conexion.php');
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
$sql = "DELETE FROM switch WHERE id ='$id'";
if (mysqli_query($conexion, $sql)) {  
      header("location:../principal.php?usu=3");
    
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