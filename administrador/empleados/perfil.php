<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="50" height="35" />'; 	?>
<div class="modal fade" id="perfil_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header ">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-user'></span>&nbsp;Cambiar Perfil de Usuario</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/perfil.php?usu=<?php echo $row['imagen']; ?>" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Foto Actual:</label>
								</div>
								<div class="col-sm-10">
								<?php $imagen = '<img src="'.$row["imagen"].'" class="img-circle" width="80" height="80" />';?>
								<?php echo  $imagen; ?>
								</div>
							</div>
                            <?php 
										$perfil=$row['id_rol'];

																	switch ($perfil) { 
											case 1:
											$estado='Administrador';
										; 
												break;
											case 2:
												

												$estado='Coordinador'; 

												break;
											case 3: 
												$estado='Tecnico';
											
										break;
											
										}
                                 ?>                     


               <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Perfil Actual:</label>
					</div>
					<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $estado; ?>" readonly>
					</div>
				</div>
						
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Perfil Nuevo:</label>
					</div>
					<div class="col-sm-10">
					   <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="edit_rol" required>
					                  <option value="0">  SELECCIONE EL PERFIL  </option>
					                   <option value="1">Administrador</option>
										<option value="2">Coordinador</option>
										<option value="3">Basico</option>
					   </select>
					</div>
				</div>
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Cambiar Perfil</a>
			</form>
            </div>
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
