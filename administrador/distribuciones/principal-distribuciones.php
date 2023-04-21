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
                  <h3 class="box-title">INTERFAZ DE VERSIONES DE SISTEMAS OPERATIVOS</h3>
                </div>
                <div class="box-body">

               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Agregar Distribución</a>
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                  <th>Id</th>
                                  <th>Nombre de la Distribución</th>
                                  <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 
                <?php
                 $sql="SELECT id , nombre from distribucion order by id desc";
                    
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     
								   echo 
								"<tr>
                  
									<td>".$row['id']."</td>
									<td width='700' height='20'>".$row['nombre']."</td>
									<td width='300' height='20'>
										<a href='#edit_".$row['id']."' title='Editar'class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['id']."' title='Eliminar'class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
								</tr>";
                include('registrar-distribuciones.php');
                include('eliminar-distribuciones.php');
                include('actualizar-distribuciones.php');
							}
						?>  
                        <tfoot>
                              <tr>
                                  <th>Id</th>
                                  <th>Nombre de la Distribución</th>
                                  <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>

                  <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from distribucion";
                        $result=mysqli_query($conexion,$consulta);
                        $distribucion = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $distribucion = $distribucion + 1;
                        }
                    ?>
  <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total Registrados Sistemas Operativos &nbsp;<span class="label label-danger"><?php echo $distribucion; ?></span></a>
  
  <br><br>
   </div> 
              <br>
<center><?php include('contador-distribuciones.php');?> </center>    
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