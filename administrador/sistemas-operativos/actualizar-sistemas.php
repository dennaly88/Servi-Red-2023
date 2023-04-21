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
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Editar Sistemas Operativos</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-sistemas.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							
							
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Sistema Operativo</label>
								</div>
								<div class="col-sm-10">
								<?php  $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								<?php echo  $imagen; ?>	
								</div>
							</div>
							<?php
							$clasificación=$row['id_clasificación'];
							switch ($clasificación) { 
						 case 1:
							 $nombre_clasificacion='Dos'; 
							break;
						 case 2:
							 $nombre_clasificacion='UNIX'; 
							break;
						 case 3: 
							 $nombre_clasificacion='WINDOWS';
							break;
							case 4: 
							  $nombre_clasificacion='GNU/LINUX';
							 break;
							 case 5: 
							  $nombre_clasificacion='MAC OS';
							 break;
						  }
					?>
					
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Clasificación Actual:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="#" value='<?php echo $nombre_clasificacion; ?>'  readonly>
								</div>
							</div>





							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Version:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="nombre" value="<?php echo $row['nombre']; ?>" readonly>
								</div>
							</div>
				    

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Version Nueva</label>
					</div> 
					
					<?php
                                $sql="SELECT * from distribucion";
                                $distri=mysqli_query($conexion,$sql);
                      ?>

				 
					
			<div class="col-sm-10">
								<select type="text" class="form-control" id="nombre" name="nombre" required>
								<option value="">Selecciona una opción</option>
										<?php
											while($mostrar=mysqli_fetch_array($distri)) {
												$imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
				
										echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";


												}
										?>
								</select>
	                     </div> 
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
