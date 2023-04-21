<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->		
<?php $imagen = '<img src="'.$row["imagen"].'" class="img-thumbnail" width="50" height="35" />';?>
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Ver Perfil</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-usuario.php?usu=<?php echo $row['imagen']; ?>" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Perfil:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_apellidos" value="<?php echo $row['nombre']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Siglas:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_telefono" value="<?php echo $row['siglas']; ?>" readonly>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Roles:</label>
								</div>
								<div class="col-sm-10">
									<input type="email" class="form-control" name="edit_correo" value="<?php echo $row['permisos']; ?>" readonly >
								</div>
							</div>
							
					
							
							
							
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							
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
