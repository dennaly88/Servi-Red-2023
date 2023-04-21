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
$edit_nombres=$_POST['edit_nombres'];
$edit_apellidos=$_POST['edit_apellidos'];
$edit_cedula=$_POST['edit_cedula'];
$edit_corre=$_POST['edit_corre'];
$edit_telefono=$_POST['edit_telefono'];
$edit_fecha_ingreso=$_POST['edit_fecha_ingreso'];
$edit_direccion=$_POST['edit_direccion'];
$edit_division=$_POST['edit_division'];
$edit_cargo=$_POST['edit_cargo'];
if (!$conexion) {
      //die("Connection failed: " . mysqli_connect_error());
      header("location:../principal.php?usu=6");
}
$sql = "UPDATE empleados SET id='$edit_id', nombres='$edit_nombres', apellidos='$edit_apellidos',cedula='$edit_cedula',corre='$edit_corre' ,telefono='$edit_telefono', fecha_ingreso='$edit_fecha_ingreso', direccion='$edit_direccion' WHERE id='$edit_id'" ;
if (mysqli_query($conexion, $sql)) {
      header("location:../principal.php?usu=2");
} else {
      //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
      header("location:../principal.php?usu=5");
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

