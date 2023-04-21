<?php ob_start(); ?>

<link rel="stylesheet" type="text/css" href="css/materiales.css" />
<meta charset="UTF-8">
<title>Servi-Red | VTV</title>
<link rel="shortcut icon" href="imagenes/dd.png">

    <div>
        <h4><img src="imagenes/logo1.png" width="140" height="100"><center>Sistema Integral de Servidores y Redes</a></center>
        <hr>
        <h4>Información del Switch</h4>
        <hr><br>

        <h4>Switch</h4>
        <table>
            <thead>
                <tr>
                       <th>Switch</th>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Clave</th>
                        <th>Ip</th>
                        <th>Mac Address</th>
                        <th>Ubicación</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                
                    include('conexion.php');
                    
                    $sql= "SELECT * FROM switch";
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
                                <td>".$row['id']."</td>
                                <td>".$row['usuario']."</td>
                                <td>".$row['clave']."</td>
                                <td>".$row['ip']."</td>
                                <td>".$row['mac_address']."</td>
                                <td width='200' height='60'>".$ub."</td>
                                
                        </tr>";

                    }
                ?>
                <br>
            </tbody>
                            <?php
                                include('conexion.php');
                                $consulta2="SELECT * from switch";
                                $result2=mysqli_query($conexion,$consulta2);
                                $switch = 0;
                                while($row = mysqli_fetch_array($result2))
                                {
                                  $switch = $switch + 1;
                                }
                            ?>
        </table>
        <center> <button class="button">&nbsp;&nbsp;Total de Switch  <?php echo  $switch; ?></button> </center> 
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
                $dompdf->stream("SERVI.RED-SWITCH.pdf" , array ("Attachment" => true));/*PARA DESCARGAR*/ 
            ?>

