<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->


<?php

include('conexion.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$cedula=$_POST['cedula'];
$corre=$_POST['corre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$gerencia=$_POST['gerencia'];
$division=$_POST['division'];
$cargo=$_POST['cargo'];
$fecha_ingreso=$_POST['fecha_ingreso'];

$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));






if (!$conexion) {
      //die("Connection failed: " . mysqli_connect_error());
      header("location:../empleado-duplicado.php?usu=6");
}
$consulta8="SELECT nombres FROM empleados where nombres='$nombres'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){ 
            header("location:../empleado-duplicado.php?usu=4");
      }
      else{
            
        $sql = "INSERT INTO  empleados(imagen,nombres, apellidos, cedula, corre, telefono,direccion,division,cargo,fecha_ingreso,gerencia)VALUES
        ('$ruta','$nombres','$apellidos','$cedula','$corre','$telefono','$direccion','$division','$cargo','$fecha_ingreso','$gerencia')"; 
            if (mysqli_query($conexion, $sql)) {
                  header("location:../principal.php?usu=1");
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                  //header("location:../principal.php?usu=5");
            }
            mysqli_close($conexion);



      }







 

      ?>
<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->