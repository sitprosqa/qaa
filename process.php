
<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";
//$name='sds';
//$pass=12345;
$name=$_POST["name"];
$pass=$_POST["password"];
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn,"SET NAMES 'utf8'");
if(!$conn)
{
	echo "not connected";
}
else
{
	$query="SELECT * from users where username='$name' AND password ='$pass'";
	$result=mysqli_query($conn,$query);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
  	$_SESSION["username"]=$row["username"];
  	$_SESSION["userid"]=$row["id"];
		 // echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    		header('Location: home.php');
       //echo "Login sucess ,Welcome" ,$row['username'];      echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
}
?>


	
	