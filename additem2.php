<?php

$db=mysqli_connect("localhost","root","","users");
if (isset($_POST['register_btn']))
{
	session_start();
$total="";
	$Name=$_POST['Name'];
	$quantity=$_POST['quantity'];
	$userid=$productid=$issuedate=$returndate="";
			$returndate=$_SESSION["returndate"];
			$issuedate=$_SESSION["issuedate"];
			$userid=$_SESSION["userid"];
			$productid=$_SESSION["productid"];
	
		if( $Name!=NULL && $quantity!=NULL )
		{
			//$password=md5($password2);
			$returndate=$_SESSION["returndate"];
			$issuedate=$_SESSION["issuedate"];
			$userid=$_SESSION["userid"];
			$productid=$_SESSION["productid"];
			$query="INSERT INTO buys(userid,productid,quantity,issuedate,returndate) VALUES('$userid','$productid','$quantity','$issuedate','$returndate')";
			//$sql="INSERT INTO users(modelnumber,Name,quantity) VALUES('$modelnumber','$Name','$quantity')";
			mysqli_query($db,$query);
			$query1="SELECT * from product where name ='$Name'";
			$result=mysqli_query($db,$query1);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
$total=$total+$row["quantity"];
}
}
$total=$total-$quantity;
$query9="INSERT into total(name,total1) values('$Name','$total')";
mysqli_query($db,$query9);



$total=$total-$quantity;
$query3="UPDATE product set quantity='$total' where id ='$userid'";

			if (mysqli_query($db, $query3)) {
			$_SESSION["msg"]="your request has been approved";
			$_SESSION["returndate"]="";
			$_SESSION["nid"]=$_SESSION["userid"];
			$_SESSION["productid"]="";
			$_SESSION["issuedate"]="";
			$_SESSION["quantity"]="";
    echo "Record updated successfully";
header("location: admin.html");
} else {
    echo "Error updating record: " . mysqli_error($db);
}
						
		}
		else{
			$_SESSION['message']="Incorrect";
		}
}
if (isset($_POST['addproduct']))
{
	session_start();
	$Name=$_POST['Name'];
	$quantity=$_POST['quantity'];
	$idd=$_POST["id"];
	if( $Name!=NULL && $quantity!=NULL && $idd!=NULL)
		{
			$v=10;
			$query="INSERT into product(id,name,price,quantity) VALUES('$idd','$Name','$v','$quantity')";
			//$query2="SELECT * from product where name='$Name'";
		//	$result=mysqli_query($db,$query2);
	//if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //while($row = mysqli_fetch_assoc($result)) {
  //$total2=$row["quantity"];
  
	//}
	//}
//$total2=$total2+$quantity;
//mysqli_query($db,$query);
//$query4="UPDATE product set quantity='$total2' where name ='$Name'";
if (mysqli_query($db, $query)) {
	echo "update successfully";
	$_SESSION["msg"]="product has been updated";
	$_SESSION["nid"]=$_SESSION["userid"];
header("location: admin.html");
}


}
}
	?>