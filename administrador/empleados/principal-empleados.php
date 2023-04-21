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
                  <h3 class="box-title">INTERFAZ DE EMPLEADOS</h3>
                </div>
                <div class="box-body">
               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Agregar Empleados</a>
              
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                 <th>Id</th>
                                 <th>Foto</th> 
                                 <th>Nombres</th>
                                 <th>Apellidos</th>
                                 <th>Cedula</th>
                                 <th>Información</th>
                                 <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from empleados";
                        $result=mysqli_query($conexion,$consulta);
                        $empleados = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $empleados = $empleados + 1;
                        }
                    ?>


                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from empleados where cargo='COORDINADOR' or cargo='JEFE DE DIVISIÓN'";
                        $result=mysqli_query($conexion,$consulta);
                        $supervisores = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $supervisores = $supervisores + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from empleados where cargo='PROFESIONAL I' or cargo='PROFESIONAL II' or cargo='PROFESIONAL III'";
                        $result=mysqli_query($conexion,$consulta);
                        $profesional = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $profesional = $profesional + 1;
                        }
                    ?>

                  <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from empleados where cargo='TECNICO I' or cargo='TECNICO II' or cargo='TECNICO III'";
                        $result=mysqli_query($conexion,$consulta);
                        $tecnico = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $tecnico = $tecnico + 1;
                        } 
                    ?>
                <?php
                     $sql="SELECT * from empleados order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = '<img class="img-circle" width="98" height="98" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
                     $estado=$row['estado'];
                     if($estado=='Activo'){
                      
                      $estado='success';
                     }else{
                      $estado='btn bg-maroon';
                    }
                     
								   echo 
								"<tr>
                      <td>".$row['id']."</td>
                      <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
									    <td>".$row['nombres']."</td>
									    <td>".$row['apellidos']."</td>
                      <td>".$row['cedula']."</td>
                      <td> <a href='#informacion_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-list-alt'></span> </a></td>
									<td>
										  <a href='#edit_".$row['id']."' title='Editar'class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										  <a href='#delete_".$row['id']."' title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
								</tr>";
                include('informacion.php');
                include('prueba.php');
                include('registrar-empleado.php');
								include('actualizar-empleado.php');
								include('eliminar-empleado.php');
                include('cambiar-foto-empleado.php');
							}
						?>
                   
                        <tfoot>
                              <tr>
                                    <th>Id</th>
                                    <th>Foto</th> 
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Información</th>
                                    <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
                  
  <center>   
  <br><br>
   </div> 
              <br>
                   
<?php include('contador-empleados.php');?>  
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