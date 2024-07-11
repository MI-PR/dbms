<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$mysql_host = "localhost";
	$mysql_username = "root";
	$mysql_password = "cs";
	$mysql_database = "connect";
	
	$u_name = $_POST['username']; 
	$u_pass = $_POST['password'];
	
	
	
	if($u_name && $u_pass)
	{

	$conn = mysqli_connect($mysql_host,$mysql_username,$mysql_password,$mysql_database);
	

	$sql = "select *from login where username = '$u_name' and password = '$u_pass' ";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
	
       }}
	else
 	die("Please enter  username and Password!");
}
?>
