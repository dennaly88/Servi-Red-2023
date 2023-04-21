
<?php ob_start(); ?>

<link rel="stylesheet" type="text/css" href="css/materiales.css" />
<meta charset="UTF-8">
    <title>Servi-Red | VTV</title>
    <link rel="shortcut icon" href="../../images/logo-vtv.ico">

<div>

<h4><img src="imagenes/logo1.png" width="140" height="100"><center>Sistema Integral de Servidores y Redes</a></center>

<hr>
<h4><A:mail>Auditoria</A:mail> de Materiales</h4>
<hr><br>

<h4>Materiales</h4>
<center><table>
<thead>

        <tr>
                <th>Foto</th>
                <th>Id</th>
                <th>Nombre</th>
                <th>Medición</th>
                <th>Cantidad Inicial</th>
                <th>Cantidad Modificar</th>
                <th>Cantidad Total</th>
                <th>Status</th>
                <th>Responsable</th>
                <th>Fecha</th>
                
        </tr>
</thead> 
<tbody> 
<?php
$id = $_GET['id'];
include('conexion.php');

$sql="SELECT * from movimientos_materiales";
$result=mysqli_query($conexion,$sql);
while($row=mysqli_fetch_array($result)){
      $imagen = $row["imagen"];
              echo 
           "<tr>
                <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['unidad']."</td>
                <td>".$row['cantidad_inicial']."</td>
                <td>".$row['cantidad_modificada']."</td>
                <td>".$row['cantidad_total']."</td>
                <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
                <td>".$row['asignado']."</td>
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
                  <div><br><br><br><br>
                  <center>   
                  <h5> _____________________________________</h5>
                  <h5>Jefe de División</h5>
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
$dompdf->stream("Auditoria de material.pdf" , array ("Attachment" => true));/*PARA DESCARGAR*/ 


 
?>





                  
								