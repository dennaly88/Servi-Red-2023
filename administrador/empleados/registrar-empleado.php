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
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-user'>&nbsp;</span>Registrar Empleado</button></h4></center>
<br>
				<div class="box box-primary"><br>
				</div>
				  
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-empleado.php" method="post" enctype="multipart/form-data">
				
				
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Nombres:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nombres" placeholder="Ingresar Nombres" required>
					</div> 
				</div>


				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Apellidos:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="apellidos" placeholder="Ingresar Apellidos" required>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Cedula:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cedula" placeholder="Ingresar Cedula" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Correo:</label>
					</div>
					<div class="col-sm-10">
						<input type="email" class="form-control" name="corre" placeholder="Ingresar Correo Eletronico" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Telefono:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="telefono" placeholder="Ingresar Telefono" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Fecha de Ingreso:</label>
					</div>
					<div class="col-sm-10">
						<input type="date" class="form-control" name="fecha_ingreso" placeholder="Ingresar la Fecha de Ingreso" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Dirección:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="direccion" placeholder="Ingresar la Dirección" required>
					</div>
				</div>
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Gerencias:</label>
					</div>
                    <?php
                                $sql="SELECT * from gerencias";
                                $gerencias=mysqli_query($conexion,$sql);
                      ?>
					       
					<div class="col-sm-10">
                           <select type="text" class="form-control" id="gerencia" name= "gerencia" placeholder=""required> 
                           <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($gerencias)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] ."</option>";
                                }
                                ?>
                                </select>
					</div> 
				</div>
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Divisíon:</label>
					</div>
                    <?php
                                $sql="SELECT * from Division";
                                $divisiones=mysqli_query($conexion,$sql);
                      ?>
					       
					<div class="col-sm-10">
                           <select type="text" class="form-control" id="division" name= "division" placeholder="Ingresar Nombre del Servicio"required> 
                           <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($divisiones)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['nombres'] ."</option>";
                                }
                                ?>
                                </select>
					</div> 
				</div>
				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Cargos:</label>
					</div>
                    <?php
                                $sql="SELECT * from cargos";
                                $re=mysqli_query($conexion,$sql);
                      ?>
					       
					<div class="col-sm-10">
                           <select type="text" class="form-control" id="cargo" name= "cargo" placeholder="Ingresar Nombre del Servicio"required> 
                           <option value="">Selecciona una opción</option>
                           <?php
                               while($mostrar=mysqli_fetch_array($re)) {
                                    echo "<option values" . $mostrar['id'] . ">" . $mostrar['cargo'] ."</option>";
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
						<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL" required>
						<output id="list"></output>	
						</div>
					</div>
            </div> 
			<script>
              function archivo(evt) {
                  var files = evt.target.files; 
                  for (var i = 0, f; f = files[i]; i++) {
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
                    reader.onload = (function(theFile) {
                        return function(e) {
                         document.getElementById("list").innerHTML = ['<img class="thumb"  width="80" height="85" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f); 
             
                    reader.readAsDataURL(f);
                  }
              } 
             
              document.getElementById('imagen').addEventListener('change', archivo, false);
      </script>
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