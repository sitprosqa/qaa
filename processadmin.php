<?php
	$username=$_POST['user'];
	$password=$_POST['pass'];
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
	
	$sql = "select * from admin where name='$username'  and password='$password'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		header('Location: admin.html');
       
    }
} else {
    header('Location: loginfail.html');
}
$mysqli->close();
	
	?>
	
	