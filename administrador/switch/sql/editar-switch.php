<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESARROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->

<?php
include('conexion.php');
$edit_id=$_POST['edit_id'];
$ip=$_POST['ip'];
$mac_address=$_POST['mac_address'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$ubicacion=$_POST['ubicacion'];
$remoto=$_POST['remoto'];
$clave=$_POST['clave'];
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
  
$sql = "UPDATE switch SET ip='$ip',  mac_address='$mac_address', ip='$ip', usuario='$usuario',clave='$clave',clave='$clave', id_ubicacion='$ubicacion', remoto='$remoto' WHERE id='$edit_id'" ;
 
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

