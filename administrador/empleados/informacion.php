<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->		
<div class="modal fade" id="informacion_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Información del Empleado</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="#" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Usuario</label>
								</div>
								<div class="col-sm-10">
								<?php 
								   $imagen = '<img class="img-circle" width="88" height="88" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								<?php echo  $imagen; ?>	
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Nombres:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_nombres" value="<?php echo $row['nombres']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Apellidos:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_apellidos" value="<?php echo $row['apellidos']; ?>"  readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Cedula:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_cedula" value="<?php echo $row['cedula']; ?>"  readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Correo:</label>
								</div>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="edit_corre" value="<?php echo $row['corre'];?> "  readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Telefono:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_telefono" value="<?php echo $row['telefono']; ?>"  readonly>
								</div>
							</div>
					  <div class="row form-group">
						<div class="col-sm-2">
							<label class="control-label modal-label">Fecha de Ingreso:</label>
							</div>
							<div class="col-sm-10">
							         <input type="text" class="form-control" name="edit_fecha_ingreso" value="<?php echo $row['fecha_ingreso']; ?>" readonly>
							</div>
							</div>	
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Direccion:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_direccion" value="<?php echo $row['direccion']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Gerencia:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_division" value="<?php echo $row['gerencia']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">División:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_division" value="<?php echo $row['division']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Cargo:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_cargo" value="<?php echo $row['cargo']; ?>" readonly>
								</div>
							</div>



						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Información del Empleado</a>
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