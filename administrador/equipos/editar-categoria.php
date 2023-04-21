<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->
<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="50" height="35" />'; 	?>
<div class="modal fade" id="categoria_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn btn-primary" type="button"> <span class='fa fa-list-alt'></span>&nbsp;Cambiar Categoria</button></center>
            </div> 
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/categoria.php?usu=<?php echo $row['imagen']; ?>" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Foto Actual:</label>
								</div>
								<div class="col-sm-10">
								<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="90" height="60" />';?>
								<?php echo  $imagen; ?>
								</div>
							</div>
                                           
                            <?php
                            $categoria=$row['id_categoria'];
                              switch ($categoria) { 
                                 case 1:
                                 $categoria='Equipos';
                                      break;
                               case 2:
                                  $categoria='Wifis';
                                      break;
                                case 3: 
                                  $categoria='Router';
                                      break;
                                case 4: 
                                   $categoria='Switch';
                                       break;
                                 case 5: 
                                     $categoria='Servidores';
                                        break;
                                   case 6: 
                                      $categoria='Materiales';
                                         break;
                          }
                          ?>




               <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Categoria Actual:</label>
					</div>
					<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $categoria; ?>" readonly>
					</div>
				</div>
						
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Categoria Nueva:</label>
					</div>
					


                    <div class="col-sm-10">
						
                        <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="id_categoria" required>
                                         <option>-- Seleccione la Categoria--</option>
                                         <option value="1">Equipos</option>
                                         <option value="2">Wifis</option>
                                         <option value="3">Routers</option>
                                         <option value="4">Switch</option>
                                         <option value="5">Servidores</option>
                                         <option value="6">Materiales</option>
                        </select>
                     </div>



                    
				</div>
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>Cambiar Perfil</a>
			</form>
            </div>
        </div>
    </div>
</div>
<!-------------------------------------------------------------------------------------------------   
  PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
  DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
  VENEZOLANA DE TELEVISION C.A 
  CANAL 8 
  0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->
