<?php 

class DB{
	private $host;
	private $db;
	private $user;
	private $password;
	private $charset;

	public function __construct(){
		$this->host = 'localhost';
		$this->db = 'bedash_dev';
		$this->user = 'root';
		$this->password = '';
		$this->charset = 'utf8mb4';
	}

	function connect(){

		try{

			$connection = "mysql:host=" .$this->host . ";dbname=" .$this->db . ";charset=" .$this->charset;
			$options = [
				PDO::ATTR_ERRMODE	=> PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES	=> false,
			];
			$pdo = new PDO($connection, $this->user, $this->password, $options);

			return $pdo;
		}
		catch(PDOException $e){
			print_r('Error connection: ' .$e->getMessage());
		}
	}

	function consultaTabla($tabla){
		$query = $this->connect()->query('SELECT *  FROM '.$tabla.';');
		return $query;
	}

	function consulta(){
		$query = $this->connect()->query('SELECT a.nomb as nomb,sum(b.cant) as cant FROM tab_titulos as a INNER JOIN tab_alm as b ON a.c_id = b.id_tit GROUP BY a.nomb, b.id_tit');
		return $query;
	}
	function ver(){
		$query = $this->connect()->query('SELECT *  FROM tab_controls;');

		$r=$query->fetch(PDO::FETCH_ASSOC);
		echo $r['version'];
	}

}
?>