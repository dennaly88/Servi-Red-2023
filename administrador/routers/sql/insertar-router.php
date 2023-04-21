<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->
<?php

include('conexion.php');

$ip=$_POST['ip'];
$mac_address=$_POST['mac_address'];
$clave_administrador=$_POST['clave_administrador'];
$ssid=$_POST['ssid'];
$clave_paso=$_POST['clave_paso'];
$ubicacion=$_POST['ubicacion'];
$usuario=$_POST['usuario'];
$remoto=$_POST['remoto'];

$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));


$check = getimagesize($_FILES["ubicacion-geografica"]["tmp_name"]);
$image = $_FILES['ubicacion-geografica']['tmp_name'];
$ubi = addslashes(file_get_contents($image));




if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
}

 $consulta8="SELECT ip FROM router where ip='$ip'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?usu=4");
      }
      else{
     
            $sql = "INSERT INTO  router(ip,mac_address,clave_administrador,ssid,clave_paso,id_ubicacion,imagen,ubicacion_geografica,usuario,remoto) VALUES
             ('$ip','$mac_address','$clave_administrador','$ssid','$clave_paso','$ubicacion','$ruta','$ubi','$usuario','$remoto')";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../principal.php?usu=2");
              
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
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