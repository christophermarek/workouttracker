
  
<?php

require_once('../data/config.php');

class EXCERSIZE{	

	private $conn;
	
	public function __construct(){
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }

    public function redirect($url){
		header("Location: $url");
	}
	
    public function createExcersize($userid, $excersizetype, $excersizereps, $excersizeweight, $excersizedate){

		try{
			
			$sql = $this->conn->prepare("INSERT INTO excersize(user_id, excersize_type, excersize_reps, excersize_weight, excersize_date) 
		                                               VALUES(:eid, :etype, :ereps, :eweight, :edate)");
												  
			$sql->bindparam(":eid", $userid);
			$sql->bindparam(":etype", $excersizetype);
			$sql->bindparam(":ereps", $excersizereps);
			$sql->bindparam(":eweight", $excersizeweight);
			$sql->bindparam(":edate", $excersizedate);
	
			$sql->execute();	
			return $sql;	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}				
	}
	

	
}
?>
