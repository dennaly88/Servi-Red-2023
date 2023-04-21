<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->		

<div class="modal fade" id="disminucion_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-edit'>&nbsp;</span>Asignar Material</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/disminuir-materiales.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">
							<input type="hidden" class="form-control" name="cantidad" value="<?php echo $row['cantidad']; ?>">
							<input type="hidden" class="form-control" name="id_material" value="<?php echo $row['id']; ?>" >
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Material:</label>
								</div>
								<div class="col-sm-10">
								<?php $imagen = $row["imagen"];?>
								<?php echo  $imagen; ?>	
								</div>
							</div>

							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Nombre:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_nombre" value="<?php echo $row['nombre']; ?>" readonly>
									</div>
							</div>


			<div class="row form-group"> 
					<div class="col-sm-2">
						   <label class="control-label modal-label">Empledos:</label>
					</div>
                     <?php
                            $sql="SELECT * from empleados";
                            $empleados=mysqli_query($conexion,$sql);
                        ?>
					       
					    <div class="col-sm-10">
                           <select type="text" class="form-control" id="empleados" name= "empleados" placeholder=""required> 
                           <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($empleados)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] ."</option>";
                                }
                                ?>
                                </select>
			            </div> 
				</div>

<!--------------


			<div class="row form-group"> 
					<div class="col-sm-2">
						   <label class="control-label modal-label">Gerencias:</label>
					</div>
                     <?php
                          //  $sql="SELECT * from gerencias";
                            //$gerencias=mysqli_query($conexion,$sql);
                        ?>
					       
					    <div class="col-sm-10">
                           <select type="text" class="form-control" id="gerencia" name= "gerencia" placeholder=""required> 
                           <option value="">Selecciona una opción</option>
                           <?php
                              // while($mostrar=mysqli_fetch_array($gerencias)) {
                                //    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] ."</option>";
                               // }
                                ?>
                                </select>
			            </div> 
				</div>

------>	

<!--------------


				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Divisíon:</label>
					</div>
                    <?php
                               // $sql="SELECT * from Division";
                                //$divisiones=mysqli_query($conexion,$sql);
                      ?>
					       
					<div class="col-sm-10">
                           <select type="text" class="form-control" id="division" name= "division" placeholder="Ingresar Nombre del Servicio"required> 
                           <option value="">Selecciona una opción</option>
                           <?php
                               //while($mostrar=mysqli_fetch_array($divisiones)) {
                                //    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] ."</option>";
                               // }
                                ?>
                                </select>
					</div> 
				</div>
------>	
<!--------------

                <div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Cargos:</label>
					</div>
                    <?php
                            //    $sql="SELECT * from cargos";
                             //   $cargos=mysqli_query($conexion,$sql);
                      ?>
					       
					<div class="col-sm-10">
                           <select type="text" class="form-control" id="cargos" name= "cargos" placeholder="Ingresar Nombre del Servicio"required> 
                           <option value="">Selecciona una opción</option>
						   <?php
                               //while($mostrar=mysqli_fetch_array($cargos)) {
                                 //   echo "<option values" . $mostrar['id'] . ">" . $mostrar['cargo'] ."</option>";
                                //}
                                ?>
                                </select>
					</div> 
				</div>
					------>			
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Unidad:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_unidad" value="<?php echo $row['unidad']; ?>" readonly>
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Actual:</label>
									</div>
									<div class="col-sm-10">
										<input type="number" min="0" max="10000" class="form-control" name="cantidad_inicial" value="<?php echo $row['cantidad']; ?>"readonly >
									</div>
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Disminuir:</label>
									</div>
									<div class="col-sm-10">
										<input type="number" min="0" max="100000" class="form-control" name="cantidad_modificar" required>
									</div>  
							</div>
							<div class="row form-group">
									<div class="col-sm-2">
										<label class="control-label modal-label">Fecha:</label>
									</div>
									<div class="col-sm-10">
										<input type="text" class="form-control" name="edit_fecha" value="<?php echo  date('Y-m-d');?>" readonly>
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
										
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Disminuir Material</a>
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
