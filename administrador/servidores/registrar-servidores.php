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
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-server'>&nbsp;</span>Registrar Servidor</button></h4></center>
				<br><div class="box box-primary"> 
			</div>
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-servidor.php" method="post" enctype="multipart/form-data">


				<div class="row form-group"> 
					   <div class="col-sm-2">
						         <label class="control-label modal-label">Servicio:</label>
					   </div>
						   <div class="col-sm-10">
								<select type="text" class="form-control" id="servicio" name= "servicio" required>
								<option value="">Selecciona una opción</option>
								<?php
									while($mostrar=mysqli_fetch_array($ser)) {
											echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
										}
										?>
								</select>
					       </div> 
				</div>	


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">IP:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ip" placeholder="Ingrese la IP" required>
					</div>
				</div>

				
                <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Usuario:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="usuario" placeholder="Ingrese el Usuario del Servidor" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Clave:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control" name="clave" placeholder="Ingrese la Clave" required>
					</div>
				</div>
               
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Mac Address:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="mac_address" placeholder="Ingrese la Mac Address" required>
					</div>
				</div>



				<div class="row form-group"> 
						<div class="col-sm-2">
							<label class="control-label modal-label">Marca:</label>
						</div>
							
								<div class="col-sm-10">
							<select type="text" class="form-control" id="marca" name= "marca" required>
							<option value="">Selecciona una opción</option>
							<?php
								while($mostrar=mysqli_fetch_array($mar)) {
										echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] . "</option>";
									}
									?>
									</select>
						</div> 
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Modelo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="modelo" placeholder="Ingrese el Modelo"required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Serial:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="seri" placeholder="Ingrese el Serial" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Bien Nacional:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="bien_nacional" placeholder="Ingrese el Bien Nacioanl" required>
					</div>
				</div>

				<div class="row form-group"> 
						<div class="col-sm-2">
							<label class="control-label modal-label">Sistema Operativo:</label>
						</div>
							
								<div class="col-sm-10">
							<select type="text" class="form-control" id="sistema_operativo" name= "sistema_operativo" required>
							<option value="">Selecciona una opción</option>
							<?php
								while($mostrar=mysqli_fetch_array($res)) {
										echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
									}
									?>
									</select>
						</div> 
				</div>
				
				

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Foto:</label>
					</div>
					<div class="col-sm-10">
					<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL">
						
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