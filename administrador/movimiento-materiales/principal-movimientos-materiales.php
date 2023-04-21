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
                  <h3 class="box-title">MOVIMIENTOS DE MATERIALES</h3>
                </div>
                <div class="box-body">

              
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                   <th>id Material</th>
                                    <th>Material</th>
                                    <th>Movimiento</th>
                                    <th>Nombre</th>
                                    <th>Medición</th>
                                    <th>Cantidad Inicial</th>
                                    <th>Cantidad Modificar</th>
                                    <th>Cantidad Total</th>
                                    <th>Status</th>
                                    <th>Responsable</th>
                                    <th>Fecha</th>
                                    <th>Asignado a </th>
                            </tr>
                    </thead> 
                    <tbody>  

                    

                    <?php
                                $sql="SELECT * from materiales";
                                $resultados=mysqli_query($conexion,$sql);
                       ?>
                    <?php
                                $sql="SELECT * from unidad";
                                $resul=mysqli_query($conexion,$sql);
                      ?>

                 
                <?php
                     $sql="SELECT * from movimientos_materiales order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                      $imagen = $row["imagen"];
                     $estado=$row['status'];
                     if($estado=='Registrado'){
                      
                      $estado='success';
                     }else{
                      if($estado=='Editado'){
                      
                        $estado='info';
                       }else{

                        if($estado=='Aumento'){
                      
                          $estado='primary';
                         }else{

                          if($estado=='Disminución'){
                      
                            $estado='danger';
                           }else{

                            if($estado=='Eliminado'){
                      
                              $estado='btn btn-danger';
                             }


                           }


                         }



                       }


                    }
                     
								   echo 
								"<tr>
                <td>".$row['id_material']."</td>
                <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
                 
                <td>".$row['id']."</td>
                <td>".$row['nombre']."</td>
                <td>".$row['unidad']."</td>
                <td>".$row['cantidad_inicial']."</td>
                <td>".$row['cantidad_modificada']."</td>
                <td>".$row['cantidad_total']."</td>
                <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
                <td>".$row['responsable']."</td>
                <td width='120' height='60'>".$row['fecha']."</td>
                <td width='120' height='60'>".$row['asignado']."</td>
								</tr>";
                include('registrar-materiales.php');
                include('estado.php');
                include('perfil.php');
								include('actualizar-materiales.php');
								include('eliminar-materiales.php');
                include('cambiar-foto.php');
                include('contraseña.php');
               
             
							}
						?>
                   
                        <tfoot>
                              <tr>
                                    <th>id Material</th>
                                    <th>Material</th>
                                    <th>Movimiento</th>
                                    <th>Nombre</th>
                                    <th>Medición</th>
                                    <th>Cantidad Inicial</th>
                                    <th>Cantidad Modificar</th>
                                    <th>Cantidad Total</th>
                                    <th>Status</th>
                                    <th>Responsable</th>
                                    <th>Fecha</th>
                                    <th>Asignado a </th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
  <center>  
  <a  href='../reportes/ver-total-movimiento-materiales.php'   title='Ver Auditoria Materiales PDF' class='btn bg-navy btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>
  <a  href='../reportes/descargar-movimiento-materiales.php'   title='Descargar Auditoria Materiales PDF' class='btn bg-primary btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>
  <br><br> 
   </div> 
              <br>
                      

<?php include('../paginas/pie.php');?>
<?php include ('../paginas/footer.php');  ?> 
        </div> 
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