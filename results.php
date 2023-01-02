<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');

	$age=$_POST["age"];
	$gender=$_POST["gender"];
	$workload=$_POST["workload"];
	$calorie=0;
?>
