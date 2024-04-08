<?php 
include_once 'db.php';

class terc extends DB{
	function Sel_terc_byID($id){
		$qry = $this->connect()->prepare('SELECT * FROM tab_terc WHERE c_id = :id;');
		$qry->bindParam(':id',$id,PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}

	function Bus_terc($criterio){
		$criterio = '%'.$criterio.'%';
		$qry = $this->connect()->prepare("SELECT * FROM tab_terc WHERE nomb_cont like :cri or rifc like :cri2 ;");
		$qry->bindParam(':cri', $criterio['nomb'] );
		$qry->bindParam(':cri2',$criterio['rifc'],PDO::PARAM_STR,50);
		$qry->execute();
		return $qry;
	}

	function list_terc_dis(){
		$qry = $this->connect()->query('SELECT * FROM tab_terc WHERE status = 1');
		return $qry;
	}

	function list_terc_tod(){
		$qry = $this->connect()->query('SELECT * FROM tab_terc');
		return $qry;	
	}

	function crear_terc($titulo){
		$qry = $this->connect()->prepare('INSERT INTO tab_terc (descr,rifc,tipo,tfl_pri,nomb_cont,direccion,estado,ciudad,c_uc) VALUES (:d,:r,:t,:tl,:nc,:di,:e,:c,:uc);');
		$qry->bindParam(':d',$titulo['d'],PDO::PARAM_STR,200);
		$qry->bindParam(':r',$titulo['r'],PDO::PARAM_STR,30);
		$qry->bindParam(':t',$titulo['t'],PDO::PARAM_INT);
		$qry->bindParam(':tl',$titulo['tl'],PDO::PARAM_STR,30);
		$qry->bindParam(':nc',$titulo['nc'],PDO::PARAM_STR,60);
		$qry->bindParam(':di',$titulo['di'],PDO::PARAM_STR,200);
		$qry->bindParam(':e',$titulo['e'],PDO::PARAM_INT);
		$qry->bindParam(':c',$titulo['c'],PDO::PARAM_INT);
		$qry->bindParam(':uc',$titulo['uc'],PDO::PARAM_INT);
		$qry->execute();
		return $qry;
	}


}
?>