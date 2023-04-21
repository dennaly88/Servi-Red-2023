<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->
<?php 
session_start();







include('conexion.php');



  if(!$conexion)  
{
  include ('mensajes/conexion-fallida.php');  
}
else {
       









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
   
  } else
  if ($id_rol == '2') {
  
    $perfil='Coordinador';
  
  
  } else
  if ($id_rol == '3'){
    $perfil='Tecnico';
  
  }



} 
?> 









   
  






<header class="main-header">
        <a href="#" class="logo"><b><img src="../dist/img/logo-VTV.png" alt="logo"></b></a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span>
          </a>
          <div class="navbar-custom-menu">
            
            <ul class="nav navbar-nav">
                      
            
            <li class="treeview">
          
                     <a>
                      
                        <span class="treeview">

   
                <?php 
                    echo  date("d-M-Y");
                  ?>
                <?php 

                    date_default_timezone_set("America/Caracas");
                    $hora = date('h:i a',time() - 3600*date('I'));
                    print "&nbsp;$hora&nbsp;"; 

                  ?>
                        </span>
                      </a>
              </li>
              <li>

<img src="../imagenes-general/LOGO2.png" alt="logo">
</li> 
            <li class="dropdown notifications-menu">
                     <a href="https://mail.google.com/" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;" >
                      <i class="fa fa-google"></i>
                        <span class="label label-info">4</span>
                      </a>
              </li> 
              <li class="dropdown notifications-menu">
                     <a href="https://web.whatsapp.com/" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
                      <i class="fa fa-whatsapp"></i>
                        <span class="label label-success">4</span>
                      </a>
              </li>
              <li class="dropdown notifications-menu">
                      <a href="https://vtvcorreo.vtv.gob.ve" target="_blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;">
                        <i class="fa fa-envelope-o" >
                      </i>  <span class="label label-primary">8</span></a>
              </li>
              <li class="dropdown notifications-menu">
                      <a href="https://vtvtransfer.ddns.net/index.php/login" target="_blank _blank" onclick="window.open(this.href, this.target, 'width=600,height=600'); return false;"><i class="fa fa-cloud "></i>
                      <span class="label label-danger">8</span>
                    </a>
              </li>
                <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($_SESSION["imagen"]).'" class="user-image" alt="User Image">'  ?>
                          <span class="hidden-xs"><?php echo  "    " . $perfil; ?>
                          </a>
                          <ul class="dropdown-menu">
                            




                       
                <?php include ('menu-vertical.php');  ?>


            </ul>
          </div>
        </nav>
      </header>
<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   


  danny 8
jcontreras 1
ecalzadilla  2
-------------------------------------------------------------------------------------------------->