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
$marca=$_POST['marca']; 
$ip=$_POST['ip'];
$mac_address=$_POST['mac_address'];
$modelo=$_POST['modelo'];
$seri=$_POST['seri'];
$bien_nacional=$_POST['bien_nacional'];
$usuario=$_POST['usuario'];
$remoto=$_POST['remoto'];
$contraseña=$_POST['clave'];
$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
$method = 'aes-256-cbc';
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
$clave = base64_encode(openssl_encrypt($contraseña, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE servidor SET id='$edit_id', marca='$marca', usuario='$usuario', clave='$clave', ip='$ip', mac_address='$mac_address',modelo='$modelo', seri='$seri' ,bien_nacional='$bien_nacional',remoto='$remoto' WHERE id='$edit_id'" ;
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

