<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->

<?php 
session_start();
include('conexion.php');

$id=$_SESSION['id'];          
$id_rol=$_SESSION['id_rol'];                       
$imagen=$_SESSION['imagen'];
$nombres=$_SESSION['nombres'];
$apellidos=$_SESSION['apellidos'];
$usuario=$_SESSION['usuario'];

$consulta=" SELECT * FROM usuarios u INNER JOIN roles r  ON u.id_rol=r.id  WHERE '$id'=u.id ";
$result=mysqli_query($conexion,$consulta);          
while($mostrar=mysqli_fetch_array($result)){
  ?> 

<?php
$perfil=$mostrar['nombre']; 
session_start();
$_SESSION['perfil']=$perfil;

 

}

  ?>	
<?php 
if ($id_rol == '1') {

  $perfil='Administrador';
  include("../equipos/principal-equipos.php");
  $perfil='Administrador';
  
  } else
  if ($id_rol == '2') {
  
    $perfil='Coordinador';
    include("../equipos/principal-equipos-sin-permiso.php");
    $perfil='Coordinador';
  
  
  } else
  if ($id_rol == '3'){
    $perfil='Tecnico';
    include("../equipos/principal-equipos-sin-permiso.php");
    
  
  }
?> 




















