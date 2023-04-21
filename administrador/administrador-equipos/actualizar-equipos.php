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
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Editar Equipo</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-ad-equipos.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Usuario</label>
								</div>
								<div class="col-sm-10">
								<?php $imagen = $row["imagen_empleado"];?>
								<?php echo  $imagen; ?>	
								</div>
							</div>


							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Asignado</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_empleado" value="<?php echo $row['empleado']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Equipo:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_equipo" value="<?php echo $row['nombre']; ?>"readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Marca Actual:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_equipo" value="<?php echo $row['marca']; ?>"readonly>
									</div>
							</div>
							
							<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Nueva Marca:</label>
					</div>
					<?php
                                $sql="SELECT * from marcas";
                                $resultados=mysqli_query($conexion,$sql);
                      ?>
					       
							<div class="col-sm-10">
                           <select type="text" class="form-control" id="edit_marca" name= "edit_marca" required>
                           <option value="">Selecciona una opción</option>
						   <?php echo $row['marca']; ?>
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
										<input type="text" class="form-control" name="edit_modelo" value="<?php echo $row['modelo']; ?>">
									</div>
							</div>
							
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Serial:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_serial" value="<?php echo $row['seri']; ?>">
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Bien Nacional:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_bien_nacional" value="<?php echo $row['bien_nacional']; ?>" >
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Responsable:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_responsable" value="<?php echo $row['responsable']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Fecha:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_fecha" value="<?php echo $row['fecha']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Status:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_status" value="Editado" readonly>
									</div>
							</div>
							
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar Usuario</a>
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
