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
$edit_empleado=$_POST['edit_empleado'];
$edit_equipo=$_POST['edit_equipo'];
$edit_marca=$_POST['edit_marca'];
$edit_modelo=$_POST['edit_modelo'];
$edit_serial=$_POST['edit_serial'];
$edit_bien_nacional=$_POST['edit_bien_nacional'];
$edit_responsable=$_POST['edit_responsable'];
$edit_fecha=$_POST['edit_fecha'];
$edit_status=$_POST['edit_status'];
$imagen=$_POST['edit_imagen'];

if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}
 
$sql = "UPDATE administrador_equipos SET id='$edit_id',nombre='$edit_equipo', bien_nacional='$edit_bien_nacional',marca='$edit_marca' , status='$edit_status',modelo='$edit_modelo',seri='$edit_serial' WHERE id='$edit_id'" ;


if (mysqli_query($conexion, $sql)) {
     
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}



$cons="SELECT id FROM administrador_equipos  where empleado='$empleado'";
$resc=mysqli_query($conexion,$cons);
while($row=mysqli_fetch_array($resc)){
$id=$row['id'];
         
                     }

$sql2 = "INSERT INTO  moviientos_equipos(id_equipo,empleado,nombre,marca,modelo,seri,bien_nacional,responsable,fecha,status,imagen_empleado)
VALUES('$edit_id','$edit_empleado','$edit_equipo','$edit_marca','$edit_modelo','$edit_serial','$edit_bien_nacional','$edit_responsable',
'$edit_fecha','$edit_status','$imagen')";

if (mysqli_query($conexion, $sql2)) {
      
      header("location:../principal.php?usu=2");
  
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

