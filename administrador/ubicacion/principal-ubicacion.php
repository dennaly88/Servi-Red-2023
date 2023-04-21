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
                  <h3 class="box-title">INTERFAZ DE UBICACIÓNES</h3>
                </div>
                <div class="box-body">
<center> <a href="#mensaje" class='btn btn-primary btn-sm' data-toggle='modal'><span class='fa fa-map-marker'></span>&nbsp; Crear Ubicaciones </a>
      </div> 
            <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Siglas</th>
                                <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 

                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from ubicacion";
                        $result=mysqli_query($conexion,$consulta);
                        $ubicacion = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $ubicacion = $ubicacion + 1;
                        }
                    ?>
                <?php
                     $sql="SELECT id , nombre , siglas from ubicacion order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="120" height="90" />';
								   echo 
								"<tr>
									<td>".$row['id']."</td>
									<td>".$row['nombre']."</td>
									<td>".$row['siglas']."</td>
                  <td width='300' height='20'> 
										<a href='#edit_".$row['id']."' class='btn bg-purple  btn-sm' data-toggle='modal'><span class='fa fa-eye' title='Ver'></span>  &nbsp; </a>
									</td>
								</tr>"; 
                include('informacion.php');
                include('eliminar-ubicacion.php');
                include('registrar-ubicacion.php');
								include('actualizar-ubicacion.php');
								
            
							}
						?> 
                    
                        <tfoot>
                              <tr>
                                    <th>Id</th> 
                                    <th>Nombre</th>
                                    <th>Siglas</th>
                                    <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
  <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total de Ubicaciones &nbsp;<span class="label label-danger"><?php echo $ubicacion; ?></span></a>
  
  <br><br>
  <center><?php include('contador-ubicaciones.php');?></center>
<?php include('../paginas/pie.php');?>
<?php include ('../paginas/footer.php');  ?>  
              </div> 
             
              <br>
              <div class="pad margin no-print">
         

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