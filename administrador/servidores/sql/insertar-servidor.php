<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<?php
include('conexion.php');



$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$seri=$_POST['seri'];
$bien_nacional=$_POST['bien_nacional'];
$ip=$_POST['ip'];
$mac_address=$_POST['mac_address'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['clave'];
$remoto=$_POST['remoto'];
$sistema_operativo=$_POST['sistema_operativo'];
$servicio=$_POST['servicio'];
$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
$method = 'aes-256-cbc';
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
$clave = base64_encode(openssl_encrypt($contraseña, $method, $sSalt, OPENSSL_RAW_DATA, $iv));
$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));

 
 

if (!$conexion) { 
      //die("EUMIR: " . mysqli_connect_error());
}

 $consulta8="SELECT ip FROM servidor where ip='$ip'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?usu=4");
      }
      else{ 

            $consulta8="SELECT bien_nacional FROM servidor where bien_nacional='$bien_nacional'";
            $resultado8=mysqli_query($conexion,$consulta8);
            $filas8=mysqli_num_rows($resultado8);
            $data8 = mysqli_fetch_assoc($resultado8); 
               if($filas8>0){
                 header("location:../principal.php?usu=4");
                 }



                 else{
     
$sql = "INSERT INTO  servidor(marca,ip,mac_address,modelo,seri,bien_nacional,imagen,usuario,clave,remoto,sistema_operativo,servicio)VALUES ('$marca','$ip','$mac_address','$modelo','$seri','$bien_nacional','$ruta', '$usuario', '$clave','$remoto','$sistema_operativo','$servicio' )";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../principal.php?usu=2");
              
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
            mysqli_close($conexion);
      }

      }

      ?>
<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->



