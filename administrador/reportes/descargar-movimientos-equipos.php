
<?php ob_start(); ?>

<link rel="stylesheet" type="text/css" href="css/materiales.css" />
<meta charset="UTF-8">
    <title>Servi-Red | VTV</title>
    <link rel="shortcut icon" href="imagenes/dd.png">

<div>

<h4><img src="imagenes/logo1.png" width="140" height="100"><center>Sistema Integral de Servidores y Redes</a></center>

<hr>
<h4>Auditoria de Equipos</h4>
<hr><br>

<h4>Equipos</h4>
<table>
<thead>

        <tr>
                <th>Foto</th>
                <th>Id</th>
                <th>Equipo</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Serial</th>
                <th>Bien </th>
                <th>Status</th>
                <th>Responsable</th>
                <th>Fecha</th>
                
        </tr>
</thead> 
<tbody> 
                       
<?php

include('conexion.php');

$sql="SELECT * from moviientos_equipos ";
$result=mysqli_query($conexion,$sql);
$total_equipos = 0;
while($row=mysqli_fetch_array($result)){
    $total_equipos =  $total_equipos + 1;
    $imagen = $row["imagen_empleado"];

              echo 
           "<tr>
                <td><a href='#foto_".$row['imagen_empleado']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['modelo']."</td>
                <td>".$row['marca']."</td>
                <td>".$row['seri']."</td>
                <td>".$row['bien_nacional']."</td>
                <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
                <td>".$row['empleado']."</td>
                <td width='100' height='60'>".$row['fecha']."</td>
           </tr>";
       }
   ?>
                       <br>
                        </tfoot>
                  </table>
<div>



</div>

                  </center>
                  <br><hr>
                  
                  <div> <br><br>
                  <center> 
                 
                  <center> <button class="button">&nbsp;&nbsp;Total de Equipos  <?php echo  $total_equipos; ?></button> </center> 
                 <br> <br><br><br>
                 
                  
                 
                  <h5> ____________________________________________&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                  <DIV ALIGN=left><h5>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jefe de División</h5></DIV>
                  </center>

                  </div>
                 
                  
<footer>
<hr>

<h5><center><img src="imagenes/logoa.png" width="30" height="20">© Venezolana de Television Todos los Derechos Reservados- 2022</a></center>

</footer>


                <?php
$html=ob_get_clean();
//echo  $html;PARA PASAR 
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf(); 
$dompdf->loadhtml("$html");
$dompdf->render();
//$dompdf->stream("material.pdf" , array ("Attachment" => false));/*PARA VISUALIZAR*/ 
 $dompdf->stream("Auditoria_Equipos.pdf" , array ("Attachment" => true));/*PARA DESCARGAR*/ 


 
?>