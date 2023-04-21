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
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='fa  fa fa-pencil'>&nbsp;</span>Editar Unidades</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-unidad.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>" readonly>
							<div class="row form-group">
								
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Unidad:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>" required>
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Siglas:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="siglas" value="<?php echo $row['siglas']; ?>" required>
								</div>
							</div>
						</div> 
						</div>
						<div class="modal-footer">
							
						<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="ingresar_usuario" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span>Editar</a>
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
