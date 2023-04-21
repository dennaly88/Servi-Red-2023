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
                  <h3 class="box-title">INTERFAZ DE SERVIDORES</h3>
                </div>
                <div class="box-body">
<center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='fa fa-server'></span>&nbsp;Nuevo Servidor</a>
      </div> 
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>Foto</th>
                                <th>Servicio</th> 
                                <th>IP</th>
                                <th>Usuario</th>
                                <th>Clave</th>
                                <th>Mac Address</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Serial</th>
                                <th>Bien Nacional</th>
                                <th>Sistema Operativo</th>
                                <th>Acción</th>
                            </tr>
                    </thead>  
                    <tbody> 

                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from servidor";
                        $result=mysqli_query($conexion,$consulta);
                        $servidores = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $servidores = $servidores + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from servicios";
                        $result=mysqli_query($conexion,$consulta);
                        $servicios = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $servicios = $servicios + 1;
                        }
                    ?>


                       <?php
                                $sql="SELECT * from sistemas_operativos";
                                $res=mysqli_query($conexion,$sql);
                      ?>
                    <?php
                                $sql="SELECT * from distribucion";
                                $dis=mysqli_query($conexion,$sql);
                      ?>
                     <?php
                                $sql="SELECT * from servicios";
                                $ser=mysqli_query($conexion,$sql);
                      ?>
                       <?php
                                $sql="SELECT * from marcas";
                                $mar=mysqli_query($conexion,$sql);
                      ?>


                <?php 
                     $sql="SELECT id  , marca, ip , mac_address, modelo, seri, bien_nacional, imagen,usuario,clave,remoto,sistema_operativo,servicio from servidor order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="120" height="90" />';
                     $imagen = '<img height="120" width="120" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                     $remoto =$row['remoto'];
								   echo 
								"<tr>

                  <td>".$row['id']."</td>
                  <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span >$imagen</a></td>
                  <td><a target='_blank' href='http://".$row['ip']."'class='btn btn-primary btn-xs' data-toggle='modal'><span > ".$row['servicio']."</a></td>
                  <td><a href='#estado_".$row['id']."' class='btn btn-success btn-xs' data-toggle='modal'>  ".$row['ip']."</a></td>
                  <td>".$row['usuario']."</td>
                  <td> <a href='#contraseña_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-eye'></span> </a></td>
                  <td><a href='#estado_".$row['id']."' class='btn bg-navy btn-xs' data-toggle='modal'>  ".$row['mac_address']."</a></td>
                  <td>".$row['marca']."</td>
                  <td>".$row['modelo']."</td>
                  <td>".$row['seri']."</td>
                  <td>".$row['bien_nacional']."</td>
                  <td>".$row['sistema_operativo']."</td>
                 
                 
                  
                
                 
									<td>
										<a href='#edit_".$row['id']."' title='Editar'class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['id']."' title='Eliminar'class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
                    <a href='$remoto' 
                     class='btn bg-navy btn-flat btn-sm' data-toggle='modal'
                     target='_blank' onclick='window.open(this.href, this.target,'width=60,height=40'); title='Consola'return false;
                     > <span class='glyphicon glyphicon-blackboard'></span></a>
                     
                     <a  href='../reportes/ver-servidor.php?id=$row[id]'   title='Ver PDF' class='btn bg-maroon  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>
                     
                     <a  href='../reportes/descargar-servidor.php?id=$row[id]'   title='Descargar PDF' class='btn bg-purple btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>
                     </td>
								</tr>";
                include('perfil.php');
                include('registrar-servidores.php');
								include('actualizar-servidores.php');
								include('eliminar-servidores.php');
                include('cambiar-foto.php');
                include('contraseña.php');
            
							}
						?>
                        <tfoot>
                              <tr>
                                <th>Id</th>
                                <th>Foto</th>
                                <th>Servicio</th> 
                                <th>IP</th>
                                <th>Usuario</th>
                                <th>Clave</th>
                                <th>Mac Address</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Serial</th>
                                <th>Bien Nacional</th>
                                <th>Sistema Operativo</th>
                                <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
                  
  <center> 
  <a  href='../reportes/ver-total-servidores.php'   title='Ver Total de Servidores PDF' class='btn bg-navy btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>

  <a  href='../reportes/descargar-total-servidores.php'   title='Descargar Total de Servidores PDF' class='btn bg-primary btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>
  <br><br>
            <?php include('contador-servidores.php');?>
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