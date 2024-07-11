<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "cs";
	$mysql_database = "connect";
	
	$u_name = $_POST["username"]; 
	$u_pass = $_POST["password"];
	
	
	$mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database);
	
	
	$statement = $mysqli->prepare("INSERT INTO login (username, password) VALUES('$u_name','".$u_pass."')"); 
	
	
	
	if($statement->execute()){
		print "Hello " . $u_name . "!, you are signed in!";
	}else{
		print $mysqli->error; 
	}
}
?>


