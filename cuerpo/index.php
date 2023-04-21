<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   


---------------------------------------------------------------------------------->
<link rel="shortcut icon" href="images/favicon-nuevo.png">

<script type="text/javascript">
var t;
window.onload=resetTimer;
document.onkeypress=resetTimer;
document.onmousemove
function logout()
{
  var opcion = confirm("Deseas extender la sesión.");
  if (opcion == true) {
    location.href='index.php';
	} else {
    
    location.href='../login/';
	}
}
function resetTimer()
{
clearTimeout(t);
t=setTimeout(logout,100000)

}
</script>
<?php

    session_start();
    if(!isset($_SESSION['usuario'])) 
    {
        header('Location:../login/'); 
        exit();
     }

?> 
<!doctype html>
<html lang="en-gb" class="no-js">
  <head>
    <meta charset="utf-8">
	<title>Servi-Red | VTV</title>
    <meta name="author" content="Danny Jimenez">
    <meta name="keywords" content=""> 
    <meta name="description" content="">		
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link href="css/style.css" type="text/css"  rel="stylesheet"/>  
	<body  data-spy="scroll" data-target="#main-menu">
        <link rel="shortcut icon" href="images/favicon-nuevo.png">
<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->  
        <body  data-spy="scroll" data-target="#main-menu">    
                    <?php include ('principal-menu.php');  ?> 
                    <?php include ('principal/carusel.php');  ?>
                    <?php include ('principal/servi-red.php');  ?>
                    <?php include ('principal/estadisticas.php');?>
                    <?php include ('principal/servicios.php');?>
                    <?php include ('principal/historia.php');?>
                    <?php include ('principal/servidores-redes.php');?>
                    <?php include ('principal/equipo.php');?>
                    <?php include ('principal/navegacion.php');?>
                    <?php include ('principal/informacion.php');?>
                    <?php include ('principal/proveedores.php');?>
                    <?php include ('principal/footer.php');?> 
      
<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->  
<a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
    
 </body>
</html>

<!-------------------------------------------------------------------------------   
PAGINA REALIZADA POR : DANNY JOSE JIMENEZ GUTIERREZ
COORDINADOR DE DESRROLLO
VENEZOLANA DE TELEVISION 
CANAL 8 
0416-611-38-45   
---------------------------------------------------------------------------------->