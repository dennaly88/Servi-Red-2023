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
                  <h3 class="box-title">INTERFAZ DE SISTEMAS OPERATIVOS</h3>
                </div>
                <div class="box-body">
               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Agregar Sistema Operativo</a>
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr> 
                                  <th>Id</th>
                                  <th>Foto</th>
                                  <th>Clasificación</th>
                                  <th>Nombre</th>
                                  <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 
                    <?php
                                $sql="SELECT * from distribucion";
                                $distribucion=mysqli_query($conexion,$sql);
                      ?>
                    
                <?php
                     $sql="SELECT * from sistemas_operativos order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                      $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                     $clasificación=$row['id_clasificacion'];
                          switch ($clasificación) { 
                       case 1:
                           $nombre_clasificacion='Dos'; 
                          break;
                       case 2:
                           $nombre_clasificacion='UNIX'; 
                          break;
                       case 3: 
                           $nombre_clasificacion='WINDOWS';
                          break;
                          case 4: 
                            $nombre_clasificacion='GNU/LINUX';
                           break;
                           case 5: 
                            $nombre_clasificacion='MAC OS';
                           break;
                        }
								   echo 
								"<tr>
                  <td>".$row['id']."</td>
                  <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                  <td>".$nombre_clasificacion."</td>
									<td>".$row['nombre']."</td>
									<td width='300' height='20'>
										<a href='#edit_".$row['id']."' title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['id']."' title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
								</tr>";
                include('registrar-sistemas-operativos.php');
                include('eliminar-sistemas.php');
                include('actualizar-sistemas.php');
                include('estado.php');
                include('perfil.php');
                include('cambiar-foto.php');
                include('contraseña.php');
							}
						?>
                        <tfoot>
                              <tr>
                                 <th>Id</th>
                                  <th>Foto</th>
                                  <th>Clasificación</th>
                                  <th>Nombre</th>
                                  <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
                  <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from sistemas_operativos";
                        $result=mysqli_query($conexion,$consulta);
                        $sistemas = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $sistemas = $sistemas + 1;
                        }
                    ?> 
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from sistemas_operativos where id_clasificacion='3'";
                        $result=mysqli_query($conexion,$consulta);
                        $w = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $w = $w + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from sistemas_operativos where id_clasificacion='4'";
                        $result=mysqli_query($conexion,$consulta);
                        $l = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $l = $l + 1;
                        }
                    ?>
                  
                  <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from sistemas_operativos where id_clasificacion='5'";
                        $result=mysqli_query($conexion,$consulta);
                        $m = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $m = $m + 1;
                        }
                    ?>
                      <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from sistemas_operativos where id_clasificacion='1'";
                        $result=mysqli_query($conexion,$consulta);
                        $d = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $d = $d + 1;
                        }
                    ?>
                      
                      <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from sistemas_operativos where id_clasificacion='2'";
                        $result=mysqli_query($conexion,$consulta);
                        $u = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $u = $u + 1;
                        }
                    ?>












  <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total Registrados Sistemas Operativos &nbsp;<span class="label label-danger"><?php echo $sistemas; ?></span></a>
  
  <br><br>
   </div> 
              <br>
<?php include ('contador-sistemas-operativos.php');  ?>                  
<?php include('../paginas/pie.php');?>
<?php include ('../paginas/footer.php');  ?> 

        </div> 
            <br>
          </div>
        </section>
      </div>   
    </div>
    <script src="js/visualizar.js"></script>
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