<?php
include_once 'db.php';

class apiDB extends DB
{
	
	function mostrar_data(){
		$data = new DB();
		$datos = array();
		$datos['item'] = array();
		$res = $data->consultaTabla("tab_control");
		if($res->rowCount() >= 1){
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
				$d= array(
					"id"=>$row['id'],
					"v1"=>$row['v1'],
					"v2"=>$row['v2'],
					"v3"=>$row['v3']
				);
				array_push($datos['item'], $d);
			}
			?>
			<table class="table-sm">
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
				<?php
				foreach($datos['item'] as $key){
					?>
					<tr>
						<td><?php echo $key['id'];?></td>
						<td><?php echo $key['v1'];?></td>
						<td><?php echo $key['v2'];?></td>
						<td><?php echo $key['v3'];?></td>
					</tr>
					<?php
				}
				?>
			</table>
			<?php
		}else{
			echo 'sin datos';
		}
	}

	function mostrar_tit(){
		$data = new DB();
		$datos = array();
		$datos['item'] = array();
		$res = $data->consultaTabla("tab_titulos");
		if($res->rowCount() >= 1){
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
				$d= array(
					"id"=>$row['id'],
					"v1"=>$row['v1'],
					"v2"=>$row['v2'],
					"v3"=>$row['v3']
				);
				array_push($datos['item'], $d);
			}
		}else{

		}
	}

	function cant_tit(){
		$data = new DB();
		$datos = array();
		$res = $data->consultaTabla('tab_titulos');
		if($res->rowCount() >= 1){
			$i=0;
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
				$i++;
			}
		}else{
			$i=0;
		}
		return $i;
	}

	function inv_tit(){
		$data = new DB();
		$datos = array();
		$datos['item'] = array();
		$res = $data->consulta();
		if($res->rowCount() >= 1){
			while($row = $res->fetch(PDO::FETCH_ASSOC)){
				$d= array(
					"v1"=>$row['nomb'],
					"v2"=>$row['cant']
				);
				array_push($datos['item'], $d);
			}
			$total = 0;
			foreach($datos['item'] as $key){
			$total = $total + $key['v2'];
			} 
			?>
			<h5 class="card-title"><?php echo $total;?> Unidades </h5>
			<?php
		}else{
			echo 'sin resp';
		}
	}
}
?>