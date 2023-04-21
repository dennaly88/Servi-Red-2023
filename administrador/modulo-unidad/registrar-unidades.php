<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<div class="modal fade" id="unidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		
            <div class="modal-header"> 
			
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-upload'>&nbsp;</span>Crear Unidad</button></h4></center>
<br>
				<div class="box box-primary"><br>
				</div>
				
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-unidad.php" method="post" enctype="multipart/form-data">
				
				
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Unidad:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="unidad" placeholder="Ingresar Nombre de la Unidad" required>
					</div> 
				</div>
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Siglas:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="siglas" placeholder="Ingresar la Sigla de la Unidad" required>
					</div> 
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="ingresar_usuario" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-disk"></span>Guardar</a>
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