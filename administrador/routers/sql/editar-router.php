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
$ip=$_POST['ip'];
$mac_address=$_POST['mac_address'];
$clave_administrador=$_POST['clave_administrador'];
$ssid=$_POST['ssid'];
$clave_paso=$_POST['clave_paso'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave_administrador'];
$ubicacion=$_POST['ubicacion'];
$remoto=$_POST['remoto'];
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE router SET ip='$ip',  mac_address='$mac_address' ,clave_administrador='$clave_administrador', ssid='$ssid',clave_paso='$clave_paso', id_ubicacion='$ubicacion' , usuario='$usuario',clave_administrador='$clave', remoto='$remoto' WHERE id='$edit_id'" ;
 
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

