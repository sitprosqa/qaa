<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
session_start();
?>
<?php
	//$protitle=$_POST['protitle'];
	//$mdnum=$_POST['mdnum'];
	$name=$_POST['name'];
	$quan=$_POST['quan'];
	    	$_SESSION["quantity"]=$quan;

	$issuedate=$_POST['issuedate'];
	$returndate=$_POST['returndate'];
	$_SESSION["issuedate"]=$issuedate;
	$_SESSION["returndate"]=$returndate;
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
	$quantity="";
	
//connect to MySql						
	$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);						
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}
	
	
	$sql = "select * from product where name='$name'";
	$_SESSION["name"]=$name;
$result = $mysqli->query($sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
 //       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    	$quantity=$row["quantity"];
		$sum=$sum+$quantity;
    	$_SESSION["productid"]=$row["id"];
    //	$_SESSION["name"]=$name;
    }
} else {
    echo "0 results";
}
echo $sum;
if($quan>$sum)
{
	echo "product is short the request has been send to admin for this product";
	$_SESSION["msg"]="product".$name." is short";
}
else
{
	$username1=$_SESSION["username"];
	//echo $username1;
	echo "your request for  product has been send to admin ";
	$_SESSION["msg"]="person ".$username1."want ".$name."";
//	echo $_SESSION["msg"];
}
$mysqli->close();
	?>
	<form method="post" action="index.html">
	<input type="submit" name="Logout" value="logout">
	</form>
</body>
</html>
