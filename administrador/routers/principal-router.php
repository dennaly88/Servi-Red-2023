<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <?php include "sql/conexion.php";?>
  <style type="text/css">
      img.pequeña{width: 50px; height: 50px;}
      img.mediana{width: 100px; height: 100px;}
      img.grande{width: 200px; height: 200px;}
    </style>
 
  <body class="skin-blue">
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">INTERFAZ DE ROUTER</h3>
                </div>
                <div class="box-body"> 
               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='fa fa-hdd-o'></span> &nbsp;Nuevo</a>
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>Foto</th>
                                <th>IP</th>
                                <th>Usuario</th>
                                <th>Clave de administrador</th>
                                <th>Mac Address</th>
                                <th>SSID</th>
                                <th>Clave de Paso</th>
                                <th>Ubicacion</th>
                                <th>Ubicacion Geografica</th>
                                <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 

                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from router";
                        $result=mysqli_query($conexion,$consulta);
                        $router = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $router = $router + 1;
                        }
                    ?>
                <?php
                     $sql="SELECT * from router order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                      $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                      $ubicacion = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["ubicacion_geografica"]).'"/>';
                      $remoto =$row['remoto'];
                     $ubicacion_t= $row["id_ubicacion"];
                     switch ($ubicacion_t) { 
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
                <td>".$row['id']."</td>

                  <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span >$imagen</a></td>
                  <td><a href='#estado_".$row['id']."' class='btn btn-success btn-xs' data-toggle='modal'>  ".$row['ip']."</a></td>
                  <td>".$row['usuario']."</td>
                  <td> <a href='#contraseña_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-eye'></span> </a></td>
                  <td><a href='#estado_".$row['id']."' class='btn bg-navy btn-xs' data-toggle='modal'>  ".$row['mac_address']."</a></td>

                  <td>".$row['ssid']."</td>
                  <td>".$row['clave_paso']."</td>
                  <td>".$ub."</td>
                  <td><a href='#ubicacion_".$row['id']."'  data-toggle='modal'><span >$ubicacion</a></td>
									<td> 
										<a href='#edit_".$row['id']."' title='Editar'class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['id']."' title='Eliminar'class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
                    <a href='#consola' class='btn bg-navy btn-flat btn-sm' data-toggle='modal'
                    target='_blank' onclick='window.open(this.href, this.target,'width=60,height=40'); title='Consola'return false;
                    > <span class='glyphicon glyphicon-blackboard'></span></a>

                    <a  href='../reportes/ver-router.php?id=$row[id]'   title='Ver PDF' class='btn bg-maroon  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>

                    <a  href='../reportes/descargar-router.php?id=$row[id]'   title='Descargar PDF' class='btn bg-purple btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>

                    </td>
								</tr>";
                include('registrar-router.php');
                include('ubicacion.php'); 
                include('consola.php');
                include('perfil.php');
								include('actualizar-router.php');
								include('eliminar-router.php');
                include('cambiar-foto.php');
                include('contraseña.php');
                
							}
						?>
                        <tfoot>
                              <tr>
                              <th>Id</th>
                                <th>Foto</th>
                                <th>IP</th>
                                <th>Usuario</th>
                                <th>Clave de administrador</th>
                                <th>Mac Address</th>
                                <th>SSID</th>
                                <th>Clave de Paso</th>
                                <th>Ubicacion</th>
                                <th>Ubicacion Geografica</th>
                                <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
                  <center> <a  href='../reportes/ver-total-router.php'   title='Ver Total de Router PDF' class='btn bg-navy btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>

                  <a  href='../reportes/descargar-total-router.php'   title='Descargar Total de Router PDF' class='btn bg-primary btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>

                  <br><br>

  <?php include('contador-router.php');?>
  <?php include('../paginas/pie.php');?>
  <?php include ('../paginas/footer.php');  ?> 
              </div> 
              <br>
            <br>
          </div>
        </section>
      </div>   
    </div>
    <script src="../plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>
<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	