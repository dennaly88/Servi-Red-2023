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
                  <h3 class="box-title">INTERFAZ PARA ADMINISTRAR EQUIPOS</h3>
                </div>
                <div class="box-body">

               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Agregar Equipos</a>
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                    <th>Id</th>
                                    <th>Foto</th>
                                    <th>Asignado a </th>
                                    <th>Equipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Registrado por</th>
                                    <th>Fecha</th>
                                    <th>Status</th>
                                    <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_equipos";
                        $result=mysqli_query($conexion,$consulta);
                        $total_equipos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_equipos =  $total_equipos + 1;
                        }
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_equipos where status='Asignado'"; 
                        $result=mysqli_query($conexion,$consulta);
                        $total_asignado = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_asignado = $total_asignado + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from administrador_equipos where status='Registrado'"; 
                        $result=mysqli_query($conexion,$consulta);
                        $total_almacen = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total_almacen = $total_almacen + 1;
                        }
                    ?>






                       <?php
                                $sql="SELECT * from empleados";
                                $resu=mysqli_query($conexion,$sql);
                                $imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
                       ?>

                    <?php
                                $sql="SELECT * from equipos";
                                $resulta=mysqli_query($conexion,$sql);
                       ?>
                    <?php
                                $sql="SELECT * from marcas";
                                $resultados=mysqli_query($conexion,$sql);
                      ?>
                <?php
                     $sql="SELECT * from administrador_equipos";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){
                      
                     $imagen_empleado = $row["imagen_empleado"];
                     $estado=$row['status'];
                     if($estado=='Registrado')
                     {
                      
                          $estado='success';
                        }else{
                          if($estado=='Asignado'){
                          
                            $estado='info';
                          }else{

                            if($estado=='Editado'){
                          
                              $estado='primary';
                            }else{

                              if($estado=='Eliminado'){
                          
                                $estado='danger';
                              }
                            }
                          }
                    }   
								   echo 
								"<tr>
                  <td>".$row['id']."</td>
                  <td><a href='#foto_".$row['id']."'  data-toggle='modal'><span class='img-circle' width='80' height='80'>$imagen_empleado</a></td>
                  <td>".$row['empleado']."</td>
									<td>".$row['nombre']."</td>
									<td>".$row['marca']."</td>
                  <td>".$row['modelo']."</td>
                  <td>".$row['seri']."</td>
                  <td>".$row['bien_nacional']."</td>
                  <td>".$row['responsable']."</td>
                  <td>".$row['fecha']."</td>
                  <td><a class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['status']."</a></td>
									<td width='300' height='20'>
										<a href='#edit_".$row['id']."' title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                    <a href='#asignar_".$row['id']."' title='Asignar' class='btn bg-navy btn-sm' data-toggle='modal'><span class=' glyphicon glyphicon-log-out'></span> </a>
                    <a href='#delete_".$row['id']."' title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                    <a  href='../reportes/ver-equipo.php?id=$row[id]'   title='Ver PDF' class='btn bg-maroon  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>
                  </td>
								</tr>"; 
                include('asignar-equipos.php');
                include('registrar-equipos.php');
                include('estado.php');
                include('perfil.php');
								include('actualizar-equipos.php');
								include('eliminar-equipos.php');
                include('cambiar-foto.php');
                include('contraseña.php');
               
             
							}
						?>
                   
                        <tfoot>
                              <tr>
                                    <th>Id</th>
                                    <th>Foto</th>
                                    <th>Asignado a </th>
                                    <th>Equipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Serial</th>
                                    <th>Bien Nacional</th>
                                    <th>Registrado por</th>
                                    <th>Fecha</th>
                                    <th>Status</th>
                                    <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
  <center>
  <a  href='../reportes/total-equipo.php'   title='Total de Registros de Equipos' class='btn bg-navy  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-file-pdf-o' ></span></a>
  <a  href='../reportes/descargar-total-equipos.php' title='Descargar Total de Registros de Equipos' class='btn bg-purple btn-flat  btn-sm' data-toggle='modal' target='_blank'><span class='fa fa-download' ></span></a>
  <br><br>
   </div> 
              <br>
                      
<?php include('contador-equipos.php');?>
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