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
                  <h3 class="box-title">INTERFAZ DE MARCAS</h3>
                </div>
                <div class="box-body">
               <center> <a href="#registro" class='btn btn-success btn-sm' data-toggle='modal'><span class='fa fa-list-alt'></span> &nbsp;
Nueva Marca</a>
               </div>     
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr> <th>Id</th>
                                <th>Foto</th>
                                <th>Nombres</th>
                                <th>Categorias</th>
                                <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas";
                        $result=mysqli_query($conexion,$consulta);
                        $equipos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $equipos = $equipos + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas where id_categoria=2";
                        $result=mysqli_query($conexion,$consulta);
                        $wifi = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $wifi = $wifi + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas where id_categoria=3";
                        $result=mysqli_query($conexion,$consulta);
                        $router = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $router = $router + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas where id_categoria=4";
                        $result=mysqli_query($conexion,$consulta);
                        $switch = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $switch = $switch + 1;
                        }
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas where id_categoria=5";
                        $result=mysqli_query($conexion,$consulta);
                        $servidores = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $servidores = $servidores + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from marcas where id_categoria=6";
                        $result=mysqli_query($conexion,$consulta);
                        $materiales = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $materiales = $materiales + 1;
                        }
                    ?>
                <?php
                     $sql="SELECT * from marcas order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                     $categoria=$row['id_categoria'];
                              switch ($categoria) { 
                                 case 1:
                                 $categoria='Equipos';
                                      break;
                               case 2:
                                  $categoria='Wifis';
                                      break;
                                case 3: 
                                  $categoria='Router';
                                      break;
                                case 4: 
                                   $categoria='Switch';
                                       break;
                                 case 5: 
                                     $categoria='Servidores';
                                        break;
                                   case 6: 
                                      $categoria='Materiales';
                                         break;
                          }
								   echo 
								"<tr>
                <td>".$row['id']."</td>
                  <td ><a href='#foto_".$row['id']."'  data-toggle='modal'><span >$imagen</a></td>
									<td>".$row['nombres']."</td>
                  <td> <a href='#categoria_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-list-alt'></span> </a></td>
									<td width='300' height='20'>
										<a href='#edit_".$row['id']."' class='btn btn-info btn-sm' title='Editar'data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
										<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' title='Eliminar'data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
									</td>
								</tr>";
                include('editar-categoria.php');
								include('eliminar-marcas.php');
                include('registrar-marcas.php');
                include('editar-marcas.php');
                include('cambiar-foto.php');
							}
						?> 
                        <tfoot>
                              <tr>
                                <th>Id</th>
                                <th>Foto</th>
                                <th>Nombres</th>
                                <th>Categorias</th>
                                <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>          
           <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total de Marcas &nbsp;<span class="label label-danger"><?php echo $marcas; ?></span></a>
  <br><br>
  <?php include('cambiar-foto.php');?>
  <?php include('contador-marcas.php');?>
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