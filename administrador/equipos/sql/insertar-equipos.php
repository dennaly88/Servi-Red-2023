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

$check = getimagesize($_FILES["imagen"]["tmp_name"]);
$image = $_FILES['imagen']['tmp_name'];
$ruta = addslashes(file_get_contents($image));



if (!$conexion) {
      
      header("location:../principal.php?usu=5");
}
 $consulta8="SELECT nombre FROM equipos where nombre='$nombres'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?usu=4");
      }
      else{
              
            $sql = "INSERT INTO  equipos(nombre,imagen) VALUES ('$nombres','$ruta')";
            if (mysqli_query($conexion, $sql)) {
                  header("location:../principal.php?usu=1");
            } else {
                  //echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                  header("location:../principal.php?usu=6");
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