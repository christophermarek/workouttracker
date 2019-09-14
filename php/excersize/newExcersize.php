<?php 

require_once("../models/excersize.php");
require_once("../php/session.php");

if(isset($_POST['btn-addexcersize'])){

	$excersize = new EXCERSIZE();

	$excersize_type = htmlspecialchars(trim(strip_tags($_POST['excersizename'])));
	$excersize_reps = htmlspecialchars(trim(strip_tags($_POST['excersizerep'])));
	$excersize_weight = htmlspecialchars(trim(strip_tags($_POST['excersizeweight'])));
	$excersize_date = htmlspecialchars(trim(strip_tags($_POST['excersizedate'])));

	$excersize->createExcersize($_SESSION['user_session'], $excersize_type, $excersize_reps, $excersize_weight, $excersize_date);
	$excersize->redirect('../views/home.php');
}

?> 