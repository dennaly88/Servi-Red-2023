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
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-user'>&nbsp;</span>Registrar Equipo</button></h4></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-ad-equipos.php" method="post" enctype="multipart/form-data">
				





				
                        

				   <div class="row form-group">
					<div class="col-sm-2">
					     <label class="control-label modal-label">Asignar:</label>
					</div>
					<div class="col-sm-10">
						<input type="text"class="form-control" name="empleado" readonly value="JULIO CESAR">
					</div>
				</div>


				 
 
		 <div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Equipo:</label>
					</div>
					       
							<div class="col-sm-10">
                           <select type="text" class="form-control" id="equipo" name= "equipo" required>
						   <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($resulta)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
                                </select>
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
                               while($mostrar=mysqli_fetch_array($resultados)) {
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
						<input type="text"class="form-control" name="modelo" required>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Serial:</label>
					</div>
					<div class="col-sm-10">
						<input type="text"class="form-control" name="seri" required>
					</div>
				</div>	
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Bien Nacional:</label>
					</div>
					<div class="col-sm-10">
						<input type="text"class="form-control" name="bien_nacional" required>
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
						<label class="control-label modal-label">Fecha:</label>
					</div>
					<div class="col-sm-10">
						<input type="date"class="form-control" name="fecha" value="<?php echo  date('Y-m-d');?>" readonly>
					</div>
				</div>	
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Status:</label>
					</div>
					<div class="col-sm-10">
						<input type="text"class="form-control" name="status" value="Registrado" readonly>
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