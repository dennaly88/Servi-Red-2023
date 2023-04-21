<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<div class="modal fade" id="registro_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn btn-primary" type="button"><span class='fa  fa-map-marker'>&nbsp;</span>Registrar Ubicacion</button></h4></center>
            </div>
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-ubicacion.php" method="post" enctype="multipart/form-data">
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombre" required>
					</div> 
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Siglas:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="siglas" required>
					</div>
				</div>				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="ingresar_usuario" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span>Registrar Ubicacion</a>
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