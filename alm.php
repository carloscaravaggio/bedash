<?php
include_once 'db.php';

class almacen extends DB
{
	function sel_almacenes_byID($id){
		$qry = $this->connect()->prepare('SELECT * FROM tab_almacenes WHERE c_id = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function bus_almacenes($criterio){
		$criterio = '%'.$criterio.'%';
		$qry = $this->connect()->prepare("SELECT * FROM tab_almacenes WHERE coment like :cri or nombre like :cri2 ;");
		$qry->bindParam(':cri', $criterio['busqueda'] ,PDO::PARAM_STR,50);
		$qry->bindParam(':cri2',$criterio['busqueda'],PDO::PARAM_STR,50);
		$qry->execute();
		return $qry;
	}

	function list_almacenes_dis(){
		$qry = $this->connect()->query('SELECT * FROM tab_almacenes WHERE status = 1');
		return $qry;
	}

	function list_almacenes_byStatus($status){
		$qry = $this->connect()->prepare('SELECT * FROM tab_almacenes WHERE status = :status;');
		$qry->bindParam(':status',$status,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function list_almacenes_tod(){
		$qry = $this->connect()->query('SELECT * FROM tab_almacenes');
		return $qry;	
	}

	function crear_almacenes($almacen){
		$qry = $this->connect()->prepare('INSERT INTO tab_almacenes (nombre,estado,ciudad,direccion,c_uc,coment) VALUES (:n,:e,:c,:d,:cu,:co);');
		$qry->bindParam(':n',$almacen['n'],PDO::PARAM_STR,200);
		$qry->bindParam(':e',$almacen['e'],PDO::PARAM_STR,40);
		$qry->bindParam(':c',$almacen['c'],PDO::PARAM_STR,80);
		$qry->bindParam(':d',$almacen['d'],PDO::PARAM_STR,200);
		$qry->bindParam(':cu',$almacen['cu'],PDO::PARAM_INT);
		$qry->bindParam(':co',$almacen['co'],PDO::PARAM_STR,200);
		$qry->execute();
		return $qry;
	}

	function select_cont_alm($id){
		$qry = $this->connect()->prepare('SELECT * FROM tab_alm WHERE id_alm = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}
	function select_contd_alm($id){
		$qry = $this->connect()->prepare('SELECT b.nomb as nomb,a.cant as cant, a.fec_ua as fec_ua FROM tab_alm a INNER JOIN tab_titulos b ON a.id_tit = b.c_id WHERE a.id_alm = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function act_cont_alm($alm){
		$qry = $this->connect()->prepare('UPDATE tab_alm SET cant = :c, fec_ua = CURRENT_TIMESTAMP WHERE ID = :ID AND id_alm = :ia AND id_tit = :it;');
		$qry->bindParam(':c',$alm['c'],PDO::PARAM_INT);
		$qry->bindParam(':ID',$alm['ID'],PDO::PARAM_INT);
		$qry->bindParam(':ia',$alm['ia'],PDO::PARAM_INT);
		$qry->bindParam(':it',$alm['it'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}
	
	function crea_cont_alm($alm){
		$qry = $this->connect()->prepare('INSERT INTO tab_alm (id_alm,id_tit ,cant,c_uua) VALUES (:ia,:it,:c,:cu);');
		$qry->bindParam(':ia',$alm['ia'],PDO::PARAM_INT);
		$qry->bindParam(':it',$alm['it'],PDO::PARAM_INT);
		$qry->bindParam(':c',$alm['c'],PDO::PARAM_INT);
		$qry->bindParam(':cu',$alm['cu'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function con_consig_act_dist(){
		$qry = $this->connect()->query('SELECT  a.estado as estado, SUM(cant) as cant  FROM tab_almacenes a INNER JOIN tab_alm b ON a.c_id = b.id_alm GROUP BY a.estado');
		return $qry;
	}
}