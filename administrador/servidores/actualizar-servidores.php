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
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='fa fa-server'>&nbsp;</span>Editar Servidor</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid"> 
			<form method="POST" action="sql/editar-servidor.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Servidor:</label>
								</div>
								<div class="col-sm-10">
								<?php  $imagen = '<img height="90" width="90" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								<?php echo  $imagen; ?>	
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Marca:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="marca" value="<?php echo $row['marca']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">IP:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="ip" value="<?php echo $row['ip']; ?>">
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

							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Mac Address:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="mac_address" value="<?php echo $row['mac_address']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Modelo:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="modelo" value="<?php echo $row['modelo']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Serial:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="seri" value="<?php echo $row['seri']; ?>" >
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Bien Nacioanl:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="bien_nacional" value="<?php echo $row['bien_nacional']; ?>">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Dirección Remota:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="remoto" value="<?php echo $row['remoto']; ?>" required>
								</div>
							</div>

						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar Servidor</a>
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
