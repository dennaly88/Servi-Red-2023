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


if ($perfil == 'Administrador') {

    include("menus/administrador.php");
     
} else
if ($perfil == 'Coordinador') {



    include("menus/coordinador.php");
} else
if ($perfil == 'Tecnico'){


  include("menus/basico.php");

}

  ?>	
<?php 
}
?> 
 <!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->