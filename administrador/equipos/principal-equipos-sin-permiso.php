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
                  <h3 class="box-title">INTERFAZ DE EQUIPOS</h3>
                </div>
                <div class="box-body">
                    
               </div>     
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr> 
                                <th>Id</th>
                                <th>Foto</th>
                                <th>Nombres</th>
                               
                            </tr>
                    </thead> 
                    <tbody>
                   
                    
                     
                  
                <?php
                     $sql="SELECT id , nombre ,imagen  from equipos order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = '<img height="130" width="130" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
								   echo 
								"<tr>
									<td>".$row['id']."</td>
                  <td ><a href='#marca_".$row['id']."'  data-toggle='modal'><span >$imagen</a></td>
									<td>".$row['nombre']."</td>
									
								</tr>";
								include('eliminar-equipos.php');
                include('registrar-equipos.php');
                include('editar-equipos.php');
                include('cambiar-foto.php');
							}
						?> 
                        <tfoot>
                              <tr>
                              <th>Id</th>
                                <th>Foto</th>
                                <th>Nombres</th>
                                
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>    
                  <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from equipos";
                        $result=mysqli_query($conexion,$consulta);
                        $equipos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $equipos = $equipos + 1;
                        }
                    ?>
           <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total de Equipos &nbsp;<span class="label label-danger"><?php echo $equipos; ?></span></a>
  <br><br>
  <?php include('contador-equipos.php');?>
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