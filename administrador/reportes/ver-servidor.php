
<?php ob_start(); ?>

    <link rel="stylesheet" type="text/css" href="css/materiales.css" />
    <meta charset="UTF-8">
    <title>Servi-Red | VTV</title>
    <link rel="shortcut icon" href="imagenes/dd.png">

<div>

        <h4><img src="imagenes/logo1.png" width="140" height="100"><center>Sistema Integral de Servidores y Redes</a></center>

        <hr>
        <h4>Información del Servidor</h4>
        <hr><br>

        <h4>Equipo</h4>
        <table>
            <thead>

                    <tr>
                            <th>Servidor</th>
                            <th>IP</th>
                            <th>Servicio</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Serial</th>
                            <th>Bien </th>
                            <th>Mac Address</th>
                        
                            
                    </tr>
            </thead> 
            <tbody> 
                <?php
                $id = $_GET['id'];
                include('conexion.php');

                $sql="SELECT * from servidor where id='$id'";
                $result=mysqli_query($conexion,$sql);
                while($row=mysqli_fetch_array($result))
                {

                    $imagen = '<img height="90" width="90" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                                    

                            echo 
                        "<tr>
                                <td>".$imagen."</td>
                                <td>".$row['ip']."</td>
                                <td>".$row['servicio']."</td>
                                <td>".$row['modelo']."</td>
                                <td>".$row['marca']."</td>
                                <td>".$row['seri']."</td>
                                <td>".$row['bien_nacional']."</td>
                                <td>".$row['mac_address']."</td>
                            
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
<div><br><br><br><br><br>
                        <center>   
                  <h5> _____________________________________ &nbsp;&nbsp;&nbsp;&nbsp;_____________________________________</h5>
                  <DIV ALIGN=left><h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jefe de División
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Responsable</h5></DIV>
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
                    $dompdf->stream("Servidor-SERVI-RED.pdf" , array ("Attachment" => false));/*PARA VISUALIZAR*/ 
                    // $dompdf->stream("material.pdf" , array ("Attachment" => true));/*PARA DESCARGAR*/ 
            ?>