<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
          
            <aside class="main-sidebar">c
                        <section class="sidebar wrapper" >
                                    <div class="user-panel">
                                    <div class="pull-left image">    
                                    <?php echo ' <img class="img-circle" alt="User Image" src="data:image/jpeg;base64,'.base64_encode($_SESSION["imagen"]).'"/>'  ?>   
                                          <a href="#"><i class="fa fa-circle text-success"></i>En Línea</a>
                                    </div>
                                          <div class="pull-left info">
                                                <p>
                                                   <span class="hidden-xs"><?php echo  "    " .$_SESSION['nombres']; ?><?php echo  "    " . $_SESSION['apellidos']; ?>  
                                                </p>    
                                          </div>   
                                    </div>
                                    <?php include 'contador.php';?>
                                          <li class="treeview">
                                                <a href="../principal/index.php">
                                                <i class="fa fa-home"></i> &nbsp;Inicio
                                                </a>         
                                          </li><br>
                                    <ul class="sidebar-menu">         
                                          <li class="header">SEGURIDAD</li> 
                                          <li class="treeview">
                                                                  <a href="#">
                                                                        <i class="fa fa-cog"></i> <span>Configuración</span>
                                                                        <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                             <ul class="treeview-menu">
                                                                  
                                                                  
                                                                 
                                                                  
                                                                  <li class="treeview">
                                                                        <a href="../gerencias/principal.php">
                                                                        <i class="fa fa-outdent" aria-hidden="true"></i>Gerencias<span class="label bg-yellow pull-right"><?php echo $gerencias; ?></span>
                                                                        </a>         
                                                                  </li>
                                                                  <li class="treeview">
                                                                        <a href="../divisiones/principal.php">
                                                                        <i class="fa fa-list" aria-hidden="true"></i>Divisiones<span class="label label-success pull-right"><?php echo $divisiones; ?></span>
                                                                        </a>         
                                                                  </li>
                                                                  

                                                                  <li class="treeview">                   
                                                                  <a href="http://192.168.7.238:8080/SERVI-RED/#/" target='_blank'>
                                                                  
                                                                              <i class="fa  fa-terminal"></i>Consola<span class="label bg-maroon pull-right">Acceso Remoto</span>
                                                                        </a>   
                                                      
                                                                  </li>                        
                                                             </ul>
                                          </li>
                                    </ul>
                                          <ul class="sidebar-menu">         
                                                <li class="header">ADMINISTRAR</li> 
                                                      <li class="treeview">
                                                                              <a href="#">
                                                                                    <i class="fa fa-th-large"></i> <span>Clasificación</span>
                                                                                    <i class="fa fa-angle-left pull-right"></i>
                                                                              </a>
                                                      <ul class="treeview-menu">
                                                           
                                                                  <li class="treeview">
                                                                        <a href="../materiales/principal.php">
                                                                        <i class="fa fa-clipboard"></i>
                                                                                    Tipos de Materiales<span class="label label-danger pull-right"><?php echo $materiales; ?></span>
                                                                        </a>         
                                                                  </li>
                                                                  <li>
                                                                        <a href="../equipos/principal.php">
                                                                        <i class="fa fa-laptop"></i> 
                                                                        Tipos de Equipos<span class="label label-success pull-right"><?php echo $equipos; ?></span> 
                                                                        </a>    
                                                                  </li> 
                                                                  <li>
                                                                        <a href="../servicios/principal.php">
                                                                        <i class="fa fa-upload"></i> 
                                                                        Tipos de Servicios<span class="label label-primary pull-right"><?php echo $servicios; ?></span> 
                                                                        </a>    
                                                                  </li>   
                                                                    
                                                                  
                                                                  
                                                            
                                                      </ul>
                                                </li>
                                          </ul>
                                          <ul class="sidebar-menu">         
                                          <li class="header">PROCESOS</li> 
                                                <li class="treeview">
                                                            <a href="#">          
                                                                   <i class="fa fa-pencil-square-o"></i>Control de Equipos y Materiales
                                                                  
                                                            </a>
                                                <ul class="treeview-menu"> 
                                                      <li class="treeview">
                                                            <a href="../administrador-materiales/principal.php"">
                                                                  <i class="fa fa-indent"></i>
                                                                        Materiales<span class="label bg-yellow pull-right"><?php echo $marcas; ?></span>
                                                            </a>    
                                                      </li>
                                                            <li class="treeview">
                                                            <a href="../administrador-equipos/principal.php"">
                                                                  <i class="fa fa-clipboard"></i>
                                                                              Equipos<span class="label label-danger pull-right"><?php echo $materiales; ?></span>
                                                                  </a>         
                                                            </li>                     
                                                </ul>
                                                </li>
                                          </ul>
                                          <ul class="sidebar-menu">
                                                <li class="header">REDES</li> 
                                                      <li class="treeview">
                                                                  <a href="#">
                                                                  <i class="fa fa-sitemap"></i> <span>Redes</span>
                                                                  <i class="fa fa-angle-left pull-right"></i>
                                                                  </a>
                                                                  <ul class="treeview-menu">
                                                                        <li class="treeview">
                                                                              <a href="../wifi/principal.php">
                                                                              <i class="fa fa-wifi"></i> 
                                                                              Equipos Inalambrico<span class="label label-info pull-right"><?php echo $wifi; ?></span>
                                                                              </a>           
                                                                        </li>
                                                                        <li class="treeview">
                                                                              <a href="../switch/principal.php">
                                                                              <i class=" fa fa-tasks"></i>
                                                                                    Switch<span class="label label-danger pull-right"><?php echo $switch; ?></span>
                                                                              </a>   
                                                                        </li>
                                                                        <li>
                                                                              <a href="../routers/principal.php">
                                                                              <i class="fa fa-hdd-o"></i>
                                                                              Routers<span class="label label-success pull-right"><?php echo $router; ?></span>
                                                                              </a>    
                                                                        </li>
                                                                  </ul>
                                                      </li>
                                                </li>

                                          </ul>
                                    <ul class="sidebar-menu">
                                          <li class="header">SERVIDORES</li>    
                                          <li class="treeview">
                                                            <a href="#">
                                                                  <i class="fa fa-server"></i> <span>Servidores</span>
                                                                  <i class="fa fa-angle-left pull-right"></i>
                                                            </a>
                                                <ul class="treeview-menu">    
                                                      <li class=" treeview">
                                                            <a href="../servidores/principal.php">
                                                                   <i class="fa fa-sliders"></i>
                                                                  Servidores<span class="label label-warning pull-right"><?php echo $servidores; ?></span>
                                                            </a>
                                                      </li>
                                                      
                                                </ul>
                                          </li>
                                    </ul>
                                  
                                          </li>
                                    </ul>
                                    <ul class="sidebar-menu">
                                          <li class="header">OPCIONES</li>    
                                          <li class="treeview">
                                                            <a href="#">
                                                                  <i class="fa fa-info-circle"></i> <span>Opciones</span>
                                                                  <i class="fa fa-angle-left pull-right"></i>
                                                            </a>
                                                <ul class="treeview-menu"> 
                                                <li>
                                                      <a href="http://localhost/cuerpo/index.php">
                                                            <i class="fa fa-info-circle"></i> <span>Pagina Principal</span> 
                                                      </a>             
                                                </li>  
                                                <li>
                                                      <a href="../acerca/principal.php">
                                                            <i class="fa fa-info-circle"></i> <span>Acerca de </span> 
                                                      </a>             
                                                </li>
                                               
                                                <li>
                                                      <a href="../../login/seguridad/destruir-sesion.php">
                                                            <i class="fa fa-power-off"></i> <span>Salir</span> 
                                                      </a>        
                                                </li>  



                                                  
                                          </li>       
                                    </ul>
                              </ul>
                                    <center><a href="#" class="logo"><img src="../imagenes-general/logo-admin.png" alt="logo"></a>
                        </section>
            </aside>
            
      
<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->