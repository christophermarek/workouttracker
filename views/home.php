<?php
	require_once('../php/excersize/newExcersize.php');
	require_once('../php/excersize/getExcersize.php');
	require_once("../php/session.php");
?>

<!DOCTYPE html>

<html>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../styles/main.css">
	<link rel="stylesheet" type="text/css" href="../styles/home.css">

<head>

	<title></title>

</head>

<body>

	<div id = "addExcersize"><?php require("excersize/unifiedExcersize.php")?></div>
	<div id = "excersizeList"><?php require("excersize/excersizeList.php")?></div>


</body>

</html>