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
$edit_empleado=$_POST['empleado'];
$edit_equipo=$_POST['nombre'];
$edit_marca=$_POST['marca'];
$edit_modelo=$_POST['modelo'];
$edit_serial=$_POST['serial'];
$edit_bien_nacional=$_POST['bien_nacional'];
$edit_responsable=$_POST['responsable'];
$edit_fecha=$_POST['fecha'];
$edit_status=$_POST['status'];
$imagen=$_POST['edit_imagen'];

$co="SELECT imagen FROM empleados  where nombres='$edit_empleado'";
$re=mysqli_query($conexion,$co);
while($row=mysqli_fetch_array($re)){
$imagen_empleado= '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
}
if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE administrador_equipos SET id='$edit_id',imagen_empleado='$imagen_empleado',empleado='$edit_empleado',status='$edit_status',modelo='$edit_modelo' WHERE id='$edit_id'" ;


if (mysqli_query($conexion, $sql)) {
     
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}



$sql2 = "INSERT INTO  moviientos_equipos(id_equipo,empleado,nombre,marca,modelo,seri,bien_nacional,responsable,fecha,status,imagen_empleado)
VALUES('$edit_id','$edit_empleado','$edit_equipo','$edit_marca','$edit_modelo','$edit_serial','$edit_bien_nacional','$edit_responsable',
'$edit_fecha','$edit_status','$imagen_empleado')";

if (mysqli_query($conexion, $sql2)) {
      
      header("location:../principal.php?usu=6");
  
} else {
      echo "Error: " . $sql2 . "<br>" . mysqli_error($conexion);
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

