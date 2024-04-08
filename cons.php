<?php
include_once 'db.php';
class consig extends DB
{
	function Sel_consig_byID($id){
		$qry = $this->connect()->prepare('SELECT * FROM tab_cons WHERE c_id = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function Bus_consig($criterio){
		$criterio = '%'.$criterio.'%';
		$qry = $this->connect()->prepare("SELECT * FROM tab_cons WHERE coment like :cri or sysdescr like :cri2 ;");
		$qry->bindParam(':cri', $criterio['busqueda'] ,PDO::PARAM_STR,50);
		$qry->bindParam(':cri2',$criterio['busqueda'],PDO::PARAM_STR,50);
		$qry->execute();
		return $qry;
	}

	function list_consig_dis(){
		$qry = $this->connect()->query('SELECT a.*, sum(b.cant) as cant, c.descr as terc FROM tab_cons a INNER JOIN tab_cons_d b ON a.c_id = b.id_con INNER JOIN tab_terc c ON c.c_id = a.c_er WHERE a.status = 1 group by b.id_con');
		return $qry;
	}
	function list_consig_disb(){
		$qry = $this->connect()->query('SELECT * FROM tab_cons WHERE status = 1');
		return $qry;
	}

	function list_consig_byStatus($status){
		$qry = $this->connect()->prepare('SELECT * FROM tab_cons WHERE status = :status;');
		$qry->bindParam(':status',$status,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function list_consig_tod(){
		$qry = $this->connect()->query('SELECT * FROM tab_cons');
		return $qry;	
	}

	function crear_consig($consig){
		$qry = $this->connect()->prepare('INSERT INTO tab_cons (sysdescr,coment,c_uc,status,c_er) VALUES (:s,:c,:uc,:st,:er);');
		$qry->bindParam(':s',$consig['s'],PDO::PARAM_STR,100);
		$qry->bindParam(':c',$consig['c'],PDO::PARAM_STR,250);
		$qry->bindParam(':uc',$consig['uc'],PDO::PARAM_INT);
		$qry->bindParam(':st',$consig['st'],PDO::PARAM_INT);
		$qry->bindParam(':er',$consig['er'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function crear_consig_det($item){
		$qry = $this->connect()->prepare('INSERT INTO tab_cons_d (id_con,id_tit,num,cant,c_in) VALUES (:ic,:it,:n,:c,:ci);');
		$qry->bindParam(':ic',$item['ic'],PDO::PARAM_INT);
		$qry->bindParam(':it',$item['it'],PDO::PARAM_INT);
		$qry->bindParam(':n',$item['n'],PDO::PARAM_INT);
		$qry->bindParam(':c',$item['c'],PDO::PARAM_INT);
		$qry->bindParam(':ci',$item['ci'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function select_ult_consig(){
		$query = $this->connect()->query('SELECT c_id FROM tab_cons ORDER BY c_id DESC LIMIT 1;');
		return $query;
	}

	function select_items_consig($id){
		$qry = $this->connect()->prepare('SELECT * FROM tab_cons_d WHERE  id_con = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}
	function select_itemsd_consig($id){
		$qry = $this->connect()->prepare('SELECT b.nomb as nomb, a.cant as cant, a.fec_crea as fec_crea FROM tab_cons_d as a INNER JOIN tab_titulos as b ON a.id_tit = b.c_id WHERE  a.id_con = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function select_item_consig($item){
		$qry = $this->connect()->prepare('SELECT * FROM tab_cons_d WHERE  (id_con = :id) AND (id_tit = :it) AND (num = :n);');
		$qry->bindParam(':id',$item['id'],PDO::PARAM_INT);
		$qry->bindParam(':it',$item['it'],PDO::PARAM_INT);
		$qry->bindParam(':n',$item['n'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function act_item_cons($criterio){
		switch ($criterio['ac']) {
			case 1://venta
				$qry = $this->connect()->prepare('UPDATE tab_cons_d SET cant_v = :c WHERE (id_con = :ic) AND (id_tit = :it) AND (num = :n);');
				break;
			case 2://devolucion
				$qry = $this->connect()->prepare('UPDATE tab_cons_d SET cant_d = :c WHERE (id_con = :ic) AND (id_tit = :it) AND (num = :n);');
				break;			
		}
		$qry->bindParam(':c',$criterio['c'],PDO::PARAM_INT);
		$qry->bindParam(':ic',$criterio['ic'],PDO::PARAM_INT);
		$qry->bindParam(':it',$criterio['n'],PDO::PARAM_INT);
		$qry->bindParam(':n',$criterio['ci'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function del_item_cons($item){
		$qry = $this->connect()->prepare('DELETE FROM tab_cons_d WHERE  (id_con = :id) AND (id_tit = :it) AND (num = :n);');
		$qry->bindParam(':id',$item['id'],PDO::PARAM_INT);
		$qry->bindParam(':it',$item['it'],PDO::PARAM_INT);
		$qry->bindParam(':n',$item['n'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}
	
	function act_consig_status($consig){
		$qry = $this->connect()->prepare('UPDATE tab_cons set status = :s WHERE c_id = :ci;');
		$qry->bindParam(':s',$consig['s'],PDO::PARAM_INT);
		$qry->bindParam(':ci',$consig['ci'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function con_consig_act_dist(){
		$qry = $this->connect()->query('SELECT a.c_id as id, b.estado as estado, SUM(c.cant) - (c.cant_v + c.cant_d) as cant FROM tab_cons a INNER JOIN tab_cons_d c ON a.c_id = c.id_con INNER JOIN tab_terc b ON b.c_id = a.c_er GROUP BY b.estado');
		return $qry;
	}

}
?>