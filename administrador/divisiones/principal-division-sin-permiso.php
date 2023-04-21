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
                  <h3 class="box-title">INTERFAZ DE DIVISIÓNES</h3>
                </div>
                <div class="box-body">
               
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                    <th>Id</th>
                                    <th>Nombre de la División</th>
                                    
                            </tr>
                    </thead> 
                    <tbody> 
                <?php
                     $sql="SELECT * from Division order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){  
								   echo 
								"<tr>
                 
									<td >".$row['id']."</td>
									<td>".$row['nombres']."</td>
									
									
								</tr>";
                include('registrar-division.php');
                include('eliminar-division.php');
                include('actualizar-division.php');
							}
						?>
                        <tfoot>
                              <tr>
                                  <th>Id</th>
                                  <th>Nombre de la División</th>
                                  
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
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
                        include('sql/conexion.php');
                        $consulta="SELECT * from Division";
                        $cont=mysqli_query($conexion,$consulta);
                        $gerencias = 0;
                        while($row = mysqli_fetch_array($cont))
                        {
                          $gerencias = $gerencias + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from divisiones where ubicacion= 'Piso 1'";
                        $cont1=mysqli_query($conexion,$consulta);
                        $piso1 = 20;
                        while($row = mysqli_fetch_array($cont1))
                        {
                          $piso1 = $piso1 ;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from divisiones where ubicacion= 'Piso 2'";
                        $cont2=mysqli_query($conexion,$consulta);
                        $piso2 = 15;
                        while($row = mysqli_fetch_array($cont2))
                        {
                          $piso2 = $piso2 ;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from divisiones where ubicacion= 'Piso 3'";
                        $cont3=mysqli_query($conexion,$consulta);
                        $piso3 = 22;
                        while($row = mysqli_fetch_array($cont3))
                        {
                          $piso3 = $piso3 ;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from divisiones where ubicacion= 'Piso 4'";
                        $cont4=mysqli_query($conexion,$consulta);
                        $piso4 = 14;
                        while($row = mysqli_fetch_array($cont4))
                        {
                          $piso4 = $piso4 ;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from divisiones where ubicacion= 'Sotano 1' or ubicacion='Sotano 2'";
                        $co=mysqli_query($conexion,$consulta);
                        $sotano = 11;
                        while($row = mysqli_fetch_array($co))
                        {
                          $sotano = $sotano ;
                        }
                    ?>
  <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total de Divisiónes &nbsp;<span class="label label-danger"><?php echo $divisiones; ?></span></a>
  
  <br><br>
   </div> 
              <br>
<?php include('contador-division.php');?>                  
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