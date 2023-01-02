<?php
	$db=mysqli_connect("localhost","root","","csv_db 5");
	if(!$db){
		die("連線失敗<br>");
	}	
	mysqli_query($db,"SET NAMES 'utf8'");
?>