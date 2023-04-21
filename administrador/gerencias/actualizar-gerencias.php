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
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='fa fa-outdent'>&nbsp;</span>Editar Gerencia</button></center>
				<br><div class="box box-primary">
			</div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/editar-gerencias.php?usu=<?php echo $row['imagen']; ?>" enctype="multipart/form-data">
			<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">		
							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Nombre:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="edit_nombres" value="<?php echo $row['nombres']; ?>" required>
								</div>
							</div>
							



							<?php
                                $sql="SELECT * from ubicacion";
                                $re=mysqli_query($conexion,$sql);
                      ?>


							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Ubicación:</label>
								</div>
								<div class="col-sm-10">
                           <select type="text" class="form-control" id="edit_piso" name= "edit_piso" placeholder="Ingresar Nombre del Servicio"required> 
                           <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($re)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombre'] . "</option>";
                                }
                                ?>
                                </select>
					</div> 
							</div>
							
						</div> 
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Actualizar</a>
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
