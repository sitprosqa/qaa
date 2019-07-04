<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	$tdate=$_POST["tdate"];
	$db=mysqli_connect("localhost","root","","users");
	if(!$db)
	{
		echo "there is a problem";
	}
	else
	{

		$query="SELECT  * from buys";
		$result=mysqli_query($db,$query);
		if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$rdate=$row["returndate"];
$quan=$row["quantity"];
$id=$row["productid"];
}
}
}
if($tdate>$rdate)
{
	echo "string";
	$f=0;
	$query4="UPDATE buys set quantity='$f' where productid ='$id'";
	$query5="UPDATE product set quantity='$quan' where id='$id'";
	if (mysqli_query($db, $query4)) {
		if(mysqli_query($db, $query5))
		{
	echo "The product has been returned";
}
}
}
else
{
	('location:index.html');
}

}
?>
<body>

<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	Today's date<input type="date" name="tdate">
	<input type="submit" name="submit">
</form>
<form method="post" action="index.html">
	<input type="submit" name="name" value="back">
</form>
</body>
</html>