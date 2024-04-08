<?php
include_once 'db.php';

class tits extends DB
{
	function Sel_tits_byID($id){
		$qry = $this->connect()->prepare('SELECT * FROM tab_titulos WHERE c_id = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function Bus_tits($criterio){
		$criterio = '%'.$criterio.'%';
		$qry = $this->connect()->prepare("SELECT * FROM tab_titulos WHERE nomb like :cri or descr like :cri2 ;");
		$qry->bindParam(':cri', $criterio );
		$qry->bindParam(':cri2',$criterio,PDO::PARAM_STR,50);
		$qry->execute();
		return $qry;
	}

	function list_tits_dis(){
		$qry = $this->connect()->query('SELECT * FROM tab_titulos WHERE status = 1');
		return $qry;
	}

	function list_tits_tod(){
		$qry = $this->connect()->query('SELECT * FROM tab_titulos');
		return $qry;	
	}

	function crear_tit($titulo){
		$qry = $this->connect()->prepare('INSERT INTO tab_titulos (nomb,descr,status,tipo,pag,id_c) VALUES (:n,:d,:s,:t,:p,:c);');
		$qry->bindParam(':n',$titulo['n'],PDO::PARAM_STR,100);
		$qry->bindParam(':d',$titulo['d'],PDO::PARAM_STR,80);//revisar
		$qry->bindParam(':s',$titulo['s'],PDO::PARAM_INT);
		$qry->bindParam(':t',$titulo['t'],PDO::PARAM_INT);
		$qry->bindParam(':p',$titulo['p'],PDO::PARAM_INT);
		$qry->bindParam(':c',$titulo['c'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function act_tit($titulo){
		$qry = $this->connect()->prepare('UPDATE tab_titulos SET (nomb,descr,status,tipo,pag) VALUES (:n,:d,:s,:t,:p) WHERE c_id = :i;');
		$qry->bindParam(':n',$titulo['n'],PDO::PARAM_STR,100);
		$qry->bindParam(':d',$titulo['d'],PDO::PARAM_STR,80);//revisar
		$qry->bindParam(':s',$titulo['s'],PDO::PARAM_INT);
		$qry->bindParam(':t',$titulo['t'],PDO::PARAM_INT);
		$qry->bindParam(':p',$titulo['p'],PDO::PARAM_INT);
		$qry->bindParam(':i',$titulo['i'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function del_tit($id){
		$qry = $this->connect()->prepare('DELETE FROM tab_titulos WHERE c_id = :id');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}
}
?>