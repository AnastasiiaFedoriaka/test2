<?php
	$servername = "sql104.epizy.com";
	//$database = "elen_blog";
	$username = "epiz_33613217";
	$password = "X2lSM4XvxOfJC";
	$db = "epiz_33613217_elen_blog";
	// Создаем соединение
	$conn = new mysqli($servername, $username, $password, $db);
	
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	?>