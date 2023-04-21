<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<?php

include('conexion.php');
$edit_empleado=$_POST['empleado'];
$equipo=$_POST['equipo'];
$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$seri=$_POST['seri'];
$bien_nacional=$_POST['bien_nacional'];
$responsable=$_POST['responsable'];
$fecha=$_POST['fecha'];
$status=$_POST['status'];
$imagen=$_POST['imagen'];
  

if (!$conexion) {
      die("Connection failed: " . mysqli_connect_error());
               }

$co="SELECT imagen FROM empleados  where nombres='$edit_empleado'";
$re=mysqli_query($conexion,$co);
while($row=mysqli_fetch_array($re)){


$imagen_empleado= '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
   
                    }


            
 $consulta8="SELECT bien_nacional FROM administrador_equipos where bien_nacional='$bien_nacional'";
 $resultado8=mysqli_query($conexion,$consulta8);
 $filas8=mysqli_num_rows($resultado8);
 $data8 = mysqli_fetch_assoc($resultado8); 
    if($filas8>0){
      header("location:../principal.php?usu=4");
      }
      else{ 
     
$sql = "INSERT INTO  administrador_equipos(empleado,nombre,marca,modelo,seri,bien_nacional,responsable,fecha,status,imagen_empleado)
VALUES('$edit_empleado','$equipo','$marca','$modelo','$seri','$bien_nacional','$responsable','$fecha','$status','$imagen_empleado')";
            
            
            if (mysqli_query($conexion, $sql)) {
                  
                 
       
            } else {
                         echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            }

            $cons="SELECT id FROM administrador_equipos  where empleado='$edit_empleado'";
            $resc=mysqli_query($conexion,$cons);
            while($row=mysqli_fetch_array($resc)){
            $id=$row['id'];
                     
                                 }

            $sql2 = "INSERT INTO  moviientos_equipos(id_equipo,empleado,nombre,marca,modelo,seri,bien_nacional,responsable,fecha,status,imagen_empleado)
            VALUES('$id','$edit_empleado','$equipo','$marca','$modelo','$seri','$bien_nacional','$responsable','$fecha','$status','$imagen_empleado')";
            
            if (mysqli_query($conexion, $sql2)) {
                  
                  header("location:../principal.php?usu=2");
              
            } else {
                  echo "Error: " . $sql2 . "<br>" . mysqli_error($conexion);
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