<?php
	$servername = "162.241.216.35:3306";
	$username="adriaos6_WPZ7G";
	$password="Dumtonk4$";
	$dbname="adriaos6_kids";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$params = [];//= array_fill_keys($keys, $values);
	foreach (explode("&", $_SERVER['argv'][0]) as $p){
		$queryParam = explode("=", $p);
		$params[$queryParam[0]] = $queryParam[1];
	}
?>