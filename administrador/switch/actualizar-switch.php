<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->		

<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Editar el Switch</button></center>
				<br><div class="box box-primary">
			</div> 
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-switch.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Switch:</label>
								</div>
								<div class="col-sm-10">
								<?php  $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								<?php echo  $imagen; ?>	
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Ip:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="ip" value="<?php echo $row['ip']; ?>">
								</div>
							</div>
							<div class="row form-group"> 
									<div class="col-sm-2">
									<label class="control-label modal-label">Mac Address:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="mac_address" value="<?php echo $row['mac_address']; ?>" required>
									</div> 
     						</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Usuario:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="usuario" value="<?php echo $row['usuario']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Clave:</label>
								</div>
								<div class="col-sm-10">
									<input type="password" class="form-control" name="clave" value="<?php echo $row['clave']; ?>" required>
								</div>
							</div>
							<?php
							$ubicacion_t= $row["id_ubicacion"];
									switch ($ubicacion_t) { 
									case 1: $ub='Sotano 2';
									break;
									case 2: $ub='Sotano 1'; 
									break;
									case 3: $ub='Planta Baja';
									break;
									case 4: $ub='Piso 1';
									break;
									case 5: $ub='Piso 2';
									break;
									case 6: $ub='Piso 3';
									break;
									case 7: $ub='Piso 4';
									break;
									case 8: $ub='Telepuertos';
									break; 
									}          
                               ?>	
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Ubicacion Actual:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="ubicacion" value="<?php echo $ub; ?>" readonly>
								</div>
							</div>	
							<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Ubicacion Nueva:</label>
					</div>
					<div class="col-sm-10">
					     <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="ubicacion" required>
						                <option value="">Selecciona una opción</option>
					                    <option value="1">Sotano 2</option>
										<option value="2">Sotano 1</option>
										<option value="3">Planta Baja</option>
										<option value="4">Piso 1</option>
										<option value="5">Piso 2</option>
										<option value="6">Piso 3</option>
										<option value="7">Piso 4</option>
										<option value="8">Telepuerto</option>
					   </select>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dirección Remota:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="remoto" placeholder="Ingrese la Dirección Remoto" value="<?php echo $row['remoto']; ?>"  required>
					</div>
				</div>


						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar Wifi</a>
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
