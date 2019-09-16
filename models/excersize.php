
  
<?php

require_once $_SERVER["DOCUMENT_ROOT"].'/data/config.php';

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
	
    public function createExcersize($userid, $excersizetype, $excersizereps, $excersizesets, $excersizeweight, $excersizedate){

		try{
			
			$sql = $this->conn->prepare("INSERT INTO excersize(user_id, excersize_type, excersize_reps, excersize_sets ,excersize_weight, excersize_date) 
		                                               VALUES(:eid, :etype, :ereps, :esets, :eweight, :edate)");
												  
			$sql->bindparam(":eid", $userid);
			$sql->bindparam(":etype", $excersizetype);
			$sql->bindparam(":ereps", $excersizereps);
			$sql->bindparam(":esets", $excersizesets);
			$sql->bindparam(":eweight", $excersizeweight);
			$sql->bindparam(":edate", $excersizedate);
	
			$sql->execute();	
			return $sql;	
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}				
	}
	
	public function getUserExcersizes($userid)	{
		try{
			$sql = $this->conn->prepare("SELECT * FROM excersize WHERE user_id=:userid ORDER BY excersize_date DESC");
			$sql->execute(array(":userid"=>$userid));
			
			$user_execersizes_req = $sql->fetchALL(PDO::FETCH_ASSOC);
			
			return $user_execersizes_req;
		}
		catch(PDOException $e){
			echo $e->getMessage();
		}				
	}
	
}
?>
