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
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-user'>&nbsp;</span>Registrar Material</button></h4></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-ad-materiales.php" method="post" enctype="multipart/form-data">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Asignado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="asignado" value="JULIO CESAR CONTRERAS" readonly>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Gerencia:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="gerencia" value="TECNOLOGIA" readonly>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">División:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="division" value="REDES Y SERVIDORES" readonly>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cargo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cargo" value="JEFE DE DIVISION" readonly>
					</div>
				</div>	
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Material:</label>
					</div>
							<div class="col-sm-10">
                <select type="text" class="form-control" id="nombre" name="nombre" required>
				<option value="">Selecciona una opción</option>
                         <?php
                               while($mostrar=mysqli_fetch_array($materiales)) {
								$imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
 
                           echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";


                                }
                           ?>
                 </select>
	</div> 
</div>	


           <div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Medición:</label>
					</div>
					       
							<div class="col-sm-10">
                           <select type="text" class="form-control" id="unidad" name= "unidad" required>
						   <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($unidad)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
                                </select>
					</div> 
				</div>	


				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cantidad:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" min="0" max="10000" class="form-control" name="cantidad" required>
					</div>
				</div>	

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fecha:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fecha" value="<?php echo  date('Y-m-d');?>" readonly>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Responsable:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="responsable" value="<?php echo $_SESSION['nombres']; ?>" readonly>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="status" value="Registrado" readonly>
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