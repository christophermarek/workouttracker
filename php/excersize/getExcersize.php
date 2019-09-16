<?php 

require_once $_SERVER["DOCUMENT_ROOT"].'/php/session.php';
require_once $_SERVER["DOCUMENT_ROOT"].'/models/excersize.php';


if(isset($_GET['getAllExcersizes'])){

	$user_id = $_SESSION['user_session'];
	
	$excersizes = new EXCERSIZE();
	$excersizes = $excersizes->getUserExcersizes($user_id);
	echo json_encode($excersizes);

}

?> 