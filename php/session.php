<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();

	    require_once $_SERVER["DOCUMENT_ROOT"].'/models/user.php';
		$session = new USER();
	
	
		if(!$session->is_loggedin()){
			$session->redirect('index.php');
		}
	}	
	
?>