<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                <center><button class="btn bg-navy btn-sm" type="button"> <span class='glyphicon glyphicon-trash'></span>&nbsp;Equipo Inalambrico</button></center>
                <br><div class="box box-primary">
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Estás seguro de que quieres eliminar?</p>
				<h2 class="text-center"><?php echo $row['nombres'].' '.$row['apellidos']; ?></h2>
                <?php  $imagen = '<img height="120" width="120" src="data:image/jpeg;base64,'.base64_encode($row["imagen"]).'"/>';?>
                <h2 class="text-center"><?php echo $imagen; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="sql/eliminar-wifi.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-trash"></span>Aceptar</a>
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