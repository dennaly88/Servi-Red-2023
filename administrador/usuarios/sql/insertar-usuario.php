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
$telefono=$_POST['telefono'];
$corre=$_POST['corre'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$id_rol=$_POST['id_rol'];
$estado=$_POST['estado'];
$pregunta=$_POST['pregunta'];
$cedula=$_POST['cedula'];

$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
$method = 'aes-256-cbc';
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
$clave = base64_encode(openssl_encrypt($contraseña, $method, $sSalt, OPENSSL_RAW_DATA, $iv));


$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));




if (!$conexion) {

      die("Connection failed: " . mysqli_connect_error());
}
 
 $consulta8="SELECT usuario FROM usuarios where usuario='$usuario'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      
      header("location:../principal.php?usu=4");
      }
      else{
     
            $sql = "INSERT INTO  usuarios(nombres,apellidos,telefono,corre,usuario,contraseña,id_rol,imagen,estado,pregunta,cedula) VALUES
            ('$nombres','$apellidos','$telefono','$corre','$usuario','$clave','$id_rol','$ruta','$estado','$pregunta','$cedula')";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../principal.php?usu=2");
              
            } else {
                 //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                 header("location:../principal.php?usu=7");
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
