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
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='fa fa-map-marker'>&nbsp;</span>Ubicacion</button></center>
				<br><div class="box box-primary">
			
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="#" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<div class="row form-group">
								
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Ubicacion:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" readonly name="nombre" value="<?php echo $row['nombre']; ?>">
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Siglas:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" readonly name="siglas" value="<?php echo $row['siglas']; ?>">
								</div>
							</div>
						</div> 
						</div>
						<div class="modal-footer">
							
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Informacion de Ubicacion</a>
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
