<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->		

<div class="modal fade" id="asignar_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Asignar Equipo</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/asignar-equipos.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
						


 



							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Usuario Actual</label>
								</div>
								<div class="col-sm-10">
								<?php $imagen = $row["imagen_empleado"];?>
								<?php echo  $imagen; ?>	
								</div>
							</div>


			<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Asignar:</label>
					</div>


					<?php
                                $sql="SELECT * from empleados";
                                $resul=mysqli_query($conexion,$sql);
                       ?>

					<div class="col-sm-10">
                            <select type="text" class="form-control" id="empleado" name="empleado" required>
                                    <option selected>SELECCIONE EL RESPONSABLE</option>
                         <?php
                               while($mostrar=mysqli_fetch_array($resul)) {
								$imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';

                           echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] . "</option>";

                                } 
                           ?>
                           </select>
	                    </div> 
                   </div>	
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Equipo:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>"readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Marca:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="marca" value="<?php echo $row['marca']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Modelo:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="modelo" value="<?php echo $row['modelo']; ?>"readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Serial:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="serial" value="<?php echo $row['seri']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Bien Nacional:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="bien_nacional" value="<?php echo $row['bien_nacional']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Responsable:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="responsable" value="<?php echo $row['responsable']; ?>" readonly>
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
										<label class="control-label modal-label">Status:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="status" value="Asignado" readonly>
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
