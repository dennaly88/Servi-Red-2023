<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<?php
                    session_start();
                    $usuario=$_SESSION['usuario'] ;
                    $perfil=$_SESSION['perfil'] ;
                    $imagen=$_SESSION['imagen'];             
 ?>
<script type="text/javascript">
var t;
window.onload=resetTimer;
document.onkeypress=resetTimer;
document.onmousemove
function logout()
{

  var opcion = confirm("Deseas extender la sesión.");
  if (opcion == true) {
    location.href='principal.php';
	} else {
   location.href='../../login/seguridad/destruir-sesion.php';
	}
}
function resetTimer()
{
clearTimeout(t);
t=setTimeout(logout,60000)

}

</script>

<?php

    session_start();
    if(!isset($_SESSION['usuario'])) 
    {
        header('Location:../../login/index.php'); 
        exit();
     }

?> 
       
       



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Servi-Red | VTV</title>
    <link rel="shortcut icon" href="../../images/logo-vtv.ico">
  </head>
  <body class="skin-blue">   
        <?php require ("librerias.php");?>
        <?php include ('../paginas/menu-horizontal.php');  ?> 
       <div class="wrapper">
       <div class="content-wrapper"> 
              <?php include ('../paginas/principal-menu.php');  ?>
              <?php include ('../paginas/cuerpo-header.php');  ?>
              <?php include ('principal-movimiento.php');  ?> 
               



              <?php
$usu=$_GET["usu"];
switch ($usu) { 
    case 1:    
      require ("mensajes/usuario-editado.php"); 
        break;
          case 2:
            require ("mensajes/usuario-agregado.php"); 
              break;
                  case 3: 
                    require ("mensajes/usuario-eliminado.php"); 
                          break;   
                          
                          case 4: 
                            require ("mensajes/usuario-duplicado.php"); 
                                  break; 
}
  
?>      
    </div>
    </div>
  </body>
</html>
<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	