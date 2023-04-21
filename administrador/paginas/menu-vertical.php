<li class="user-header"><br>
                          <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($_SESSION["imagen"]).'" class="user-image" alt="User Image">'  ?>
                          <br><?php $imagen = $row["imagen"];?>
								          <?php echo  $imagen; ?>	 
                          <p><?php echo  "    " . $_SESSION['usuario']; ?><br><?php echo  "    " .$perfil; ?>
                          <small><?php date_default_timezone_set("America/Caracas");$hora = date('h:i a',time() - 3600*date('I'));print "&nbsp;$hora&nbsp;"; ?>
                          <?php echo  date("d-m-Y");?>
                          </small></p>
                          </li>
                                          <li class="user-footer">
                                                <div class="pull-left">
                                                  <a href="../../login/seguridad/destruir-sesion.php" class="btn btn-danger btn-flat">Salir</a>
                                                </div>
                                                <div class="pull-right">
                                                  <a href="../../cuerpo/index.php" class="btn btn-primary btn-flat">Pagina Principal</a>
                                                </div>
                                          </li>
                                    </ul>
                    </li>