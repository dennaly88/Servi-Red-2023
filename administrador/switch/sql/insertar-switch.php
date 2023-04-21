<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->
<?php

include('conexion.php');

$ip=$_POST['ip'];
$mac_address=$_POST['mac_address'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$ubicacion=$_POST['ubicacion'];
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
$consulta8="SELECT ip FROM switch where ip='$ip'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?usu=4");
      }
      else{

            $sql = "INSERT INTO  switch(ip,mac_address,usuario,clave,id_ubicacion,imagen,ubicacion_geografica,remoto) 
            VALUES ('$ip','$mac_address','$usuario','$clave','$ubicacion','$ruta','$ubi','$remoto')";
            if (mysqli_query($conexion, $sql)) {
                  
                  header("location:../principal.php?usu=2");
              
            } else {
                  echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }
            mysqli_close($conexion);
      
      } 
      ?>
<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->