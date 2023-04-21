<!-------------------------------------------------------------------------------------------------   
PAGINA REALIZADA POR : JULIO CONTRERAS , ENYERWELL CALZADILLA Y DANNY JIMENEZ
DIVISION DE DESARROLLO Y DIVISION DE SERVIDORES Y REDES
VENEZOLANA DE TELEVISION C.A 
CANAL 8 
0412-934-35-29 - 0412-900-50-75  - 0416-611-38-45   
-------------------------------------------------------------------------------------------------->	


<form method="POST" action="<?php echo $row['ip']; ?>" enctype="multipart/form-data">
<div class="modal fade" id="consola_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                
                <center><button class="btn btn-primary" type="button"> <span class='fa fa-wifi'></span>&nbsp;Administrar Consola de Wifi</button></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Quieres Administrar el Wifi?</p>
				<h2 class="text-center"><?php echo $row['nombres'].' '.$row['ip']; ?></h2>
                
               
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <?php $link=$row['ip'] ?>
               

                <a href="<?php echo $link ?>" target="_blank"   class="btn btn-success"><span class="glyphicon glyphicon-trash"></span>Aceptar</a>
                </form>
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