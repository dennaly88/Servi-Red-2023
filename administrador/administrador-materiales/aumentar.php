<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->		

<div class="modal fade" id="aumentar_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Aumentar el Material</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/aumentar-materiales.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<input type="hidden" class="form-control" name="edit_asignado" value="<?php echo $row['asignado']; ?>">
							
							<input type="hidden" class="form-control" name="cantidad" value="<?php echo $row['cantidad']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Material:</label>
								</div>
								<div class="col-sm-10">
							
								<?php $imagen = $row["imagen"];?>
								<?php echo  $imagen; ?>	
								</div>
							</div>
							<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Asignado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="edit_asignado" value="JULIO CESAR CONTRERAS" readonly>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gerencia:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="edit_gerencia" value="TECNOLOGIA" readonly>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">División:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="edit_division" value="REDES Y SERVIDORES" readonly>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cargo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="edit_cargo" value="JEFE DE DIVISION" readonly>
					</div>
				</div>	
				<div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">ID Material</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="edit_material" value="<?php echo $row['id']; ?>" readonly>
						</div>
				</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Nombre:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_nombre" value="<?php echo $row['nombre']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Unidad:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_unidad" value="<?php echo $row['unidad']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Actual:</label>
									</div>
									<div class="col-sm-10">
										<input type="number" min="0" max="10000" class="form-control" name="cantidad_inicial" value="<?php echo $row['cantidad']; ?>"readonly >
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Aumentar:</label>
									</div>
									<div class="col-sm-10">
										<input type="number" min="0" max="10000" class="form-control" name="cantidad_modificar"  required>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Fecha:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_fecha" value="<?php echo  date('Y-m-d');?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Responsable:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_responsable" value="<?php echo $row['responsable']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Status:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_status" value="<?php echo $row['status']; ?>" readonly>
									</div>
							</div>
							
							
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Aumentar Material</a>
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
