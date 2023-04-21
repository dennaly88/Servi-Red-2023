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
                  <h3 class="box-title">INTERFAZ DE USUARIOS</h3>
                </div>
                <div class="box-body">

               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-plus'></span>Agregar Usuarios</a>
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                    <th>Id</th>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>
                                    <th>Pregunta</th>
                                    <th>Contraseña</th>
                                    <th>Perfil</th>
                                    <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 

                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios";
                        $result=mysqli_query($conexion,$consulta);
                        $total = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $total = $total + 1;
                        }
  
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=1";
                        $result=mysqli_query($conexion,$consulta);
                        $administrador = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $administrador = $administrador + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=2";
                        $result=mysqli_query($conexion,$consulta);
                        $coordinador = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $coordinador = $coordinador + 1;
                        }
                    ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from usuarios where id_rol=3";
                        $result=mysqli_query($conexion,$consulta);
                        $tecnico = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $tecnico = $tecnico + 1;
                        }
                    ?>
                      <?php
                         


                          $sql="SELECT * from usuarios order by id";
                         // $sql="SELECT id,nombres,apellidos,telefono,corre,usuario,contraseña,estado,iamgen,pregunta,cedula,id_rol from usuarios order by id desc";

                        
                          $result=mysqli_query($conexion,$sql);
                          while($row=mysqli_fetch_array($result)){
                          $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';
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
                            <td>".$row['telefono']."</td>
                            <td>".$row['corre']."</td>
                            <td>".$row['usuario']."</td> 
                           <td><a href='#estado_".$row['id']."' class='btn btn-$estado btn-xs' data-toggle='modal'>  ".$row['estado']."</a></td>
                        <td>".$row['pregunta']."</td>
                        <td> <a href='#contraseña_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-eye'></span> </a></td>
                        <td> <a href='#perfil_".$row['id']."' class='btn btn-dark btn-lg' data-toggle='modal'><span class='fa fa-user'></span> </a></td>
                        <td>
                          <a href='#edit_".$row['id']."'title='Editar' class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> </a>
                          <a href='#delete_".$row['id']."'title='Eliminar' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> </a>
                        </td>
                      </tr>";
                      include('estado.php');
                      include('perfil.php');
                      include('registrar-usuario.php');
                      include('actualizar-usuario.php');
                      include('eliminar-usuario.php');
                      include('cambiar-foto.php');
                      include('contraseña.php');
                    
                    
                    }
                  
                  ?>
                    
                        <tfoot>
                              <tr>
                              <th>Id</th>
                                    <th>Foto</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>
                                    <th>Pregunta</th>
                                    <th>Contraseña</th>
                                    <th>Perfil</th>
                                    <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
  <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total de Usuarios &nbsp;<span class="label label-danger"><?php echo $total; ?></span></a>
  
  <br><br>
   </div> 
              <br>
                      
<?php include('contador-usuarios.php');?> 
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