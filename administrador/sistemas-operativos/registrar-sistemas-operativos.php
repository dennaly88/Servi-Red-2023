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
                <center><h4 class="modal-title" id="myModalLabel"><button class="btn bg-navy btn-sm" type="button"><span class='fa fa-indent'>&nbsp;</span>Registrar Sistemas Operativo</button></h4></center>
<br>
				<div class="box box-primary"><br>
				</div>
				
            <div class="modal-body"> 
			<div class="container-fluid">
                <form action="sql/insertar-sistema.php" method="post" enctype="multipart/form-data">
				


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Clasificación </label>
					</div> 
					<div class="col-sm-10">
						
					<select class="form-control form-control-sm" placeholder="Seleccione el Perfil" name="id_clasificacion" required>
					                    <option value="">Selecciona una opción</option>
					                    <option value="1">Dos</option>
										<option value="2">Unix</option>
										<option value="3">Windows</option>
										<option value="4">GNU/Linux</option>
										<option value="5">Mac OS</option>
					   </select>
					</div>
				</div>


				<div class="row form-group"> 
					<div class="col-sm-2">
						<label class="control-label modal-label">Distribución:</label>
					</div>
							<div class="col-sm-10">
                <select type="text" class="form-control" id="nombre" name="nombre" required>
				<option value="">Selecciona una opción</option>
                         <?php
                               while($mostrar=mysqli_fetch_array($distribucion)) {
								$imagen = '<img src="'.$mostrar["imagen"].'" class="img-circle" width="80" height="80" />';
 
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
						<input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png, .git" class="form-control" id="exampleInputEmail1" placeholder="IMAGEN DE PERFIL"required >
						<output id="list"></output>
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