<?php 
include_once 'tits.php';

class apiTits extends tits
{
	
	function titid($id){
		$data = new tits();
		$datos = $data->Sel_tits_byID($id);
		$result = array();
		if($datos->rowCount() >= 1){
			while($res = $datos->fetch(PDO::FETCH_ASSOC)){
				$result = array(
					"id"=>$res['c_id'],
					"nomb"=>$res['nomb'],
					"descr"=>$res['descr'],
					"fec_crea",$res['fec_crea']
				);
			}
			return $result;
		}else{
			return false;
		}
	}

	function bustit($crit){
		$data = new tits();
		$datos = $data->Bus_tits($crit);
		$result = array();
		$result['items'] = array();
		if($datos->rowCount() >= 1){
			while($res = $datos->fetch(PDO::FETCH_ASSOC)){
				$a = array(
					"id"=>$res['c_id'],
					"nomb"=>$res['nomb'],
					"descr"=>$res['descr'],
					"fec_crea",$res['fec_crea']
				);
				array_push($result['items'], $a);
			}
			return $result['items'];
		}else{
			return false;
		}
	}

	function listar_tits(){
			$data = new tits();
			$datos = $data->list_tits_dis();
			if($datos->rowCount() >= 1){
				?>
				<table class="table-sm">
					<tr>
						<td class="fst-italic text-secondary">Nombre</td>
						<td class="fst-italic text-secondary">Descripción</td>
					</tr>
				<?php
				while($res = $datos->fetch(PDO::FETCH_ASSOC)){
						?>
						<tr>
							<td class="align-top fw-bold"><?php echo $res['nomb'];?></td>
							<td class="fst-italic"><?php echo $res['descr'];?></td>
						</tr>
						<?php
				}
				?></table><?php
			}else{
				echo 'Sin Titulos Creados Aun.';
			}
	}

	function c(){
		$data = new tits();
		$var = array("n"=>'Tit',"d"=>'Descri',"s"=>1,"t"=>1,"p"=>1,"c"=>1);
		$data->crear_tit($var);
	}
}
?>