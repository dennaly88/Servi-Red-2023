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
               <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-hdd-o'>&nbsp;</span>Registrar Router</button></h4></center>
			   <br><div class="box box-primary">
			</div>
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-router.php" method="post" enctype="multipart/form-data">
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Router:</label>
					</div>
					<div class="col-sm-10">
					<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL" required>
						
					</div>
				</div>
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">IP:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ip"  placeholder="Ingrese la IP" required> 
					</div> 
				</div>
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Mac Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mac_address"  placeholder="Ingrese la Mac Address" required>
					</div> 
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Usuario:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="usuario" placeholder="Ingrese el Usuario" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Clave de Administrador:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="clave_administrador" placeholder="Ingrese la Clave de Administrador" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">SSID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ssid" placeholder="Ingrese el SSID" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Clave de Paso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="clave_paso" placeholder="Ingrese la Clave de Paso" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Ubicación:</label>
					</div>
					<div class="col-sm-10">
						
					   <select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="ubicacion"  placeholder="Ingrese la Ubicación" required>
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
						<label class="control-label modal-label">Ubicacion Geografica:</label>
					</div>
					<div class="col-sm-10">
<input type="file" id="ubicacion-geografica" name="ubicacion-geografica" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="UBICACION " required>			
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dirección Remota:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="remoto" placeholder="Ingrese la Dirección Remoto" required>
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