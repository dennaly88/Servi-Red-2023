<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->																						
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="../images/favicon-nuevo.png">
		    <title>Servi-Red | VTV</title>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
			<link rel="stylesheet" href="css/style.css">
			
</head>
	<body>
			<section class="ftco-section">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-6 text-center mb-5"></center>
							<img src="images/logos.png" alt="logo" width='210' height='150'>
						       </div>
						          </div>
									<div class="row justify-content-center">
										<div class="col-md-6 col-lg-4">
											<div class="login-wrap p-0">
											
													
											      <?php
														unset($usu);
														$usu8 = $_GET["usu"];
															if ($usu8<2) {
																} else 
																	{
																		include 'mensajes/usuario-no-registrado.php';
														}  
										        	?>
														
														<?php
														unset($uru);
														$uru8 = $_GET["uru"];
															if ($uru8<2) {
																} else 
																	{
																		include 'mensajes/clave-no-registrado.php';
														}  
										        	?>

                                                    <?php
														unset($udu);
														$udu8 = $_GET["udu"];
															if ($udu8<2) {
																} else 
																	{
																		include 'mensajes/usuario-inactivo.php';
														}  
										        	?>

													<?php
														unset($mar);
														$mar8 = $_GET["mar"];
															if ($mar8<2) {
																} else 
																	{
																		include 'mensajes/conexion-fallida.php';
														}  
										        	?>
												<form action="sql/validar.php"  method="POST">
															<div class="form-group">
																<input type="text" class="form-control" placeholder="Usuario" name="usuarios" required>
															</div>
															<div class="form-group">
																<input id="password-field" type="password" class="form-control" placeholder="Contraseña" name="contraseñas" required>
																<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
															</div><br>
															<div class="form-group">
																<button type="submit" class="form-control btn btn submit px-3">Entrar</button>
															</div>	
												</form>
												
												<form action="olvidosuclave.php"  method="POST">
															
													<div class="form-group">
														<button type="submit" class="form-control btn btn submit px-3"><h6>¿ Olvidaste su usuario o clave ?</h6></button>
													</div>	
												</form>
												<center><br><img src="images/logo.png" alt="logo">
							    </div><br><center> © Venezolana de Televisión Todos los Derechos Reservados- 2022</div></center>
							</div>
						</div>
		</section>
					<script src="js/jquery.min.js"></script>
					<script src="js/popper.js"></script>
					<script src="js/bootstrap.min.js"></script>
					<script src="js/main.js"></script>
	</body>
</html>
<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->