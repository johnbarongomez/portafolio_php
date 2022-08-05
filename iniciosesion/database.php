<?php 

/**
 * 
 */
class Database {
	private $host;
	private $db;
	private $user;
	private $password;

	public function__construct(){
		$this->host='localhost';
		$this->db='mock';
		$this->user='root';
		$this->password='123456789';
	}
	
	function connect(){
		try{
			$connection="mysql:host=".$this->host.";dbname=".$this->db;
			$options=[
				PDO::ATTR_ERRMODE		=>PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_EMULATE_PREPARES => false,];
		$pdo = new PDO($connection, $this->user,$this->password,$options);
		return $pdo;
	}cath(PDOException $e){
		print_r('Error connection: ' . $e->getMessage());
	}
}

}
?>