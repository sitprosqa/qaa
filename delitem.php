<?php
	
	$name=$_POST['name'];
	
	/*
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
	*/
	$db_username = 'root';
    $db_password = '';
	$db_name = 'users';
	$db_host = 'localhost';

//connect to MySql						
	$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	$sql = "delete  from product where name='$name' " ;
$result = $mysqli->query($sql);

	
    header('Location: admin.html');
$mysqli->close();
	
	?>
	
	