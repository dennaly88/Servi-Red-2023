<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	


<div class="modal fade" id="contraseña_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
		<div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">
                  <button class="btn bg-navy btn-sm" type="button"> <span class='fa fa-lock'></span>&nbsp;Clave de Administrador</button>
				 
				 
				</h4></center>
				<br><div class="box box-primary">
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="sql/contraseña.php" enctype="multipart/form-data">
							<input type="hidden" class="form-control" name="edit_id" value="<?php echo $row['id']; ?>">

							
							<div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Equipo Inalambrico:</label>
								</div>
								<div class="col-sm-10">
								<?php  $imagen = '<img height="80" width="80" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
								

								<?php echo  $imagen; ?>
							
									
								</div>
							</div>


							<?php

$clave= $row['clave_Administrador'];
$sSalt = '20adeb83e85f03cfc84d0fb7e5f4d290';
$sSalt = substr(hash('sha256', $sSalt, true), 0, 32);
$method = 'aes-256-cbc';
$iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
$clave = base64_encode(openssl_encrypt($contraseña, $method, $sSalt, OPENSSL_RAW_DATA, $iv));

?>





                            <div class="row form-group">
								<div class="col-sm-2">
									<label class="control-label modal-label">Contraseña Encryptada:</label>
								</div>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="#" value="<?php echo $clave; ?>" readonly>
								</div>
							</div> 
                           
                                <div class="row form-group">
											<div class="col-sm-2">
												<label class="control-label modal-label">Contraseña Actual:</label>
											</div>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="edit_contraseña" value="<?php echo $row['clave_administrador']; ?>" readonly>
											</div>
		 		
				               </div>
							   <div class="row form-group">
											<div class="col-sm-2">
												<label class="control-label modal-label">Contraseña Nueva:</label>
											</div>
											<div class="col-sm-10">
												<input type="password" class="form-control" placeholder="Contraseña" name="clave_administrador" >
											</div>
		 		
				               </div>
			<div class="modal-footer">
							<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
							<button type="submit" name="editar" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-check"></span>Cambiar Contraseña</a>
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
