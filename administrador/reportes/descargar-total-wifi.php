<?php ob_start(); ?>

<link rel="stylesheet" type="text/css" href="css/materiales.css" />
<meta charset="UTF-8">
<title>Servi-Red | VTV</title>
<link rel="shortcut icon" href="imagenes/dd.png">

    <div>
        <h4><img src="imagenes/logo1.png" width="140" height="100"><center>Sistema Integral de Servidores y Redes</a></center>
        <hr>
        <h4>Total de  Wifi</h4>
        <hr><br>

        <h4>Wifi</h4>
        <table>
            <thead>
                <tr>
                       <th>Wifi</th>
                        <th>IP</th>
                        <th>Usuario</th>
                        <th>Mac Address</th>
                        <th>Clave de Paso</th>
                        <th>SSID</th>
                        <th>Clave de Adminstrador</th>
                        <th>Ubicacion</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    include('conexion.php');
                    
                    $sql= "SELECT * FROM wifi";
                    $result=mysqli_query($conexion,$sql);
                    while ($row=mysqli_fetch_array($result)) 
                    {
                        $imagen = '<img height="90" width="90" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                        $ubicacion_t= $row["id_ubicacion"];
                            switch ($ubicacion_t) 
                            { 
                                    case 1: $ub='Sotano 2';
                                    break;
                                    case 2: $ub='Sotano 1'; 
                                    break;
                                    case 3: $ub='Planta Baja';
                                    break;
                                    case 4: $ub='Piso 1';
                                    break;
                                    case 5: $ub='Piso 2';
                                    break;
                                    case 6: $ub='Piso 3';
                                    break;
                                    case 7: $ub='Piso 4';
                                    break;
                                    case 8: $ub='Telepuertos';
                                    break; 
                            }  
                        echo 
                        "<tr>
                        <td>".$imagen."</td>
                        <td>".$row['ip']."</td>
                        <td>".$row['usuario']."</td>
                        <td>".$row['mac_address']."</td>
                        <td>".$row['clave_paso']."</td>
                        <td>".$row['ssid']."</td>
                        <td>".$row['clave_administrador']."</td>
                        <td width='130' height='60'>".$ub."</td>
                                
                        </tr>";

                    }
                ?>
                <br>
            </tbody>
                            <?php
                                include('conexion.php');
                                $consulta2="SELECT * from wifi";
                                $result2=mysqli_query($conexion,$consulta2);
                                $wifi = 0;
                                while($row = mysqli_fetch_array($result2))
                                {
                                  $wifi = $wifi + 1;
                                }
                            ?>
        </table>
        <center> <button class="button">&nbsp;&nbsp;Total de Wifis  <?php echo  $wifi; ?></button> </center> 
        <div>

        </div>
                    <div>
                      <center>   
                      <h5> _____________________________________</h5>
                      <h5>Jefe de División</h5>
                      </center>
                    </div>
              </center>
              <br>
    <div><br><br><br><br><br>
              
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
                //$dompdf->stream("Wifi-SERVI-RED.pdf" , array ("Attachment" => false));/*PARA VISUALIZAR*/ 
                $dompdf->stream("WIFI-SERVI-RED.pdf" , array ("Attachment" => true));/*PARA DESCARGAR*/ 
            ?>

