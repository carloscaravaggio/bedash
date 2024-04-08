<?php
include_once 'cons.php';

class apiConsig extends consig {
	function conConsig(){
		$data = new consig();
		$datos = $data->con_consig_act_dist();
		$result = array();
		if($datos->rowCount() >= 1){
			while($res = $datos->fetch(PDO::FETCH_ASSOC)){
				$resulta = array(
					"id"=>$res['id'],
					"estado"=>$res['estado'],
					"cant"=>$res['cant']
				);
				array_push($result, $resulta);
			}
			return $result;
		}else{
			return false;
		}
	}

	function detConsig(){
		$data = new consig();
		$datos = $data->list_consig_dis();
		$result = array();
		if($datos->rowCount() >= 1){
			?>
			<div class="accordion accordion-flush" id="accordionFlushExample">
			  
			  
			<?php
			while($res = $datos->fetch(PDO::FETCH_ASSOC)){

				?>
				<div class="accordion-item">
				    <h2 class="accordion-header" id="flush-heading<?php echo $res['c_id'];?>">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $res['c_id'];?>" aria-expanded="false" aria-controls="flush-collapse<?php echo $res['c_id'];?>">
				        <table class="table-sm w-100">
				        	<tr>
				        		<td class="text-secondary fst-italic">Descripcion</td>
				        		<td class="text-secondary fst-italic"  width="25">Unidades</td>
				        		<td class="text-secondary fst-italic">Entidad</td>
				        		<td class="text-secondary fst-italic">Comentarios</td>
				        		<td class="text-end text-secondary fst-italic" width="25">Fecha</td>
				        	</tr>
				        	<tr>
				        		<th width="20"><?php echo $res['sysdescr'];?></th>
				        		
				        		<th width="20"><?php echo $res['cant'];?></th>
				        		<td width="20"><?php echo $res['terc'];?></td>
				        		<td width="20"><?php echo $res['coment'];?></td>
				        		<td width="20" class="text-end text-secondary fst-italic"><?php echo $res['fec_cre'];?></td>
				        	</tr>
				        </table>
				      </button>
				    </h2>
				    <div id="flush-collapse<?php echo $res['c_id'];?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo $res['c_id'];?>" data-bs-parent="#accordionFlushExample">
				      <div class="accordion-body">
				      	<?php 
				      	$r = $data->select_itemsd_consig($res['c_id']);
				      	if($r->rowCount()>=1){
				      		?>
				      		<table class="table-sm">
				      			<tr>
				      				<td>Título</td>
				      				<td>Unidades</td>
				      				<td></td>
				      			</tr>
				      		<?php
				      		while($r2=$r->fetch(PDO::FETCH_ASSOC)){
				      			?>
				      			<tr>
				      				<th><?php echo $r2['nomb'];?></th>
				      				<td class="text-center"><?php echo $r2['cant'];?></td>
				      				<td class="text-secondary fst-italic"><?php echo $r2['fec_crea'];?></td>
				      			</tr>
				      			<?php
				      		}?>
				      		</table>
				      		<?php
				      	}else{
				      		echo "sin datos";
				      	}
				      	?>
				      </div>
				    </div>
				  </div>
				<?php	
			}
			?>
			</div>
			<?php
		}else{
			echo "Sin consignaciones";
		}
	}
}