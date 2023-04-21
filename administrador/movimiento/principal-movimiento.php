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
                  <h3 class="box-title">INTERFAZ DE MOVIMIENTOS</h3>
                </div>
                <div class="box-body">
<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&6 -->
<?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from materiales";
                        $result=mysqli_query($conexion,$consulta);
                        $materiales = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $materiales = $materiales + 1;
                        }
                    ?>

                    <?php
                  include('sql/conexion.php');
                  $consulta="SELECT * from usuarios";
                  $result=mysqli_query($conexion,$consulta);
                  $usuarios = 0;
                  while($row = mysqli_fetch_array($result))
                  {
                    $usuarios = $usuarios + 1;
                  }
  
                   ?>
                   
                   <?php
                       include('sql/conexion.php');
                        $consulta="SELECT * from marcas";
                        $result=mysqli_query($conexion,$consulta);
                        $marcas = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $marcas = $marcas + 1;
                        }
                    ?>
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

                      <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from wifi";
                        $result=mysqli_query($conexion,$consulta);
                        $wifi = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $wifi = $wifi + 1;
                        }
                    ?>

                 <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from switch ";
                        $result=mysqli_query($conexion,$consulta);
                        $switch = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $switch = $switch + 1;
                        }
                    ?>
                   <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from router";
                        $result=mysqli_query($conexion,$consulta);
                        $router = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $router = $router + 1;
                        }
                    ?>
                      <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from servidor";
                        $result=mysqli_query($conexion,$consulta);
                        $servidores = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $servidores = $servidores + 1;
                        }
                    ?>








<!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&6 -->
<!--<section class="content">  -->  
    <div class="row">
      <div class="col-lg-6 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>
            <?php echo $equipos; ?>
            </h3>
            <p>
              EQUIPOS 
            </p>
          </div>
          <div class="icon">
            <i class="ion-ios-monitor-outline"></i>
            <i class="ion-android-phone-portrait"></i>
            <i class="ion-android-phone-landscape"></i>
          </div>
          <a href="../movimiento-equipos/principal.php" class="small-box-footer">
         Entrar  &nbsp;<i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-6 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>
            <?php echo $materiales; ?><sup style="font-size: 20px"></sup>
            </h3>
            <p>
              MATERIALES
            </p>
          </div>
          <div class="icon">
            <i class="ion-clipboard"></i>
          </div>
          <a href="../movimiento-materiales/principal.php" class="small-box-footer">
          Mas Informacion &nbsp; <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <!--<div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>
            <?php echo $marcas; ?>
            </h3>
            <p>
              MARCAS
            </p> 
          </div>
          <div class="icon">
            <i class="ion ion-ios-pricetags-outline"></i>
          </div>
          <a href="#" class="small-box-footer">
          Ver &nbsp;<i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-red">
          <div class="inner">
            <h3>
            <?php echo $wifi; ?>
            </h3>
            <p>
              EQUIPOS INALAMBRICOS
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-wifi"></i>
          </div>
          <a href="#" class="small-box-footer">
          Entrar &nbsp;<i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div> -->
   <!-- <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>
            <?php echo $router; ?>
            </h3>
            <p>
              ROUTERS
            </p>
          </div>
          <div class="icon">
            <i class="ion ionicons ion-ios-albums-outline"></i>
          </div>
          <a href="#" class="small-box-footer">
            Entrar  &nbsp;<i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-purple">
          <div class="inner">
            <h3>
            <?php echo $servidores; ?><sup style="font-size: 20px"></sup>
            </h3>
            <p>
              SERVIDORES
            </p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-toggle"></i>
          </div>
          <a href="#" class="small-box-footer">
            Ver &nbsp;<i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-teal">
          <div class="inner">
            <h3>
            <?php echo $switch; ?>
            </h3>
            <p>
              SWITCH
            </p>
          </div>
          <div class="icon">
            <i class="ion ionicons ion-android-options"></i>
          </div>
          <a href="#" class="small-box-footer">
            Entrar &nbsp;<i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-maroon">
          <div class="inner">
            <h3>
            <?php echo $usuarios; ?>
            </h3>
            <p>
              USUARIOS REGISTRADOS
            </p>
          </div> 
          <div class="icon">
            
            <i class="ion-person-stalker"></i>
          </div>
          <a href="#" class="small-box-footer">
            Entrar &nbsp;<i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div> -->

    <!--&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&-->         
      </div> 
  <br><br>
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