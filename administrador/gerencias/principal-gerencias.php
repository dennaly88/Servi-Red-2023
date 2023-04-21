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
                  <h3 class="box-title">INTERFAZ DE GERENCIAS</h3>
                </div>
                <div class="box-body">
                <?php 
session_start();
include('conexion.php');

$id=$_SESSION['id'];          
$id_rol=$_SESSION['id_rol'];                       
$imagen=$_SESSION['imagen'];
$nombres=$_SESSION['nombres'];
$apellidos=$_SESSION['apellidos'];
$usuario=$_SESSION['usuario'];

$consulta=" SELECT * FROM usuarios u INNER JOIN roles r  ON u.id_rol=r.id  WHERE '$id'=u.id ";
$result=mysqli_query($conexion,$consulta);          
while($mostrar=mysqli_fetch_array($result)){
  ?> 

<?php
$perfil=$mostrar['nombre']; 
session_start();
$_SESSION['perfil']=$perfil;

 

}

  ?>	
<?php 
if ($id_rol == '1') {

  $perfil='Administrador';
 
  } else
  if ($id_rol == '2') {
  
    $perfil='Coordinador';
    include("menus/coordinador.php");
    $perfil='Coordinador';
  
  
  } else
  if ($id_rol == '3'){
    $perfil='Tecnico';
    include("menus/tecnico.php");
    
  
  }
?> 
              
                
               <center> <a href="#registro_usuario" class='btn btn-primary btn-sm' data-toggle='modal'><span class='fa fa-outdent'></span>  Agregar Gerencia</a>
      </div> 
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                  <th>Id</th>
                                  <th>Nombre de la Gerencia</th>
                                  <th>Ubicación</th>
                                  <th>Acción</th>
                            </tr>
                    </thead> 
                    <tbody> 
                <?php
                     $sql="SELECT * from gerencias order by id desc";
                     $result=mysqli_query($conexion,$sql);
                     while($row=mysqli_fetch_array($result)){  
								   echo 
								"<tr>
                 
									<td>".$row['id']."</td>
									<td>".$row['nombres']."</td>
                  <td>".$row['piso']."</td>
                  
                  


									<td width='300' height='20'>











                  
                  

										<a href='#edit_".$row['id']."' title='Editar'class='btn btn-info btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='#delete_".$row['id']."' title='Eliminar'class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
									
                    </td>
								</tr>";
                include('registrar-gerencias.php');
                include('eliminar-gerencias.php');
                include('actualizar-gerencias.php');
							}
						?>
                        <tfoot>
                              <tr>
                                  <th>Id</th>
                                  <th>Nombre de la Gerencia</th>
                                  <th>Ubicación</th>
                                  <th>Acción</th>
                              </tr>
                            </tbody><br>
                        </tfoot>
                  </table>
                  <?php
                                $sql="SELECT * from ubicacion";
                                $re=mysqli_query($conexion,$sql);
                      ?>
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
                        $consulta="SELECT * from gerencias";
                        $cont=mysqli_query($conexion,$consulta);
                        $gerencias = 0;
                        while($row = mysqli_fetch_array($cont))
                        {
                          $gerencias = $gerencias + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from gerencias where piso= 'Piso 1'";
                        $cont1=mysqli_query($conexion,$consulta);
                        $piso1 = 0;
                        while($row = mysqli_fetch_array($cont1))
                        {
                          $piso1 = $piso1 + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from gerencias where piso= 'Piso 2'";
                        $cont2=mysqli_query($conexion,$consulta);
                        $piso2 = 0;
                        while($row = mysqli_fetch_array($cont2))
                        {
                          $piso2 = $piso2 + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from gerencias where piso= 'Piso 3'";
                        $cont3=mysqli_query($conexion,$consulta);
                        $piso3 = 0;
                        while($row = mysqli_fetch_array($cont3))
                        {
                          $piso3 = $piso3 + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from gerencias where piso= 'Piso 4'";
                        $cont4=mysqli_query($conexion,$consulta);
                        $piso4 = 0;
                        while($row = mysqli_fetch_array($cont4))
                        {
                          $piso4 = $piso4 + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from gerencias where piso= 'Sotano 1' or piso='Sotano 2'";
                        $co=mysqli_query($conexion,$consulta);
                        $sotano = 0;
                        while($row = mysqli_fetch_array($co))
                        {
                          $sotano = $sotano + 1;
                        }
                    ?>
  <center> <a href="#" class='btn bg-navy btn-sm' data-toggle='modal'><span ></span>Total de Gerencias &nbsp;<span class="label label-danger"><?php echo $gerencias; ?></span></a>
  
  <br><br>
   </div> 
              <br>
<?php include('contador-gerencias.php');?>                 
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