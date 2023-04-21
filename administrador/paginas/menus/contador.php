<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->

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
                  $consulta="SELECT * from Division";
                  $resulta=mysqli_query($conexion,$consulta);
                  $divisiones = 0;
                  while($row = mysqli_fetch_array($resulta))
                  {
                    $divisiones = $divisiones + 1;
                  }
  
                   ?>
                    <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from empleados";
                        $result=mysqli_query($conexion,$consulta);
                        $empleados = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $empleados = $empleados + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from gerencias";
                        $result=mysqli_query($conexion,$consulta);
                        $gerencias = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $gerencias = $gerencias + 1;
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
                        include('sql/conexion.php');
                        $consulta="SELECT * from roles";
                        $result=mysqli_query($conexion,$consulta);
                        $roles = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $roles = $roles + 1;
                        }
                    ?>
                     <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from unidad";
                        $result=mysqli_query($conexion,$consulta);
                        $unidades = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $unidades = $unidades + 1;
                        }
                    ?>
                 <?php
                        include('sql/conexion.php');
                        $consulta="SELECT * from sistemas_operativos";
                        $result=mysqli_query($conexion,$consulta);
                        $sistemas = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $sistemas = $sistemas + 1;
                        }
                    ?>
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
                        $consulta="SELECT * from administrador_equipos";
                        $result=mysqli_query($conexion,$consulta);
                        $administrador_equipos = 0;
                        while($row = mysqli_fetch_array($result))
                        {
                          $administrador_equipos = $administrador_equipos + 1;
                        }
                    ?>




<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->