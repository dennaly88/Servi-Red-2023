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
                  <h3 class="box-title">INTERFAZ PARA ADMINISTRAR LOS MATERIALES</h3>
                </div>
                <div class="box-body">

               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Agregar Material</a>
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                            <th>Id</th>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Cantidad Inicial</th>
                                    <th>Cantidad Modificar</th>
                                    <th>Cantidad Total</th>
                                    <th>Medicion</th>
                                    <th>Status</th>
                                    <th>Registrado</th>
                                    <th>Fecha</th>
                                    <th>Asignado a </th>
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Cargo</th>
                                    <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 

                    <?php
                                $sql="SELECT * from materiales";
                                $materiales=mysqli_query($conexion,$sql);
                      ?>
                      <?php
                                $sql="SELECT * from unidad";
                                $unidad=mysqli_query($conexion,$sql);
                      ?>
                     

                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_materiales";
                        $result=mysqli_query($conexion,$consulta);
                        $total_materiales = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_materiales =  $total_materiales + 1;
                        }
                    ?> 
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_materiales where status='Asignado'"; 
                        $result=mysqli_query($conexion,$consulta);
                        $total_asignado = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_asignado = $total_asignado + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_materiales where status='Registrado'"; 
                        $result=mysqli_query($conexion,$consulta);
                        $total_almacen = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_almacen = $total_almacen + 1;
                        }
                    ?>

                     
                 
                <?php
                     $sql="SELECT * from administrador_materiales order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                     $imagen = $row["imagen"];
                     $estado=$row['status'];
                     $idreporte=$row['id'];
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
                           }
                         }
                       }
                    }   
								   echo 
								"<tr>
                      <td>".$row['id']."</td>
                      <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle'>$imagen</a></td>
									    <td>".$row['nombre']."</td>
                      <td>".$row['cantidad_inicial']."</td>
                      <td>".$row['cantidad_modificada']."</td>
                      <td>".$row['cantidad']."</td>
                      <td>".$row['unidad']."</td>
                      <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
                      <td>".$row['responsable']."</td>
                      <td>".$row['fecha']."</td>
                      <td>".$row['asignado']."</td>
                      <td>".$row['gerencia']."</td>
                      <td>".$row['division']."</td>
                      <td>".$row['cargo']."</td>
                         
									<td>
                        <a href='#edit_".$row['id']."' title='Editar' class='btn btn-info btn-sm' data-toggle='modal'name='Editar'><span class='glyphicon glyphicon-edit'></span></a>
                        <a href='#delete_".$row['id']."'  title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
                        <a href='#aumentar_".$row['id']."'  title='Aumentar' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span></a>
                        <a href='#disminucion_".$row['id']."'  title='Asignar' class='btn bg-navy btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-log-out'></span></a>
                        <a  href='../reportes/ver-materiales.php?id=$row[id]'   title='Ver PDF' class='btn bg-maroon  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>
                        <a  href='../reportes/descargar-materiales.php?id=$row[id]'   title='Descargar PDF' class='btn bg-purple btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>        
                </td>
                       
								</tr>";
               
                include('aumentar.php');
                include('disminucion.php');
                include('registrar-materiales.php');
								include('actualizar-materiales.php');
								include('eliminar-materiales.php');
                include('cambiar-foto.php');
                include('contraseña.php');
               
             
							}
						?>
                   
                        <tfoot>
                              <tr>
                                    <th>Id</th>
                                    <th>Foto</th>
                                    <th>Nombre</th>
                                    <th>Cantidad Inicial</th>
                                    <th>Cantidad Modificar</th>
                                    <th>Cantidad Total</th>
                                    <th>Medicion</th>
                                    <th>Status</th>
                                    <th>Registrado</th>
                                    <th>Fecha</th>
                                    <th>Asignado a </th>
                                    <th>Gerencia</th>
                                    <th>División</th>
                                    <th>Cargo</th>
                                    <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
  <center>
  <a  href='../reportes/ver-total-materiales.php'   title='Ver Total de Materiales PDF' class='btn bg-navy btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>
  <a  href='../reportes/descargar-total-materiales.php'   title='Descargar Total de Materiales PDF' class='btn bg-primary btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>
  <br><br>
   </div> 
              <br>
                      
<?php include('contador-materiales.php');?>
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